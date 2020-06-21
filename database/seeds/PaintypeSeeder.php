<?php

use Illuminate\Database\Seeder;

class PaintypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paintype_array = array(
     
            "A" => "broken bones",
            "B" => "surgery",
            "C" => "dental work",
            "D" => "labor and childbirth",
            "E" => "cuts",
            "F" => "burns",
            "G" => "tense muscles",
            "H" => "lack of energy",
            "I" => "limited mobility",
            "J" => "frequent headaches",
            "K" => "nerve damage pain",
            "L" => "arthritis pain",
            "M" => "pressure",
            "N" => "aching",
            "O" => "squeezing",
            "P" => "cramping",
            "Q" => "bone fractures",
            "S" => "cancer",
            "R" => "flow"
            );    
            foreach($paintype_array as $key=>$value){
                DB::table('pain_types')->insert([
                    'code' => $key,
                    'name' => $value
                ]);
            }
    }
}
