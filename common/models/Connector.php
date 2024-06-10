<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "connector".
 *
 * @property int $id
 * @property int|null $menu_id
 * @property int|null $allergen_id
 */
class Connector extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'connector';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'allergen_id'], 'integer'],
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
            'allergen_id' => 'Allergen ID',
        ];
    }

    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    public function getAllergen()
    {
        return $this->hasOne(Allergens::className(), ['id' => 'allergen_id']);
    }
}
