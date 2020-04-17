<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facedes\DB;

class InsertUserAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $email = env('ADMIN_EMAIL');
        $senha = bcrypt(env('ADMIN_PASSWORD'));

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email'=> $email,
            'password' => $senha
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $email = env('ADMIN_EMAIL');

        DB::delete('DELETE FROM users WHERE email = ?', [$email]);
    }
}
