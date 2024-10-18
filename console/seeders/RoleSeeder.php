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
            ['name'],
            [
                ['master'],
                ['distributor'],
                ['client'],
                ['test-taker']
            ]);
    }
 
    public function safeDown()
    {
       
    }
}


