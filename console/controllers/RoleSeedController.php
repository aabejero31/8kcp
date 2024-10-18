<?php

namespace console\controllers;
 
use yii\console\Controller;
use console\seeders\RoleSeeder;
 
class RoleSeedController extends Controller
{
    public function actionRole()
    {
        $seeder = new RoleSeeder();
        $seeder->safeUp();
    }
}


