<?php

use App\Models\MzadType;
use App\Models\Addresse;
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
    public $table = 'mzad_items';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->json('details');
            $table->text('description');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->integer('basePrice');
            $table->integer('directSalePrice');
            $table->dateTime('dateTime');
            $table->unsignedBigInteger('addresse_id');
            $table->foreign('addresse_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->unsignedBigInteger('mzad_type_id');
            $table->foreign('mzad_type_id')->references('id')->on('mzad_types')->onDelete('cascade');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
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
