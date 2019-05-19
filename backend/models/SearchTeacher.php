<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Teacher;

/**
 * SearchTeacher represents the model behind the search form of `backend\models\Teacher`.
 */
class SearchTeacher extends Teacher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacherID', 'departmentID', 'status'], 'integer'],
            [['teacherName', 'avatar'], 'safe'],
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
        $query = Teacher::find();

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
            'teacherID' => $this->teacherID,
            'departmentID' => $this->departmentID,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'teacherName', $this->teacherName])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
