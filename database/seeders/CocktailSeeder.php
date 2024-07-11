<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktail = new Cocktail();

        $cocktail-> nome = 'Sex on the beach';
        $cocktail-> ingrediente_1 = 'vodka ';
        $cocktail-> ingrediente_2 = 'liquore alla pesca';
        $cocktail-> ingrediente_3  = 'succo di mirtillo';
        $cocktail-> ingrediente_4 = 'Ghiaccio';
        $cocktail-> ingrediente_5 = "Scorza d'arancia";
        $cocktail-> tasso_alcolemico = '24';
        $cocktail-> prezzo = 11.90;
        $cocktail-> descrizione = "Il Sex on the beach è un cocktail leggero e fruttato di colore arancione a base di vodka, liquore alla pesca, succo di mirtilli rossi, granatina e succo d'arancia. ";

        $cocktail -> save();
       }
}
