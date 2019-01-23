<?php

use yii\db\Migration;

/**
 * Class m190123_130129_course
 */
class m190123_130129_course extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('course', [
            'cr_id' => $this->primaryKey(),
            'grade' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('course');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_130129_course cannot be reverted.\n";

        return false;
    }
    */
}
