<?php

namespace app\controllers;

use app\models\DanceNews;
use app\models\DanceServices;
use app\models\DanceSliders;
use app\models\DanceTeachers;
use app\models\DanceTopblock;
use app\models\Faq;
use app\models\History;
use app\models\NewsCategory;
use app\models\Testimonials;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	$this->layout = 'frontmain';
        $topBlocks = DanceTopblock::find()->all();

        return $this->render('index',[
            'topBlocks' => $topBlocks,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['sliders/index']);
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $testimonial = Testimonials::find()->where(['favorites' => 1])->orderBy('rand()')->limit(1)->all();

        return $this->render('about',[
            'testimonial' => $testimonial,
        ]);
    }

    public function actionServices()
    {
        $services = DanceServices::find()->all();
        return $this->render('services', [
            'services' => $services,
        ]);
    }

    public function actionTeachers()
    {
        $teachers = DanceTeachers::find()->all();
        return $this->render('teachers', [
            'teachers' => $teachers,
        ]);
    }

    public function actionNews($category = null)
    {
        if ($category){
            $news       = DanceNews::find()->where(['category' => $category])->all();
        } else {
            $news       = DanceNews::find()->all();
        }
        $categorys       = NewsCategory::find()->orderBy('rand()')->limit(6)->all();
        $lastNews       = DanceNews::find()->orderBy(['time' => SORT_DESC])->limit(3)->all();
        return $this->render('news', [
            'news'      => $news,
            'categorys'  => $categorys,
            'lastNews'  => $lastNews,
        ]);
    }

    public function actionContacts()
    {
        $model = new ContactForm();
				if ($model->load(Yii::$app->request->post()) && $model->contact('crazy.unborn@gmail.com', Yii::$app->request->post('contact_email_copy'))) {
				  Yii::$app->session->setFlash('contactFormSubmitted');

				  return $this->refresh();
				}

        return $this->render('contacts', [
            'model' => $model,
        ]);
    }

    public function actionHistory()
    {
        $years = History::find()->all();
        return $this->render('history', [
            'years' => $years,
        ]);
    }

    public function actionFaqs()
    {
	    $this->enableCsrfValidation = false;
	    if (Yii::$app->request->post()){
		    $faqs = Faq::find()->where(['or', ['like', 'title', '%' . Yii::$app->request->post('searchword') . '%', false], ['like', 'description', '%' . Yii::$app->request->post('searchword') . '%', false]])->all();
	    } else {
		    $faqs = Faq::find()->all();
	    }

        return $this->render('faqs', [
            'faqs' => $faqs,
        ]);
    }

    public function actionTestimonials()
    {
		    $this->enableCsrfValidation = false;
		    if (Yii::$app->request->post()){
			    $testimonials = Testimonials::find()->where(['or', ['like', 'description', '%' . Yii::$app->request->post('searchword') . '%', false], ['like', 'name', '%' . Yii::$app->request->post('searchword') . '%', false], ['like', 'site', '%' . Yii::$app->request->post('searchword') . '%', false]])->all();
		    } else {
			    $testimonials = Testimonials::find()->all();
		    }
        return $this->render('testimonials', [
            'testimonials' => $testimonials,
        ]);
    }
}
