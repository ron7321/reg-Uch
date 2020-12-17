<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "uch_info".
 *
 * @property int $id
 * @property int $id_user
 * @property string|null $fio
 * @property string|null $class
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $main_tech
 * @property string|null $parent_phone
 */
class UchInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uch_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'required'],
            [['id_user'], 'integer'],
            [['fio', 'class', 'phone', 'address', 'main_tech', 'parent_phone'], 'string'],
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
            'class' => 'Класс',
            'phone' => 'Номер телефона',
            'address' => 'Адресс',
            'main_tech' => 'Классный руководитель',
            'parent_phone' => 'Телефон родителя',
        ];
    }
}
