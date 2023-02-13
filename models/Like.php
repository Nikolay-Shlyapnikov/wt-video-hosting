<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "like"
 *
 * @property int $id
 * @property string $created_at
 * @property int $user_id
 * @property int $publication_id
 *
 * @property User $user
 * @property Publication $publication
 */
class Like extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%like}}';
    }

    public function rules(): array
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_id'], 'exist', 'targetClass' => User::class, 'targetAttribute' => 'id'],
            [['user_id'], 'compare', 'compareAttribute' => 'subscriber_id', 'operator' => '!==', 'type' => 'number'],

            [['publication_id'], 'required'],
            [['publication_id'], 'integer'],
            [['publication_id'], 'exist', 'targetClass' => Publication::class, 'targetAttribute' => 'id'],
        ];
    }

    public function attributeLabels(): array
    {
        return [];
    }

    /**
     * @return ActiveQuery
     */
    public function getUser(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPublication(): ActiveQuery
    {
        return $this->hasOne(Publication::class, ['id' => 'publication_id']);
    }
}
