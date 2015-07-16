<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property integer $id
 * @property string $receiver_name
 * @property string $receiver_emal
 * @property string $subject
 * @property string $content
 * @property string $attachment
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['receiver_name', 'receiver_emal', 'subject', 'content', 'attachment'], 'required'],
            [['content'], 'string'],
            [['receiver_name'], 'string', 'max' => 50],
            [['receiver_emal'], 'string', 'max' => 200],
            [['subject', 'attachment'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receiver_name' => 'Receiver Name',
            'receiver_emal' => 'Receiver Emal',
            'subject' => 'Subject',
            'content' => 'Content',
            'attachment' => 'Attachment',
        ];
    }
}
