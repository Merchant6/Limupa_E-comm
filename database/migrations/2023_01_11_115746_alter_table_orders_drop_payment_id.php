<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('orders','payment_id')) {

            Schema::table('orders',function (Blueprint $table) {
                $table->dropForeign('orders_payment_id_foreign');
              $table->dropColumn('payment_id');
        
            });
        
          }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
