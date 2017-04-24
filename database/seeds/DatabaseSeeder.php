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
        $this->call(CustomerTypeSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PostOfficesSeeder::class);
        $this->call(EboxesSeeder::class);
        $this->call(NotificationTypesSeeder::class);
    }
}
