<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_country", function (Blueprint $table) {
$table->string("countryName")->nullable();
$table->datetime("createdOn")->nullable();;
$table->integer("updatedBy")->default(0);
$table->text("remarks")->nullable();;
$table->string("alias")->nullable();
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_country");
    }
};