<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTopic extends Migration
{
    /**
     * Run the migrations.
      Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('account_type');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('province');
            $table->string('address');
            $table->string('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
         });
     * @return void
     */
    public function up()
    {
        Schema::create('register_topic', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('topic_id');
            $table->date('start_date');
            $table->date('end_date');
                
            $table->string('create_by');
            $table->string('update_by');
            $table->string('delete_by');
            $table->boolean('is_active')->nullable()->default(true);
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
        Schema::dropIfExists('register_topic');
    }
}
