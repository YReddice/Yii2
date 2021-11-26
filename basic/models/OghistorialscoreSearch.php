<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Oghistorialscore;

/**
 * OghistorialscoreSearch represents the model behind the search form of `app\models\Oghistorialscore`.
 */
class OghistorialscoreSearch extends Oghistorialscore
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hSportsID'], 'integer'],
            [['hSports', 'hSportsRecord'], 'safe'],
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
        $query = Oghistorialscore::find();

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
            'hSportsID' => $this->hSportsID,
        ]);

        $query->andFilterWhere(['like', 'hSports', $this->hSports])
            ->andFilterWhere(['like', 'hSportsRecord', $this->hSportsRecord]);

        return $dataProvider;
    }
}
