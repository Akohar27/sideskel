<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PenggunaTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 10) as $index){
            DB::insert('insert into pengguna (email_pengguna, nama_pengguna, password_pengguna, jenis_kelamin, no_hp, created_at, updated_at) values (:email_pengguna, :nama_pengguna, :password_pengguna, :jenis_kelamin, :no_hp, :created_at, :updated_at)',
            [
              'email_pengguna' => $faker->email,
              'nama_pengguna' => $faker->name,
              'password_pengguna' => $faker->password,
              'jenis_kelamin' => $faker->randomElement(['perempuan', 'laki-laki']),
              'no_hp' => $faker->numberBetween(000000000000, 999999999999),
              'created_at' => now(),
              'updated_at' => now()
            ]);
        }
        $this->command->info('Berhasil Menambahkan 10 baris di tabel pengguna');
    }
}
