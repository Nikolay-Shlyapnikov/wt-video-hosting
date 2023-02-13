<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category"
 *
 * @property int $id
 * @property string $created_at
 * @property string $name
 * @property string $desc
 * @property bool is_xxx
 *
 * @property Publication[] $publications
 */
class Category extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%category}}';
    }

    public function rules(): array
    {
        return [
            [['name'], 'trim'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 128],

            [['desc'], 'trim'],
            [['desc'], 'required'],
            [['desc'], 'string'],

            [['is_xxx'], 'required'],
            [['is_xxx'], 'boolean'],
        ];
    }

    public function attributeLabels(): array
    {
        return [];
    }

    /**
     * @return ActiveQuery
     */
    public function getPublications(): ActiveQuery
    {
        return $this->hasMany(Publication::class, ['category_id' => 'id']);
    }
}
