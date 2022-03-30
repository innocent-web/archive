<?php
use App\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::truncate();

        Type::create(['type'=>'fiche de proposition']);
        Type::create(['type'=>'decret']);
        Type::create(['type'=>'decision']);
        Type::create(['type'=>'projet d_arret']);
    }
}
