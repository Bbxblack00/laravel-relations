<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table  -> foreign('brand_id', 'carbrand')
                    -> references('id')
                    -> on ('brands');
        });

        Schema::table('pilots_cars', function (Blueprint $table) {
            $table  -> foreign('car_id', 'car-pilot')
                    -> references('id')
                    -> on ('cars');

            $table  -> foreign('pilot_id', 'pilot-car')
                    -> references('id')
                    -> on ('pilots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table  -> dropForeign('carbrand');
        });

        Schema::table('pilots_cars', function (Blueprint $table) {
            $table  -> dropForeign('car-pilot');

            $table  -> dropForeign('pilot-car');
        });
    }
}
