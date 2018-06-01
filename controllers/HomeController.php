<?php
/**
 * Created by PhpStorm.
 * User: radinaldn
 * Date: 01/06/18
 * Time: 10:57
 */

namespace app\controllers;


use yii\filters\VerbFilter;
use yii\web\Controller;
use app\models\SuratMasuk;
use app\models\SuratCekal;
use app\models\SuratKeluar;
use app\models\User;
use app\models\Lapinhar;
use app\models\Lapinsus;

class HomeController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index','create','update','view'],
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }

    public function actionIndex(){

        $tot_surat_masuk = SuratMasuk::find()
            ->count();

        $tot_surat_keluar = SuratKeluar::find()
            ->count();

        $tot_surat_cekal = SuratCekal::find()
            ->count();

        $tot_pengguna = User::find()
            ->count();

        $tot_lapinhar = Lapinhar::find()
            ->count();

        $tot_lapinsus = Lapinsus::find()
            ->count();

        return $this->render('index', [
            'total_surat_masuk'=>$tot_surat_masuk,
            'total_surat_keluar'=>$tot_surat_keluar,
            'total_surat_cekal'=>$tot_surat_cekal,
            'total_pengguna'=>$tot_pengguna,
            'total_lapinhar'=>$tot_lapinhar,
            'total_lapinsus'=>$tot_lapinsus,
        ]);
    }
}