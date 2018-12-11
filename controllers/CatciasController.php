<?php

namespace app\controllers;

use Yii;
use app\models\Catcias;
use app\models\CatciasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Catpais;
use app\models\Bitacora;
use app\models\Imagencia;
use yii\web\UploadedFile;

/**
 * CatciasController implements the CRUD actions for Catcias model.
 */
class CatciasController extends Controller
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
     * Lists all Catcias models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CatciasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Catcias model.
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
     * Creates a new Catcias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Catcias();
        //echo "<pre>";
        //var_dump(Yii::$app->request->post());
        //die;
        if ($model->load(Yii::$app->request->post())) {

          $model->nacionalidad = mb_strtoupper($model->nacionalidad);
          $model->iniciales = mb_strtoupper($model->iniciales);
          if ($model->save()) {
              if (UploadedFile::getInstance($model, 'imageFile')) {
                  $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                  $nombre = 'imagencias/' . $model->imageFile->baseName . uniqid() . '.' . $model->imageFile->extension;
                  $model->imageFile->saveAs($nombre);
                  $imagen = new Imagencia();
                  $imagen->imagefile = $nombre;
                  $imagen->catciaid = $model->id;
                  $imagen->fecha = date('Y-m-d H:i:s');
                  $imagen->save();
                }
            //$bitacora = new Bitacora();
            //$bitacora->usuario = "moises";
            //$bitacora->fecha = date('Y-m-d H:i:s');
            //$bitacora->accion = "Creó un catcia: ".$model->nombre;
            //$bitacora->save(false);
            //$pais = Catpais::findOne(['nombre'=>$model->nacionalidad]);
            //echo "<pre>";
            //var_dump($pais);
            //var_dump($model->nacionalidad);
            //die;
            /*if (!isset($pais)) {
              $pais = new Catpais();
              $pais->nombre = $model->nacionalidad;
              $pais->contador = 0;
              $bitacora = new Bitacora();
              $bitacora->usuario = "moises";
              $bitacora->fecha = date('Y-m-d H:i:s');
              $bitacora->accion = "Creó un pais: ".$pais->nombre;
              $bitacora->save(false);
            }
            $pais->contador = $pais->contador+1;
            $pais->save();
            $bitacora = new Bitacora();
            $bitacora->usuario = "moises";
            $bitacora->fecha = date('Y-m-d H:i:s');
            $bitacora->accion = "Se actualizó un pais: ".$pais->nombre;
            $bitacora->save(false);
            */
            return $this->redirect(['view', 'id' => $model->id]);
        }
      }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Catcias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (isset($model->imageFile)) {
                  $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                  $nombre = 'imagencias/' . $model->imageFile->baseName . uniqid() . '.' . $model->imageFile->extension;
                  $model->imageFile->saveAs($nombre);
                  $imagen = new Imagencia();
                  $imagen->imagefile = $nombre;
                  $imagen->catciaid = $model->id;
                  $imagen->fecha = date('Y-m-d H:i:s');
                  $imagen->save();
                }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Catcias model.
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
     * Finds the Catcias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Catcias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Catcias::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
