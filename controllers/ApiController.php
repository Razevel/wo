<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Products;

class ApiController extends Controller
{

    public function actionGetProducts()
    {
        $products = Products::find()->asArray()->all();
        return json_encode($products);
    }
}
