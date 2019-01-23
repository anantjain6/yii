<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enrollment".
 *
 * @property string $date
 * @property int $st_id
 * @property int $cr_id
 *
 * @property Course $cr
 * @property Student $st
 */
class enrollment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enrollment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['st_id', 'cr_id'], 'integer'],
            [['cr_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['cr_id' => 'cr_id']],
            [['st_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['st_id' => 'st_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'st_id' => 'St ID',
            'cr_id' => 'Cr ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCr()
    {
        return $this->hasOne(Course::className(), ['cr_id' => 'cr_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSt()
    {
        return $this->hasOne(Student::className(), ['st_id' => 'st_id']);
    }
}
