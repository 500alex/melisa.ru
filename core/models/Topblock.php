<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topblock".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $img
 * @property string $url
 */
class Topblock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topblock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'url'], 'string', 'max' => 255],
            ['img', 'file', 'extensions' => 'png, jpg'],
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
            'description' => 'Description',
            'img' => 'Img',
            'url' => 'Url',
        ];
    }
}
