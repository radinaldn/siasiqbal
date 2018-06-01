<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lapinhar;

/**
 * LapinharSearch represents the model behind the search form of `app\models\Lapinhar`.
 */
class LapinharSearch extends Lapinhar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lapinhar'], 'integer'],
            [['no_tar_tanggal', 'no_rlik', 'perihal'], 'safe'],
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
        $query = Lapinhar::find();

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
            'id_lapinhar' => $this->id_lapinhar,
        ]);

        $query->andFilterWhere(['like', 'no_tar_tanggal', $this->no_tar_tanggal])
            ->andFilterWhere(['like', 'no_rlik', $this->no_rlik])
            ->andFilterWhere(['like', 'perihal', $this->perihal]);

        return $dataProvider;
    }
}
