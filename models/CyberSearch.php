<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cyber;

/**
 * CyberSearch represents the model behind the search form of `app\models\Cyber`.
 */
class CyberSearch extends Cyber
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'angkatan', 'id_divisi'], 'integer'],
            [['nama', 'tgl_lahir', 'jekel'], 'safe'],
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
        $query = Cyber::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'angkatan' => $this->angkatan,
            'id_divisi' => $this->id_divisi,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jekel', $this->jekel]);

        return $dataProvider;
    }
}
