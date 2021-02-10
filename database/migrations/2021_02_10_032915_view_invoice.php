<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW viewInvoice AS SELECT invoices.id, taxes.tax_type, taxes.percentage, coupons.code, coupons.description, coupons.discount, invoices.transactionCode from invoices JOIN taxes on invoices.tax_type=taxes.id join coupons on invoices.coupon=coupons.id JOIN orders ON invoices.transactionCode=orders.transactionCode");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW viewInvoice");
    }
}
