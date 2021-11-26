<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ogscoresranking;

/**
 * OgscoresrankingSearch represents the model behind the search form of `app\models\Ogscoresranking`.
 */
class OgscoresrankingSearch extends Ogscoresranking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rID'], 'integer'],
            [['goldRank', 'medalsRank'], 'safe'],
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
        $query = Ogscoresranking::find();

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
            'rID' => $this->rID,
        ]);

        $query->andFilterWhere(['like', 'goldRank', $this->goldRank])
            ->andFilterWhere(['like', 'medalsRank', $this->medalsRank]);

        return $dataProvider;
    }
}
