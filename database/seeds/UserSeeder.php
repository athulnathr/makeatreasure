<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'email' => 'id4athul@gmail.com',
            'name' => 'AthulNath',
            'password' => bcrypt('athulnath'),
            'user_type' => 'admin'
        ]);
        User::firstOrCreate([
            'email' => 'athul.nath@gmail.com',
            'name' => 'AthulNath',
            'password' => bcrypt('athulnath'),
        ]);
    }
}
