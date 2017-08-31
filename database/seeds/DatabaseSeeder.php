<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('editions')->insert(['name' => 'Вторжение Орды', 'amount' => 110]);

        DB::table('rarities')->insert(['name' => 'Частая']);
        DB::table('rarities')->insert(['name' => 'Редкая']);

        DB::table('artists')->insert(['name' => 'Васильев А. А.']);
        DB::table('artists')->insert(['name' => 'Петров Б. Ю.']);
        DB::table('artists')->insert(['name' => 'Ганджубас А. А.']);

        DB::table('races')->insert(['name' => 'Таргонская Федерация']);
        DB::table('races')->insert(['name' => 'Сообщество Дварг']);
        
        DB::table('types')->insert(['name' => 'Легкий корабль']);
        DB::table('types')->insert(['name' => 'Тяжелый корабль']);
        DB::table('types')->insert(['name' => 'Средний корабль']);
        DB::table('types')->insert(['name' => 'Метеорит']);
    }
}
