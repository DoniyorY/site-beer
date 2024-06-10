<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $message
 * @property int $created
 * @property int $status
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'email', 'phone', 'subject', 'message'], 'required'],
            [['created', 'status'], 'integer'],
            [['fullname', 'email', 'phone', 'subject', 'message'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'email' => 'Email',
            'phone' => 'Phone',
            'subject' => 'Subject',
            'message' => 'Message',
            'created' => 'Created',
            'status' => 'Status',
        ];
    }
}
