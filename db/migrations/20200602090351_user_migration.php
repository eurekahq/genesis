<?php

use App\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class UserMigration extends Migration
{
    public function up() {
        $this->schema->create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->timestamps();
        });
    }

    public function down() {
        $this->schema->drop('users');
    }
}
