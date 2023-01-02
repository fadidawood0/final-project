<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoreSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert([
        'name'=>'Format Post.',
        'slug'=>'Format-Post',
        'created_at'=>now()
       ]) ;
       DB::table('categories')->insert([
        'name'=>'Interesting Facts',
        'slug'=>'Interesting-Facts',
        'created_at'=>now()
       ]) ;
       DB::table('categories')->insert([
        'name'=>'Health Benefits',
        'slug'=>'Health-Benefits',
        'parent_id'=>'1',
        'created_at'=>now()
       ]) ;
    }
}
