<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $teacher_id
 * @property string $teacher_name
 * @property string $teacher_address
 * @property string $teacher_mail
 * @property int $teacher_age
 * @property string $date_join
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'teacher_name', 'teacher_address', 'teacher_mail', 'teacher_age', 'date_join'], 'required'],
            [['teacher_id', 'teacher_age'], 'integer'],
            [['date_join'], 'safe'],
            [['teacher_name', 'teacher_address', 'teacher_mail'], 'string', 'max' => 255],
            [['teacher_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'teacher_name' => 'Teacher Name',
            'teacher_address' => 'Teacher Address',
            'teacher_mail' => 'Teacher Mail',
            'teacher_age' => 'Teacher Age',
            'date_join' => 'Date Join',
        ];
    }
}
