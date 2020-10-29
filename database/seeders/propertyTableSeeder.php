<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class propertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property')->insert([
            'property'=>'格鬥',
            'characteristic'=>'好戰',
            'home'=>'競技場',
            'weakness'=>'飛行'

        ]);
        //
    }
}
