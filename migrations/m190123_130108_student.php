<?php

use yii\db\Migration;

/**
 * Class m190123_130108_student
 */
class m190123_130108_student extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('student', [
            'st_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'age' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('student');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_130108_student cannot be reverted.\n";

        return false;
    }
    */
}
