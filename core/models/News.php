<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $name
 * @property integer $time
 * @property string $minidescription
 * @property string $description
 * @property string $img
 * @property integer $category
 * @property integer $written
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time', 'category', 'written'], 'integer'],
            [['description'], 'string'],
            [['name', 'minidescription'], 'string', 'max' => 255],
            ['img', 'file', 'extensions' => 'png, jpg']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'time' => 'Time',
            'minidescription' => 'Minidescription',
            'description' => 'Description',
            'img' => 'Img',
            'category' => 'Category',
            'written' => 'Written',
        ];
    }
}
