<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_additional".
 *
 * @property int $id
 * @property int $menu_id
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_uz
 * @property int $price
 */
class MenuAdditional extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_additional';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'name_ru', 'name_en', 'name_uz', 'price'], 'required'],
            [['menu_id', 'price'], 'integer'],
            [['name_ru', 'name_en', 'name_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_uz' => 'Name Uz',
            'price' => 'Price',
        ];
    }
}
