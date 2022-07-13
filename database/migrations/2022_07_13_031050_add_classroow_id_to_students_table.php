<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClassroowIdToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
       if (Schema::hasColumn('students', 'classroom_id')) {
            Schema::table('students', function (Blueprint $table){
                $table->dropColumn('classroom_id');
            });
        }
        
        Schema::table('students', function (Blueprint $table) {
            $table->foreignId('classroom_id')->nullable()->constrained()
            ->onDelete('cascade')
            ->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['classroom_id']);
        });
    }
}
