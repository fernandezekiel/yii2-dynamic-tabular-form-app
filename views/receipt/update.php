<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Receipt */
/* @var $modelDetails app\models\ReceiptDetail */

$this->title = 'Update Receipt: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="receipt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelDetails' => $modelDetails
    ]) ?>

</div>
