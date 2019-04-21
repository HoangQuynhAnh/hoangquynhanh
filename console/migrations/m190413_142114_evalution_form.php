<?php

use yii\db\Migration;

/**
 * Class m190413_142114_evalution_form
 */
class m190413_142114_evalution_form extends Migration
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

        $this->createTable('{{%evalutionform}}', [
            'ID' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'score' =>$this->smallInteger()->notNull()->defaultValue(10),
            'description' =>$this->string()->notNull(),
            'teacherID'=>$this->string()->notNull(),

            
        ], $tableOptions);
    }
 public function down()
    {
        $this->dropTable('{{%evalutionform}}');
    }
