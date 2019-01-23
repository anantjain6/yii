<?php

use yii\db\Migration;

/**
 * Class m190123_130135_enrollment
 */
class m190123_130135_enrollment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('enrollment', [
            'date' => $this->date(),
            'st_id' => $this->integer(),
            'cr_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('enrollment');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_130135_enrollment cannot be reverted.\n";

        return false;
    }
    */
}
