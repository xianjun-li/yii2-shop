<?php

namespace app\modules\shop\models;

use Yii;

/**
 * This is the model class for table "{{%enumgroup_value}}".
 *
 * @property integer $id
 * @property integer $enumgroup_id
 * @property integer $enumvalue_id
 */
class EnumgroupValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enumgroup_value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enumgroup_id', 'enumvalue_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enumgroup_id' => 'Enumgroup ID',
            'enumvalue_id' => 'Enumvalue ID',
        ];
    }
}
