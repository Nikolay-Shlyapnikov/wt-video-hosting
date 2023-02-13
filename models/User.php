<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user"
 *
 * @property int $id
 * @property string $created_at
 * @property string $login
 * @property string $password_hash
 * @property int $age
 * @property string $chanel
 * @property string $image_path
 *
 * @property Comment[] $comments
 * @property Like[] $likes
 * @property Publication[] $publications
 * @property Subscription[] $subscriptions
 */
class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName(): string
    {
        return '{{%user}}';
    }

    public function rules(): array
    {
        return [
            [['login'], 'trim'],
            [['login'], 'required'],
            [['login'], 'string', 'max' => 128],
            [['login'], 'email'],
            [['login'], 'unique'],

            [['password_hash'], 'trim'],
            [['password_hash'], 'required'],
            [['password_hash'], 'string', 'max' => 255],

            [['age'], 'required'],
            [['age'], 'integer', 'min' => 0],

            [['chanel_name'], 'trim'],
            [['chanel_name'], 'required'],
            [['chanel_name'], 'string', 'max' => 128],

            [['image_path'], 'trim'],
            [['image_path'], 'required'],
            [['image_path'], 'string', 'max' => 128],
            [['image_path'], 'unique'],
        ];
    }

    public function attributeLabels(): array
    {
        return [];
    }

    /**
     * @return ActiveQuery
     */
    public function getComments(): ActiveQuery
    {
        return $this->hasMany(Comment::class, ['user_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getLikes(): ActiveQuery
    {
        return $this->hasMany(Like::class, ['user_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPublications(): ActiveQuery
    {
        return $this->hasMany(Publication::class, ['user_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSubscriptions(): ActiveQuery
    {
        return $this->hasMany(Subscription::class, ['subscriber_id' => 'id']);
    }

    public static function findIdentity($id)
    {
        // TODO: Implement findIdentity() method.
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId(): int
    {
        // TODO: Implement getId() method.
        return $this->id;
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    public function validatePassword(string $password): bool
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
}
