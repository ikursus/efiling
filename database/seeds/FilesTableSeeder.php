<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
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
      DB::table('files')->delete();

      // Masukkan data demo file 1
      DB::table('files')->insert([
          'nama_display' => 'Contoh File 1',
          'nama_file' => 'contoh_file_1.mdb',
          'tahun' => '2016',
          'negeri' => 'Putrajaya',
          'aktiviti' => 'kemaskini_lokaliti',
          'sukuan' => 'S1',
          'penggal' => '',
          'status_bb' => '',
          'user_id' => '1'
      ]);

      // Masukkan data demo file 2
      DB::table('files')->insert([
          'nama_display' => 'Contoh File 2',
          'nama_file' => 'contoh_file_2.mdb',
          'tahun' => '2016',
          'negeri' => 'Putrajaya',
          'aktiviti' => 'belah_bahagi',
          'sukuan' => '',
          'penggal' => 'pertama',
          'status_bb' => 'sebelum',
          'user_id' => '1'
      ]);

    }
}
