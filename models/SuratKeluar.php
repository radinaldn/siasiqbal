<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_surat_keluar".
 *
 * @property string $id_surat_keluar
 * @property string $tanggal
 * @property string $perihal
 * @property string $kepada
 */
class SuratKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_surat_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_surat_keluar', 'tanggal', 'perihal', 'kepada'], 'required'],
            [['tanggal'], 'safe'],
            [['id_surat_keluar', 'perihal', 'kepada'], 'string', 'max' => 150],
            [['id_surat_keluar'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_surat_keluar' => 'Nomor Surat Keluar',
            'tanggal' => 'Tanggal',
            'perihal' => 'Perihal',
            'kepada' => 'Kepada',
        ];
    }
}
