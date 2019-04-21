<?php

use yii\db\Migration;

/**
 * Class m190413_134049_subjects
 */
class m190413_134049_subjects extends Migration
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

        $this->createTable('{{%subjects}}', [
            'offercode' => $this->primaryKey(),
            'subjectname' => $this->string()->notNull(),
            'offercode' => $this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
        ], $tableOptions);
    }
 public function down()
    {
        $this->dropTable('{{%subjects}}');
    }
}
