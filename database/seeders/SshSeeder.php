<?php

namespace Database\Seeders;

use App\Models\Ssh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ssh::query()->create([
            'name' => 'aminIDC' ,
            'ip' => '185.142.157.79' ,
            'username' => 'root' ,
            'password' => '2V4Yh77C;cI+yraazpiag#edia' ,
            'domain' => 'karmaniastudio.ir' ,
            'operation_system' => 'cent-os' ,
            'reseller' => 'Amin IDC' ,
            'creator_id' => 1 ,
        ]);

        Ssh::query()->create([
            'name' => 'france (soheil)' ,
            'ip' => '136.244.114.121' ,
            'username' => 'root' ,
            'password' => '6xU-68u-Z.f_xhvm' ,
            'domain' => '' ,
            'operation_system' => 'ubuntu' ,
            'reseller' => 'SarvData' ,
            'creator_id' => 1 ,
        ]);

        Ssh::query()->create([
            'name' => 'germany' ,
            'ip' => '209.250.232.58' ,
            'username' => 'root' ,
            'password' => 'g6Y(z(K3}Y[)jXyV' ,
            'domain' => '' ,
            'operation_system' => 'ubuntu' ,
            'reseller' => 'SarvData' ,
            'creator_id' => 1 ,
        ]);
    }
}
