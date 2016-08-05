<?php

namespace app\modules\admin\controllers;

use app\modules\admin\controllers\BaseController;

/**
 * Default controller for the `admin` module
 */
class IndexController extends BaseController
{
    /**
     *
     *后台首页控制器
     */
   
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout(){

    	return $this->render('about');
    }



}
