<?php
    use yii\grid\GridView

    ?>
    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
            'id',
            'kode_MK',
            'nama_MK',
            ]
        ])
    ?>    
