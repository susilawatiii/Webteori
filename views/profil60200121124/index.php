<?php

use app\models\Profil60200121124;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Profil60200121124Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profil60200121124s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil60200121124-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profil60200121124', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_mahasiswa',
            'foto_profil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Profil60200121124 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
