<?php
    use yii\helpers\Html;
    use app\widgets\Alert;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
?>

<?=
Html::a('Mahasiswa Baru', ['tambah'], ['class' => 'btn btn-primary']);

?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id078',
            'nim078',
            'nama078',
            'kelas078',
            'status078',
            ['class' => ActionColumn::className()]
        ]
]);
?>