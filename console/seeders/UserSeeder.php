<?php

namespace console\seeders;
 
use yii\base\Module;
use yii\db\Migration;
 
class UserSeeder extends Migration
{
    public function safeUp()
    {

        $this->batchInsert(
            'user', 
            ['username', 'name', 'auth_key', 'password_hash', 'email', 'status', 'role_id'],
            [
                ['master', 'Master', '5C0WX5SiBbe7ekrZnRnTWXT_qhoqwDTv', '$2y$13$e2bHZKOQhwziNZ9Lg5XYCeleAYxdYHqQ6kdPTmS9ySNZ8BDNBVfFm', 'master@profilesasiapacific.com', 1, 1729229257, 1729229257, 1],
                ['distributor', 'Distributor', '5C0WX5SiBbe7ekrZnRnTWXT_qhoqwDTv', '$2y$13$e2bHZKOQhwziNZ9Lg5XYCeleAYxdYHqQ6kdPTmS9ySNZ8BDNBVfFm', 'distributor@profilesasiapacific.com', 1, 1729229257, 1729229257, 2],
                ['client', 'Client', '5C0WX5SiBbe7ekrZnRnTWXT_qhoqwDTv', '$2y$13$e2bHZKOQhwziNZ9Lg5XYCeleAYxdYHqQ6kdPTmS9ySNZ8BDNBVfFm', 'client@profilesasiapacific.com', 1, 1729229257, 1729229257, 3],
                ['testtaker', 'Test Taker', '5C0WX5SiBbe7ekrZnRnTWXT_qhoqwDTv', '$2y$13$e2bHZKOQhwziNZ9Lg5XYCeleAYxdYHqQ6kdPTmS9ySNZ8BDNBVfFm', 'testtaker@profilesasiapacific.com', 1, 1729229257, 1729229257, 4]

            ]);
    }
 
    public function safeDown()
    {
       
    }
}


