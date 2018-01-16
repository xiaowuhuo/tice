<?php
/**
 * Created by PhpStorm.
 * User: xiaowu
 * Date: 18-1-16
 * Time: 下午5:20
 */
namespace app\controllers;

use app\controllers;
use app\models\User;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionSay()
    {
        $countries = User::find()->orderBy('name')->all();
        return $countries;
    }
}