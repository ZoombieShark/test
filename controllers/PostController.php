<?php
/**
 * Created by PhpStorm.
 * User: Raila
 * Date: 30.07.2018
 * Time: 15:31
 */

namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public $layout = 'basic';
    public function actionIndex(){
        if(Yii::$app->request->isAjax){
            debug($_GET);
            return 'test';
        }
        return $this->render('test');
    }

    public function actionShow(){
//        $this->layout = 'basic';
        return $this->render('show');
    }
}



