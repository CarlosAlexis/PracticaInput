<?php

use Illuminate\Database\Seeder;

class museoSemilla extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'user'=>'Carlos.Gonzalez',
            'password'=>'0000',
            'key'=>'elUriel'
        ]);
    }
}
