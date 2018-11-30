<?php

namespace app\controllers;

use Yii;
use app\models\Imagencia;
use app\models\ImagenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ImagenciaController implements the CRUD actions for Imagencia model.
 */
class ImagenciaController extends Controller
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
        ];
    }

    /**
     * Lists all Imagencia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImagenciaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Imagencia model.
     * @param integer $id
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
     * Creates a new Imagencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Imagencia();
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
              $nombre = 'imagencias/' . $model->imageFile->baseName . uniqid() . '.' . $model->imageFile->extension;
              $model->imageFile->saveAs($nombre);
              $imagen = new Imagencia();
              $imagen->imagen = $nombre;
              $imagen->catciaid = $model->catciaid;
              $imagen->fecha = date('Y-m-d H:i:s');
              $imagen->save();
              return $this->redirect(['view', 'id' => $model->id]);

        }

         if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Imagencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Imagencia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Imagencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Imagencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Imagencia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUpload()
   {
       $model = new UploadForm();

       if (Yii::$app->request->isPost) {
           $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
           if ($nombre= $model->upload()) {
             $imagen = new Imagencia();
             $imagen->imagen = $nombre;
             $imagen->catciaid = $model->catciaid;
             $imagen->fecha = date('Y-m-d H:i:s');
             $imagen->save();
               return;
           }
       }

       return $this->render('upload', ['model' => $model]);
   }
}
