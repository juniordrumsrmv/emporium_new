<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(MenusTableSeeder::class);
        $this->call(EntityTableSeeder::class);
        $this->call(AccessTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DashboardSeeder::class);
        $this->call(EmporiumSeeder::class);

    }
}
