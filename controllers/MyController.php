<?php
/**
 * Created by PhpStorm.
 * User: Raila
 * Date: 30.07.2018
 * Time: 14:28
 */

namespace app\controllers;

use yii\web\Controller;

class MyController extends AppController
{
    public function actionIndex($id = null){
        $hi = 'Hello, world!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        if(!$id) $id = 'test';
//        return $this->render('index', ['hi' => $hi, 'names'=>$names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
    public function actionBlogPost(){

        return 'Blog Post';
    }

}