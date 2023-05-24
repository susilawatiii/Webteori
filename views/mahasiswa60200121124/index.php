<?php

use app\models\Mahasiswa60200121124;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa60200121124Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mahasiswa60200121124s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa60200121124-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mahasiswa60200121124', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'nama',
            'kelas',
           // 'jurusan',
            'profil_60200121124.foto_profil',
            
            ['class' => 'yii\grid\ActionColumn'],
            ],
    ]); ?>


</div>
