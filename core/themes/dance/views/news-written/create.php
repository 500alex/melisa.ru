<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NewsWritten */

$this->title = 'Create News Written';
$this->params['breadcrumbs'][] = ['label' => 'News Writtens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-written-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
