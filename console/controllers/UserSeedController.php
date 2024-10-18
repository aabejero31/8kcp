<?php

namespace console\controllers;
 
use yii\console\Controller;
use console\seeders\UserSeeder;
 
class UserSeedController extends Controller
{
    public function actionUser()
    {
        $seeder = new UserSeeder();
        $seeder->safeUp();
    }
}


