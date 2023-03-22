<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_analysisreport", function (Blueprint $table) {
$table->integer("analysisreport_id")->autoIncrement();
$table->string("sampleDetails")->nullable();
$table->string("sampleCode")->nullable();
$table->string("packingCondition")->nullable();
$table->string("analysisRequired")->nullable();
$table->string("parameter")->nullable();
$table->string("testMethod")->nullable();
$table->string("theUnit")->nullable();
$table->string("output")->nullable();
$table->string("prescribedcriteria")->nullable();
$table->string("mood")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->integer("updatedBy")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_analysisreport");
    }
};