<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Receipt */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receipt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
        ],
    ]) ?>
    <h2>Details</h2>
    <table class="receipt-details table">
        <tr>
            <th>ID</th>
            <th>Item name</th>
        </tr>
        <?php foreach($model->receiptDetails as $receiptDetail) :?>
            <tr>
                <td><?= $receiptDetail->id ?></td>
                <td><?= $receiptDetail->item_name ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>
