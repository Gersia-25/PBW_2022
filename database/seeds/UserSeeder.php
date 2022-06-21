<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Achmad Fatkharrofiqi',
            'email' => 'achmad@brainmatics.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$1eNsRaXNVMxiUtYCA8DKnOvR93BQluMb6r3yVBAG2j48Q1DhBVqy2', // password
            'remember_token' => Str::random(10),
        ]);
        factory(App\User::class, 2)->create();
    }
}
