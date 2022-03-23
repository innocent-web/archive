<?php
use App\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Genre::truncate();
            Genre::create(['genre'=>'envoi']);
            Genre::create(['genre'=>'retour']);
    }
}
