<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Subjects;

/**
 * SearchSubjects represents the model behind the search form of `backend\models\Subjects`.
 */
class SearchSubjects extends Subjects
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['offercode', 'subjectname', 'description'], 'safe'],
            [['status'], 'integer'],
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
        $query = Subjects::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'offercode', $this->offercode])
            ->andFilterWhere(['like', 'subjectname', $this->subjectname])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
