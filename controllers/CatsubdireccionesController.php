<?php

namespace app\controllers;

use Yii;
use app\models\Catsubdirecciones;
use app\models\CatsubdireccionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\ErrorException;
use yii\db\IntegrityException;
use yii\db\Exception;

/**
 * CatsubdireccionesController implements the CRUD actions for Catsubdirecciones model.
 */
class CatsubdireccionesController extends Controller
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
     * Lists all Catsubdirecciones models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CatsubdireccionesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Catsubdirecciones model.
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
     * Creates a new Catsubdirecciones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Catsubdirecciones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Catsubdirecciones model.
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
     * Deletes an existing Catsubdirecciones model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

      //ELIMINACION FISICA CON DEPENDENCIAS
      /*
      try {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
      } catch (Exception $e) {

        \Yii::warning("No se puede eliminar subdirecciones porque tiene Hijos.");

        return $this->render('error', [
            'error' => 'No se puede eliminar subdirecciones porque tiene Dependencias.',
            'model' => $this->findModel($id),
        ]);
      }
      */

        //BORRADO LOGICO

        $modelo = $this->findModel($id);
        $activos = $modelo->catactivos;
        if (count($activos)>0)  //VERIFICA QUE NO TENGA DEPENDENCIAS
        {
          return $this->render('error', [
              'error' => 'No se puede eliminar subdirecciones porque tiene Dependencias.',
              'model' => $this->findModel($id),
          ]);
        }
        else
        {
          $modelo->borrado = 1;
          $modelo->save();
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Catsubdirecciones model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Catsubdirecciones the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Catsubdirecciones::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionError()
    {
      $exception = Yii::$app->errorHandler->exception;
      if ($exception !== null) {
          return $this->render('error', ['exception' => $exception]);
      }
    }

}
