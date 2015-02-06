<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receipt".
 *
 * @property integer $id
 * @property string $title
 *
 * @property ReceiptDetail[] $receiptDetails
 */
class Receipt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receipt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['title', 'required'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceiptDetails()
    {
        return $this->hasMany(ReceiptDetail::className(), ['receipt_id' => 'id']);
    }
}
