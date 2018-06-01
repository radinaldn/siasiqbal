<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_lapinsus".
 *
 * @property int $id_lapinsus
 * @property string $no_tar_tanggal
 * @property string $no_rlik
 * @property string $perihal
 */
class Lapinsus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_lapinsus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tar_tanggal', 'no_rlik', 'perihal'], 'required'],
            [['no_tar_tanggal', 'no_rlik', 'perihal'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lapinsus' => 'Nomor Lapinsus',
            'no_tar_tanggal' => 'No Tar Tanggal',
            'no_rlik' => 'No Rlik',
            'perihal' => 'Perihal',
        ];
    }
}
