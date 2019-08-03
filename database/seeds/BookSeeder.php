<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Book::class, 20)->create()->each(function($user){
            $user->save();
        });
    }
}
