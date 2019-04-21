<?php

use yii\db\Migration;

/**
 * Class m190413_142154_result
 */
class m190413_142154_result extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%result}}', [
            'ID' => $this->primaryKey(),
            'teacherID' => $this->string()->notNull(),
            'score' => $this->Integer()->notNull(),
        ], $tableOptions);
    }
 public function down()
    {
        $this->dropTable('{{%result}}');
    }
}
