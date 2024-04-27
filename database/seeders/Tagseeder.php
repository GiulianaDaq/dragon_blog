<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Tagseeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $tags=['castello','mago','druido','mecenate','guerrieri','nestofante'];

        foreach($tags as $tag){
            Tag::create([
            'name' => $tag,
            ]);
        }
    }
}
