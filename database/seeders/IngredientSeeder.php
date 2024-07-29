<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        Ingredient::truncate();
        $ingredients=['menta','aperol','campari','redbull','arancia','ghiaccio','coca-cola','zucchero','vermounth','gin','zenzero','liquore alla pesca','vodka','spremuta di arancia','cranberry'];

        foreach($ingredients as $ingredient){
            $new_ingredient=new Ingredient();
            $new_ingredient->name=$ingredient;
            $new_ingredient->save();
        }

        Schema::enableForeignKeyConstraints();

    }
}
