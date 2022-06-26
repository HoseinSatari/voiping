<?php

namespace Database\Seeders;

use App\Models\Call;
use App\Models\User;
use Database\Factories\CallFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $op1 =  User::create([
            'name' => 'اپراتور یک',
            'phone' => '0912111445',
            'email_verified_at' => now(),
            'type' => 'operator',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $op2 =  User::create([
            'name' => 'اپراتور دو',
            'phone' => '0912111445',
            'email_verified_at' => now(),
            'type' => 'operator',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $op3 =  User::create([
            'name' => 'اپراتور سه',
            'phone' => '0912111445',
            'email_verified_at' => now(),
            'type' => 'operator',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

       $cus1 = User::create([
            'name' => 'مشتری یک1',
            'phone' => '0912111445',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $cus2 =  User::create([
            'name' => 'مشتری دو',
            'phone' => '0912111445',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $cus3 =  User::create([
            'name' => 'مشتری سه',
            'phone' => '0912111445',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        Call::create([

            'operator_id' => $op1->id,
            'customer_id' => $cus1->id,
            'time' => 25,

        ]);
        Call::create([

            'operator_id' => $op3->id,
                'customer_id' => $cus1->id,
                'time' => 240,

        ]);
        Call::create([

            'operator_id' => $op3->id,
                'customer_id' => $cus3->id,
                'time' => 120,

        ]);
        Call::create([

            'operator_id' => $op3->id,
                'customer_id' => $cus3->id,
                'time' => 120,

        ]);
        Call::create([

            'operator_id' => $op2->id,
            'customer_id' => $cus2->id,
            'time' => 40,

        ]);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
