<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil60200121124 $model */

$this->title = 'Update Profil60200121124: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profil60200121124s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil60200121124-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
