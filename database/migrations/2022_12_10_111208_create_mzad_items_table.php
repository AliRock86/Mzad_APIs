<?php

use App\Models\MzadType;
use App\Models\Addresse;
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
            $table->increments('id');
            $table->string('subject');
            $table->json('details');
            $table->text('description');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->integer('basePrice');
            $table->integer('directSalePrice');
            $table->integer('status_id');
            $table->dateTime('dateTime');
            $table->foreignIdFor(Addresse::class)->constrained()->onDelete('CASCADE');
            //$table->integer('address_id');
            //$table->foreign('address_id')->references('id')->on('addresses');
            $table->foreignIdFor(MzadType::class)->constrained()->onDelete('CASCADE');
            //$table->integer('mzadType_id');
            //$table->foreign('mzadType_id')->references('id')->on('mzad_type');
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
