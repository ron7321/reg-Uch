<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tech_info".
 *
 * @property int $id
 * @property int $id_user
 * @property string|null $fio
 * @property string|null $phone
 * @property string|null $lesson
 * @property string|null $class
 */
class TechInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tech_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'required'],
            [['id_user'], 'integer'],
            [['fio', 'phone', 'lesson', 'class'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'fio' => 'ФИО',
            'phone' => 'Номер телефона',
            'lesson' => 'Предмет',
            'class' => 'Аудитория',
        ];
    }
}
