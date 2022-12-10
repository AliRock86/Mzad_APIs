<?php

use App\Models\MzadItem;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $table = 'outbiddings';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id');
            $table->foreignIdFor(User::class)->constrained()->onDelete('CASCADE');
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->integer('mzad_id');
            $table->foreignIdFor(MzadItem::class)->constrained()->onDelete('CASCADE');
            //$table->foreign('mzad_id')->references('id')->on('mzad_item');
            $table->integer('amount');
            $table->integer('lastPrice');
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
