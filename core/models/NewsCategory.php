<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newsCategory".
 *
 * @property integer $id
 * @property string $mininame
 * @property string $name
 */
class NewsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newsCategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mininame', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mininame' => 'Mininame',
            'name' => 'Name',
        ];
    }
}
