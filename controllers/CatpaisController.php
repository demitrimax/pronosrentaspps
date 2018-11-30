<?php

namespace app\controllers;

use Yii;
use app\models\Catpais;
use app\models\CatpaisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatpaisController implements the CRUD actions for Catpais model.
 */
class CatpaisController extends Controller
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
     * Lists all Catpais models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CatpaisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Catpais model.
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
     * Creates a new Catpais model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Catpais();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
          $bitacora = new Bitacora();
          $bitacora->usuario = "moises";
          $bitacora->fecha = date('Y-m-d H:i:s');
          $bitacora->accion = "Creó un país: ".$model->nombre;
          $bitacora->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Catpais model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              $bitacora = new Bitacora();
              $bitacora->usuario = "moises";
              $bitacora->fecha = date('Y-m-d H:i:s');
              $bitacora->accion = "Se actualizó un país: ".$model->nombre;
              $bitacora->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Catpais model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $nombre = $this->findModel($id)->nombre;
        $this->findModel($id)->delete();
        $bitacora = new Bitacora();
        $bitacora->usuario = "moises";
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->accion = "Eliminó un país con id: ".$nombre;
        $bitacora->save(false);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Catpais model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Catpais the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Catpais::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
