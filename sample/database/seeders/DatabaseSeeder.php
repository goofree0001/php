<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
	public function run()
	{
		 // BooksTableSeederを読み込むように指定
		 $this->call(BooksTableSeeder::class);
	}
}
