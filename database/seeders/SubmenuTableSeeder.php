<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubmenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $submenu=[
        	['name'=>'Hotdog', 'menu'=>'1','price'=>'45'],
        	['name'=>'Cheese Burger', 'menu'=>'1','price'=>'63'],
        	['name'=>'Fries', 'menu'=>'1','price'=>'33'],
        	['name'=>'Coke', 'menu'=>'2','price'=>'15'],
        	['name'=>'Sprite', 'menu'=>'2','price'=>'14'],
        	['name'=>'Tea', 'menu'=>'2','price'=>'11'],
        	['name'=>'Chicken Combo Meal', 'menu'=>'3','price'=>'150'],
        	['name'=>'Pork Combo Meal', 'menu'=>'3','price'=>'146'],
        	['name'=>'Fish Combo Meal', 'menu'=>'3','price'=>'124']
        ];
        DB::table('submenus')->insert($submenu);
    }
}
