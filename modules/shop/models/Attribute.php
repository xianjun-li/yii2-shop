<?php

namespace app\modules\shop\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "{{%attribute}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property integer $type_id
 * @property string $datatype
 * @property integer $enum_group_id
 *
 * @property Enumgroup $enumGroup
 * @property Type $type
 * @property AttributeValue[] $attributeValues
 */
class Attribute extends \yii\db\ActiveRecord
{

    const TYPE_TEXT = 1;
    const TYPE_FLOAT = 2;
    const TYPE_INT = 3;
    const TYPE_DATE = 4;
    const TYPE_BOOLEAN = 5;
    const TYPE_ENUM = 6;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug'], 'required'],
            [['type_id', 'enum_group_id'], 'integer'],
            [['title', 'slug', 'datatype'], 'string', 'max' => 255]
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
            'slug' => 'Slug',
            'type_id' => 'Type ID',
            'datatype' => 'Datatype',
            'enum_group_id' => 'Enum Group ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnumGroup()
    {
        return $this->hasOne(Enumgroup::className(), ['id' => 'enum_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributeValues()
    {
        return $this->hasMany(AttributeValue::className(), ['attribute_id' => 'id']);
    }


    public static function getDataType()
    {
        $listDataType = [
              self::TYPE_TEXT=>'Текст',
              self::TYPE_FLOAT=>'Float',
              self::TYPE_INT=>'Целый',
              self::TYPE_DATE=>'Время',
              self::TYPE_BOOLEAN=>'Булево значение',
              self::TYPE_ENUM=>'Выпадающий список'
        ];
        return $listDataType
            ;
    }
}
