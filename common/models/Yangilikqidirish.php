<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Yangiliklar;

/**
 * Yangilikqidirish represents the model behind the search form of `common\models\Yangiliklar`.
 */
class Yangilikqidirish extends Yangiliklar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomer', 'bolim_id', 'hosil_sana'], 'integer'],
            [['sarlavha', 'mahsulot'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Yangiliklar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'nomer' => $this->nomer,
            'bolim_id' => $this->bolim_id,
            'hosil_sana' => $this->hosil_sana,
        ]);

        $query->andFilterWhere(['like', 'sarlavha', $this->sarlavha])
            ->andFilterWhere(['like', 'mahsulot', $this->mahsulot]);

        return $dataProvider;
    }
}
