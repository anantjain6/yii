<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $st_id
 * @property string $name
 * @property int $age
 *
 * @property Enrollment[] $enrollments
 */
class student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age'], 'required'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'st_id' => 'St ID',
            'name' => 'Name',
            'age' => 'Age',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['st_id' => 'st_id']);
    }
}
