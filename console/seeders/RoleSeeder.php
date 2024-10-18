<?php

namespace console\seeders;
 
use yii\base\Module;
use yii\db\Migration;
 
class RoleSeeder extends Migration
{
    public function safeUp()
    {

        $this->batchInsert(
            'user_roles', 
            ['id', 'name'],
            [
                [1, 'master'],
                [2, 'distributor'],
                [3, 'client'],
                [4, 'test-taker']
            ]);
    }
 
    public function safeDown()
    {
       
    }
}


