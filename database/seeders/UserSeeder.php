<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {

        User::create([
            'name' => 'RAY',
            'username' => 'RAY',
            'email' => 'RAY@xfel.eu',
            'employeetype' => 'AI',
            'publicKey' => '0',
            'avatar_id' => 'rayAvatar.jpg'
        ]);

    }
}
