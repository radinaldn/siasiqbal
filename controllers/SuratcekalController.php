<?php

namespace app\controllers;

use Yii;
use app\models\SuratCekal;
use app\models\SuratCekalSearch;
use yii\db\Exception;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SuratcekalController implements the CRUD actions for SuratCekal model.
 */
class SuratcekalController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * Lists all SuratCekal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SuratCekalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratCekal model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SuratCekal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SuratCekal();

        if ($model->load(Yii::$app->request->post())) {

            try {
                $picture = UploadedFile::getInstance($model, 'foto');
                $model->foto = $_POST['SuratCekal']['id_surat_cekal'] . '.' . $picture->extension;

                if ($model->save()) {
                    $picture->saveAs('files/images/' . $model->id_surat_cekal . '.' . $picture->extension);
                    Yii::$app->getSession()->setFlash('success', 'Data saved!');
                    return $this->redirect(['view', 'id' => $model->id_surat_cekal]);
                } else {
                    Yii::$app->getSession()->setFlash("error", 'Data not saved!');
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            } catch (Exception $e) {
                Yii::$app->getSession()->setFlash('error', "{$e->getMessage()}");
            }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }


    }

    /**
     * Updates an existing SuratCekal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (isset($_POST['SuratCekal'])){
            $picture = UploadedFile::getInstance($model, 'foto');
            $_POST['SuratCekal']['foto'] = $model->id_surat_cekal.'.'.$picture->extension;

            $model->attributes = $_POST['SuratCekal'];

            if($model->save()){
                if(!empty($picture)){
                    $picture->saveAs('files/images/'. $model->id_surat_cekal.'.'.$picture->extension);
                }
                return $this->redirect(['view', 'id' => $model->id_surat_cekal]);
            }
        }

        else {
            return $this->render('update', [

                'model' => $model,
            ]);
        }

    }

    /**
     * Deletes an existing SuratCekal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratCekal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SuratCekal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SuratCekal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
