<?php

use yii\db\Schema;
use yii\db\Migration;

class m150204_103949_create_receipt_tables extends Migration
{
    public function up()
    {
        $this->createTable('receipt', [
            'id' => 'pk',
            'title' => 'string'
        ]);

        $this->createTable('receipt_detail', [
            'id' => 'pk',
            'receipt_id' => 'int',
            'item_name' => 'string'
        ]);

        $this->addForeignKey('receipt_detail_receipt_fk', 'receipt_detail', 'receipt_id', 'receipt', 'id', 'RESTRICT', 'RESTRICT');

    }

    public function down()
    {
        $this->dropTable('receipt_detail');
        $this->dropTable('receipt');
    }
}
