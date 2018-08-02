<?php
/**
 * Created by PhpStorm.
 * User: Raila
 * Date: 30.07.2018
 * Time: 14:46
 */

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }
}