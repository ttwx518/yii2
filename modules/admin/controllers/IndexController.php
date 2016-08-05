<?php

namespace app\modules\admin\controllers;

use app\modules\admin\controllers\BaseController;

/**
 * Default controller for the `admin` module
 */
class IndexController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
   
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout(){
    	var_dump(time());exit;
    }



}
