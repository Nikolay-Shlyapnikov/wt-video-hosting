<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "subscribe"
 *
 * @property int $id
 * @property string $created_at
 * @property int $user_id
 * @property int $subscriber_id
 *
 * @property User $user
 * @property User $subscriber
 */
class Subscription extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%subscription}}';
    }

    public function rules(): array
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_id'], 'exist', 'targetClass' => User::class, 'targetAttribute' => 'id'],
            [['user_id'], 'compare', 'compareAttribute' => 'subscriber_id', 'operator' => '!==', 'type' => 'number'],

            [['subscriber_id'], 'required'],
            [['subscriber_id'], 'integer'],
            [['subscriber_id'], 'exist', 'targetClass' => User::class, 'targetAttribute' => 'id'],
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
    public function getSubscriber(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'subscriber_id']);
    }
}
