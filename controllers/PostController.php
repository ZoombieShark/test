<?php
/**
 * Created by PhpStorm.
 * User: Raila
 * Date: 30.07.2018
 * Time: 15:31
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{
    public $layout = 'basic';

    public function beforeAction($action)
    {
        if ($action->id == 'index')
        {
        $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);

    }

    public function actionIndex(){
        if(Yii::$app->request->isAjax){

            debug(Yii::$app->request->post());
            return 'test!!!';
        }

        $model = new TestForm();
        if($model->load(Yii::$app->request->post()))
        {
           if ($model->validate()){
               Yii::$app->session->setFlash('success', 'Данные приняты');
               return $this->refresh();
           } else {
               Yii::$app->session->setFlash('Error', 'Ошибка');
           }

        }

        $this->view->title = 'Все статьи';
        return $this->render('test', compact('model'));
    }

    public function actionShow(){
        $this->view->title = 'Одна статья!';
        $this->view->registerMetaTag(['name'=> 'keywords', 'content'=> 'ключевики...']);
        $this->view->registerMetaTag(['name'=> 'description', 'content'=> 'описание страницы...']);
        return $this->render('show');
    }
}



