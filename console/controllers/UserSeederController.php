<?php

namespace console\controllers;
 
use yii\console\Controller;
use console\seeders\UserSeeder;
 
class UserSeederController extends Controller
{
    public function actionUser()
    {
        $seeder = new UserSeeder();
        $seeder->safeUp();
    }
}


