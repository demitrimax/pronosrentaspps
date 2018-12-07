<?php

namespace app\controllers;

use Yii;

Yii::$app->thread->addThread(['/web-thread/send-message','message'=>'hello world']);
?>
