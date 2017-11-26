<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sliders".
 *
 * @property integer $id
 * @property string $name
 * @property string $descrition
 * @property string $img
 * @property string $sort
 */
class Sliders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sliders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'descrition', 'sort'], 'string', 'max' => 255],
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
            'descrition' => 'Descrition',
            'img' => 'Img',
            'sort' => 'Sort',
        ];
    }
}
