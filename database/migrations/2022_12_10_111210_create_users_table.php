<?php

use App\Models\Role;
use App\Models\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $table = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('email');
            $table->string('password');
            $table->string('apiKey');
            $table->foreignIdFor(Role::class)->constrained()->onDelete('CASCADE');
           // $table->integer('role_id');
           // $table->foreign('role_id')->references('id')->on('roles');
            $table->foreignIdFor(Status::class)->constrained()->onDelete('CASCADE');
           //$table->integer('status_id');
            //$table->foreign('status_id')->references('id')->on('status');
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
        Schema::dropIfExists($this->table);
    }
};
