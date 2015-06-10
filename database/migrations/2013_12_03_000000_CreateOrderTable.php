<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

    public function up() {
        Schema::create("orders", function($table) {
                    $table->engine = "InnoDB";

                    $table->increments("id");
                    $table->integer("user_id");
                    $table->timestamps();
                    $table->softDeletes();

                });
    }

    public function down() {
        Schema::dropIfExists("orders");
    }

}
