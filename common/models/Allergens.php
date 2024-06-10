<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "allergens".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_uz
 * @property string $logo
 */
class Allergens extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allergens';
    }

    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ru', 'name_en', 'name_uz', 'logo'], 'required'],
            [['name_ru', 'name_en', 'name_uz', 'logo'], 'string', 'max' => 255],
            ['imageFile', 'file', 'extensions' => ['jpg', 'png', 'jpeg'], 'skipOnEmpty' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Название на русском',
            'name_en' => 'Название на английском',
            'name_uz' => 'Название на узбекском',
            'logo' => 'Лого',
            'imageFile'=>'Лого'
        ];
    }
}
