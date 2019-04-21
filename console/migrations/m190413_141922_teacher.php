<?php

use yii\db\Migration;

/**
 * Class m190413_141922_teacher
 */
class m190413_141922_teacher extends Migration
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

        $this->createTable('{{%teacher}}', [
            'teacherID' => $this->primaryKey(),
            'teacherName' => $this->string()->notNull(),
             'major' => $this->string()->notNull(),
            'department' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'avatar' => $this->string(),
        ], $tableOptions);
    }
 public function down()
    {
        $this->dropTable('{{%teacher}}');
    }
}
