<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TGA;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'Abd Rahman',
            'ni' => '190180078',
            'username' => 'abd_rahman.02',
            'email' => 'abdul.190180078@mhs.unimal.ac.id',
            'password' => bcrypt('smanda009')
        ]);
        User::create([
            'name' => 'Imron MF',
            'username' => 'imron',
            'email' => 'imronmf@gmail.com',
            'password' => bcrypt('imron')
        ]);
        User::create([
            'name' => 'Ardi dosen',
            'ni' => '123123131213',
            'username' => 'ardi12345',
            'role' => 'dosen',
            'email' => 'ardidosen@unimal.ac.id',
            'password' => bcrypt('ardi12345')
        ]);
        User::factory(20)->create();
        TGA::factory(200)->create();
    }
}
