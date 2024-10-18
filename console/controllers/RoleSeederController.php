<?php

namespace console\controllers;
 
use yii\console\Controller;
use console\seeders\RoleSeeder;
 
class RoleSeederController extends Controller
{
    public function actionRole()
    {
        $seeder = new RoleSeeder();
        $seeder->safeUp();
    }
}


