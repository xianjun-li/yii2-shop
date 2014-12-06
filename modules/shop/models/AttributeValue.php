<?php

namespace app\modules\shop\models;

use Yii;

/**
 * This is the model class for table "{{%attribute_value}}".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $attribute_id
 * @property string $value_text
 * @property double $value_float
 * @property integer $value_int
 * @property string $value_date
 * @property integer $value_bool
 * @property integer $value_enum_id
 *
 * @property Attribute $attribute
 * @property Product $product
 */
class AttributeValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute_value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'attribute_id', 'value_int', 'value_bool', 'value_enum_id'], 'integer'],
            [['value_text'], 'string'],
            [['value_float'], 'number'],
            [['value_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'attribute_id' => 'Attribute ID',
            'value_text' => 'Value Text',
            'value_float' => 'Value Float',
            'value_int' => 'Value Int',
            'value_date' => 'Value Date',
            'value_bool' => 'Value Bool',
            'value_enum_id' => 'Value Enum ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributeRelation()
    {
        return $this->hasOne(Attribute::className(), ['id' => 'attribute_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
