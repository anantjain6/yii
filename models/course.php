<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $cr_id
 * @property string $grade
 * @property string $name
 *
 * @property Enrollment[] $enrollments
 */
class course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grade', 'name'], 'required'],
            [['grade', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cr_id' => 'Cr ID',
            'grade' => 'Grade',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['cr_id' => 'cr_id']);
    }
}
