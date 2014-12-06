<?php

namespace app\modules\shop\models;

use Yii;

/**
 * This is the model class for table "{{%enumgroup}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Attribute[] $attributes
 */
class Enumgroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enumgroup}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributesRelation()
    {
        return $this->hasMany(Attribute::className(), ['enum_group_id' => 'id']);
    }
}
