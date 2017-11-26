<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Topblock */

$this->title = 'Create Topblock';
$this->params['breadcrumbs'][] = ['label' => 'Topblocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topblock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
