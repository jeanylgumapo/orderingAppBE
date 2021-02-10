<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW viewMenu AS SELECT submenus.id as 'ID', submenus.name as 'SUBMENU', menus.name AS 'MENU', submenus.price FROM submenus join menus on submenus.menu=menus.id;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW viewMenu");
    }
}
