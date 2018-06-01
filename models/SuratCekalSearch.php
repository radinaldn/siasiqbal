<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratCekal;

/**
 * SuratCekalSearch represents the model behind the search form of `app\models\SuratCekal`.
 */
class SuratCekalSearch extends SuratCekal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_surat_cekal', 'asal', 'nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'foto', 'status', 'pekerjaan', 'alamat', 'keputusan_kerja_kepja', 'tanggal_mulai_cekal'], 'safe'],
            [['no_ktp', 'no_passport', 'surat_permohonan_cekal_no_tgl'], 'integer'],
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
        $query = SuratCekal::find();

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
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_ktp' => $this->no_ktp,
            'no_passport' => $this->no_passport,
            'surat_permohonan_cekal_no_tgl' => $this->surat_permohonan_cekal_no_tgl,
            'tanggal_mulai_cekal' => $this->tanggal_mulai_cekal,
        ]);

        $query->andFilterWhere(['like', 'id_surat_cekal', $this->id_surat_cekal])
            ->andFilterWhere(['like', 'asal', $this->asal])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'keputusan_kerja_kepja', $this->keputusan_kerja_kepja]);

        return $dataProvider;
    }
}
