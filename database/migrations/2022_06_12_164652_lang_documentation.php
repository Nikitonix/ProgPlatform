<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LangDocumentation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang_documentation', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');

            //Поле по которому связываемся с категорией (название таблицы с которой связываемяс в единственном
            // числе по правилу ларавела
            $table->unsignedBigInteger('category_id');

            $table->timestamps();

            //foreign указывает что данное поле является ключом;
            // ссылается на поле id в таблице categories
            //onDelete гооврит о том, что если категория будет удалена, то удалится и запись упражненея
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
