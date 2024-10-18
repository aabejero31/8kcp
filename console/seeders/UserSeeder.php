<?php

namespace console\seeders;
 
use yii\base\Module;
use yii\db\Migration;
 
class UserSeeder extends Migration
{
    public function safeUp()
    {

        $this->batchInsert(
            'user_roles', 
            ['username', 'auth_key', 'password_hash', 'email', 'status','role_id'],
            [
                ['admin'],
                ['5C0WX5SiBbe7ekrZnRnTWXT_qhoqwDTv'],
                ['$2y$13$e2bHZKOQhwziNZ9Lg5XYCeleAYxdYHqQ6kdPTmS9ySNZ8BDNBVfFm'],
                ['alex@profilesasiapacific.com'],
                [1],
                [1729229257],
                [1729229257],
                [1]

            ]);
    }
 
    public function safeDown()
    {
       
    }
}


