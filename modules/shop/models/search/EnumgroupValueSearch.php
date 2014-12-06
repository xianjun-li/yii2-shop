<?php

namespace app\modules\shop\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\shop\models\EnumgroupValue;

/**
 * EnumgroupValueSearch represents the model behind the search form about `app\modules\shop\models\EnumgroupValue`.
 */
class EnumgroupValueSearch extends EnumgroupValue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'enumgroup_id', 'enumvalue_id'], 'integer'],
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
        $query = EnumgroupValue::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'enumgroup_id' => $this->enumgroup_id,
            'enumvalue_id' => $this->enumvalue_id,
        ]);

        return $dataProvider;
    }
}
