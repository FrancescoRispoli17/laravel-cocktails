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
        $data=config('cocktails');
        
        foreach($data as $cocktail_db){
            $cocktail=new Cocktail();

            $cocktail->nome=$cocktail_db['nome'];
            $cocktail->tasso_alcolico=$cocktail_db['tasso_alcolico'];
            $cocktail->prezzo=$cocktail_db['prezzo'];
            $cocktail->descrizione=$cocktail_db['descrizione'];
            $cocktail->ingredienti=$cocktail_db['ingredienti'];
            $cocktail -> save();
       }
    }
}
