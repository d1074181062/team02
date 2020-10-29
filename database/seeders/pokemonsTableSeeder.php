<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemons')->insert([
           'name'=>'豪力',
            'team_num'=>'9',
            'height'=>'1.5',
            'weight'=>'70.5',
            'growing'=>'是',
            'group'=>'關都',
            'place'=>'山區'
        ]);
        DB::table('pokemons')->insert([
            'name'=>'噴火龍',
            'team_num'=>'1',
            'height'=>'1.7',
            'weight'=>'90.5',
            'growing'=>'否',
            'group'=>'關都',
            'place'=>'山脈和活火山'
        ]);
    }
}
