<?php
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?>

<?=
Html::a('Kembali', ['index'], ['class' => 'btn btn-primary']);

?>
<br>
<br>
<?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id078',
            'nim078',
            'nama078',
            'kelas078',
            'status078',
        ]
]);
?>