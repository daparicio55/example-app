<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autore;

class AutoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autores = [
            ['nombre' => 'Gabriel García Márquez'],
            ['nombre' => 'Isabel Allende'],
            ['nombre' => 'J.K. Rowling'],
            ['nombre' => 'George R.R. Martin'],
            ['nombre' => 'Haruki Murakami'],
        ];
        Autore::insert($autores);
    }
}
