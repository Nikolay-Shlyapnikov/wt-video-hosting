<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "comment"
 *
 * @property int $id
 * @property string $created_at
 * @property string $text
 * @property int $user_id
 * @property int $publication_id
 */
class Comment extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%comment}}';
    }

    public function rules(): array
    {
        return [
            [['text'], 'trim'],
            [['text'], 'required'],
            [['text'], 'string'],

            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_id'], 'exist', 'targetClass' => User::class, 'targetAttribute' => 'id'],

            [['publication_id'], 'required'],
            [['publication_id'], 'integer'],
            [['publication_id'], 'exist', 'targetClass' => Publication::class, 'targetAttribute' => 'id'],
        ];
    }
}