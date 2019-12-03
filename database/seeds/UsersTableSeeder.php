<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating user table');
        User::truncate();
        $this->command->info('Creating users');
        for ($i=0; $i < 20; $i++) { 
            $user = factory(User::class, 1)->create();
            $this->command->info('Creating '.$user->first()->name.' user');
        }
    }
}
