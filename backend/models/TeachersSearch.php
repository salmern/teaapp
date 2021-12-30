<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form of `backend\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'teacher_age'], 'integer'],
            [['teacher_name', 'teacher_address', 'teacher_mail', 'date_join'], 'safe'],
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
        $query = Teachers::find();

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
            'teacher_id' => $this->teacher_id,
            'teacher_age' => $this->teacher_age,
            'date_join' => $this->date_join,
        ]);

        $query->andFilterWhere(['like', 'teacher_name', $this->teacher_name])
            ->andFilterWhere(['like', 'teacher_address', $this->teacher_address])
            ->andFilterWhere(['like', 'teacher_mail', $this->teacher_mail]);

        return $dataProvider;
    }
}
