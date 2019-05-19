<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Schedule;

/**
 * SearchSchedule represents the model behind the search form of `backend\models\Schedule`.
 */
class SearchSchedule extends Schedule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'semesterID'], 'integer'],
            [['offercode'], 'safe'],
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
        $query = Schedule::find();

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
            'id' => $this->id,
            'semesterID' => $this->semesterID,
        ]);

        $query->andFilterWhere(['like', 'offercode', $this->offercode]);

        return $dataProvider;
    }
}
