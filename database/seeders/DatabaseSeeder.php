<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(20)->create();

        \App\Models\Projects::factory([
            'nome' => 'São Pedro Life',
            'titulo' => 'Residencial São Pedro Life',
            'fotos' => [
                'https://cdn.interconstrutora.com/2020/03/19/09/27/87d6997fdcc92574bbae4747ac4e3964a4c40911.jpg'
            ],
            'venda' => '320000.00'
        ])->create();
        \App\Models\Projects::factory([
            'nome' => 'Park Primavera',
            'titulo' => 'Residencial Park Primavera',
            'fotos' => [
                'https://cdn.interconstrutora.com/2020/08/06/10/17/744870474fce471e2bd171fd7cd57b75f44288ad.jpg'
            ],
            'venda' => '320000.00'
        ])->create();
        \App\Models\Projects::factory([
            'nome' => 'Park Leopoldino',
            'titulo' => 'Residencial Park Leopoldino',
            'fotos' => [
                'https://cdn.interconstrutora.com/2021/01/20/13/57/f5d18cbfcc71376f196d08d967804cf5c0bdaf48.jpg'
            ],
            'venda' => '320000.00'
        ])->create();
        \App\Models\Projects::factory([
            'nome' => 'Park Karaiba',
            'titulo' => 'Residencial Park Karaiba',
            'fotos' => [
                'https://cdn.interconstrutora.com/2021/03/17/16/10/732082152f3ab8066478df491711cd6d10275b10.jpg'
            ],
            'venda' => '320000.00'
        ])->create();
        \App\Models\Projects::factory([
            'nome' => 'Unique Felicità',
            'titulo' => 'Residencial Unique Felicità',
            'fotos' => [
                'https://cdn.interconstrutora.com/2021/01/20/13/24/119b02e169c8c189f702f807a97b7917c779ae41.jpg'
            ],
            'venda' => '320000.00'
        ])->create();
    }
}
