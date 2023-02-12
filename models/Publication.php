<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "publication"
 *
 * @property int $id
 * @property string $created_at
 * @property string $video_path
 * @property string $title
 * @property string $desc
 * @property int $view_count
 * @property int $user_id
 * @property int $category_id
 *
 * @property Category $category
 */
class Publication extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%publication}}';
    }

    public function rules(): array
    {
        return [
            [['video_path'], 'trim'],
            [['video_path'], 'required'],
            [['video_path'], 'string', 'max' => 128],
            [['video_path'], 'unique'],

            [['title'], 'trim'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 128],

            [['desc'], 'trim'],
            [['desc'], 'string'],

            [['view_count'], 'required'],
            [['view_count'], 'integer', 'min' => 0],

            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_id'], 'exist', 'targetClass' => User::class, 'targetAttribute' => 'id'],

            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['category_id'], 'exist', 'targetClass' => Category::class, 'targetAttribute' => 'id'],
        ];
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
    public function getCategory(): ActiveQuery
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}
