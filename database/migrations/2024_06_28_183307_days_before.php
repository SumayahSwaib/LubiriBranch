<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DaysBefore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenant_payments', function (Blueprint $table) {
            if (!Schema::hasColumn('tenant_payments', 'days_before')) {
                $table->bigInteger('days_before')->default(0)->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenant_payments', function (Blueprint $table) {
            //
        });
    }
}
