<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uz
 * @property string $desc_ru
 * @property string $desc_en
 * @property string $desc_uz
 * @property int $created
 * @property int $status
 * @property int $price
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title_ru', 'title_en', 'title_uz', 'desc_ru', 'desc_en', 'desc_uz', 'price'], 'required'],
            [['category_id', 'created', 'status', 'price'], 'integer'],
            [['desc_ru', 'desc_en', 'desc_uz'], 'string'],
            [['title_ru', 'title_en', 'title_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'title_ru' => 'Заголовок на русском',
            'title_en' => 'Заголовок на английском',
            'title_uz' => 'Заголовок на узбекском',
            'desc_ru' => 'Описание на русском',
            'desc_en' => 'Описание на английском',
            'desc_uz' => 'Описание на узбекском',
            'created' => 'Дата создания',
            'status' => 'Статус',
            'price' => 'Цена',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(MenuCategory::className(), ['id' => 'category_id']);
    }
}
