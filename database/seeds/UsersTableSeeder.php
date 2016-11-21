<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Arahan query untuk hapuskan REKOD DATA
      // dalam table
      DB::table('users')->delete();

      // Data demo user 1
      DB::table('users')->insert([
          'username' => str_random(6),
          'nama' => 'Ahmad Albab',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('secret'),
          'phone' => '012-3456789',
          'status' => 'administrator',
          'negeri' => 'putrajaya',
          'unit' => 'egis'
      ]);

      // Data demo user 2
      DB::table('users')->insert([
          'username' => str_random(6),
          'nama' => 'Ali Baba',
          'email' => 'user@gmail.com',
          'password' => bcrypt('password'),
          'phone' => '012-3456789',
          'status' => 'user',
          'negeri' => 'putrajaya',
          'unit' => 'egis'
      ]);

      // Data demo user 3
      DB::table('users')->insert([
          'username' => str_random(6),
          'nama' => 'Upin Ipin',
          'email' => 'ipin@gmail.com',
          'password' => bcrypt('password'),
          'phone' => '012-3456789',
          'status' => 'user',
          'negeri' => 'putrajaya',
          'unit' => 'egis'
      ]);

    }
}
