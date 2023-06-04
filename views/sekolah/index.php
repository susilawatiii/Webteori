<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
?>


<p>
    <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
</p>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' =>'yii\grid\SerialColumn'],
            'id',
            'npsn',
            'alamat',
            'kelurahan',
            'kode_kecamatan',
            
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
        ],
    ],
]);
    ?>