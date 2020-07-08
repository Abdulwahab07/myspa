<?php

use Illuminate\Database\Seeder;
use League\CommonMark\Block\Element\Document;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(DocumentTypesTableSeeder::class);
    }
}
