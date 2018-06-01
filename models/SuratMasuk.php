<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_surat_masuk".
 *
 * @property string $id_surat_masuk
 * @property string $perihal
 * @property string $tanggal
 * @property string $dari
 */
class SuratMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_surat_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_surat_masuk', 'perihal', 'tanggal', 'dari'], 'required'],
            [['tanggal'], 'safe'],
            [['dari'], 'string'],
            [['id_surat_masuk', 'perihal'], 'string', 'max' => 150],
            [['id_surat_masuk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_surat_masuk' => 'Nomor Surat Masuk',
            'perihal' => 'Perihal',
            'tanggal' => 'Tanggal',
            'dari' => 'Dari',
        ];
    }
}
