<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW viewOrders AS SELECT submenus.name,submenus.price, orders.id, orders.quantity,(orders.quantity*submenus.price) AS 'TOTAL_PRICE', orders.transactionCode  FROM submenus join orders  on submenus.id=orders.submenu;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::statement("DROP VIEW viewOrders");
    }
}
