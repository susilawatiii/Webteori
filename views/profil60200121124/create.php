<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil60200121124 $model */

$this->title = 'Create Profil60200121124';
$this->params['breadcrumbs'][] = ['label' => 'Profil60200121124s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil60200121124-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
