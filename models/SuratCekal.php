<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_surat_cekal".
 *
 * @property string $id_surat_cekal
 * @property string $asal
 * @property string $nama
 * @property string $jk
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property int $foto
 * @property string $status
 * @property string $pekerjaan
 * @property string $alamat
 * @property int $no_ktp
 * @property int $no_passport
 * @property int $surat_permohonan_cekal_no_tgl
 * @property int $keputusan_kerja_kepja
 * @property string $tanggal_mulai_cekal
 */
class SuratCekal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_surat_cekal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_surat_cekal', 'asal', 'nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'foto', 'status', 'pekerjaan', 'alamat', 'no_ktp', 'no_passport', 'surat_permohonan_cekal_no_tgl', 'keputusan_kerja_kepja', 'tanggal_mulai_cekal'], 'required'],
            [['asal', 'status'], 'string'],
            [['tanggal_lahir', 'tanggal_mulai_cekal'], 'safe'],
            [['no_ktp', 'no_passport', 'surat_permohonan_cekal_no_tgl'], 'integer'],
            [['foto', 'keputusan_kerja_kepja', 'id_surat_cekal', 'nama', 'alamat'], 'string', 'max' => 150],
            [['jk'], 'string', 'max' => 1],
            [['tempat_lahir', 'pekerjaan'], 'string', 'max' => 100],
            [['id_surat_cekal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_surat_cekal' => 'Nomor Surat Cekal',
            'asal' => 'Asal',
            'nama' => 'Nama',
            'jk' => 'Jk',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'foto' => 'Foto',
            'status' => 'Status',
            'pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'no_ktp' => 'No Ktp',
            'no_passport' => 'No Passport',
            'surat_permohonan_cekal_no_tgl' => 'Surat Permohonan Cekal No Tgl',
            'keputusan_kerja_kepja' => 'Keputusan Kerja Kepja',
            'tanggal_mulai_cekal' => 'Tanggal Mulai Cekal',
        ];
    }
}
