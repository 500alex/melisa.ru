<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $title
 * @property string $minidescription
 * @property string $description
 * @property string $img
 * @property integer $category
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['minidescription', 'description'], 'string'],
            [['category'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'minidescription' => 'Minidescription',
            'description' => 'Description',
            'img' => 'Img',
            'category' => 'Category',
        ];
    }
}
