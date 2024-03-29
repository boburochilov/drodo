<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Social $model */

$this->title = 'Update Social: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Socials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="social-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
