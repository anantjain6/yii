<?php

use yii\db\Migration;

/**
 * Class m190123_131429_foreign_key
 */
class m190123_131429_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'basic-enrollment-st_id',
            'enrollment',
            'st_id',
            'student',
            'st_id',
            'CASCADE'
        );
        $this->addForeignKey(
            'basic-enrollment-cr_id',
            'enrollment',
            'cr_id',
            'course',
            'cr_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'basic-enrollment-st_id',
            'enrollment'
        );
        $this->dropForeignKey(
            'basic-enrollment-cr_id',
            'enrollment'
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_131429_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
