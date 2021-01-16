<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
                $table->id();
                
                $table->foreignId('user_id')
                        ->constrained()
                        ->onDelete('cascade');
                $table->string('user_email', 100);
                $table->string('user_name', 100);
                $table->string('user_bitcoin_address', 100);
                $table->bigInteger('amount');
                $table->boolean('confirmed')->default(0);
                
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
        Schema::dropIfExists('withdrawals');
    }
}
