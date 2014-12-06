<?php

namespace app\modules\shop\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\shop\models\AttributeValue;

/**
 * AttributeValueSearch represents the model behind the search form about `app\modules\shop\models\AttributeValue`.
 */
class AttributeValueSearch extends AttributeValue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'attribute_id', 'value_int', 'value_bool', 'value_enum_id'], 'integer'],
            [['value_text', 'value_date'], 'safe'],
            [['value_float'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AttributeValue::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'attribute_id' => $this->attribute_id,
            'value_float' => $this->value_float,
            'value_int' => $this->value_int,
            'value_date' => $this->value_date,
            'value_bool' => $this->value_bool,
            'value_enum_id' => $this->value_enum_id,
        ]);

        $query->andFilterWhere(['like', 'value_text', $this->value_text]);

        return $dataProvider;
    }
}
