<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor');
            $table->string('product_name');
            $table->string('description');
            $table->string('price');
            $table->string('from_user');
            $table->string('image');
            
            $table->string('email');
            $table->string('telephone');
            $table->string('working_hours');
            $table->string('category');
            $table->string('location');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
            // drop upload table
        Schema::drop('products');
        
    }
}
