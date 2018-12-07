<?php

namespace app\controllers;

use Yii;
use \kriss\thread\controllers\WebThreadController;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ThreadController extends WebThreadController
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

  public function actionIndex()
  {
      echo "Hola";
      die;
  }

  public function actionSendMessage ($message)
  {
    Yii::warning ($message);
    return $this->render('vistax');
  }
  public function actionChino ()
  {
    //echo "Chino";
    //die;
    //echo "<pre>";
    //var_dump(Yii::$app->thread);
    //die;
    Yii::$app->thread->init();
    Yii::$app->thread->addThread(['/thread/send-message','message'=>'hello world']);
    return $this->render('vistax');
  }
}
