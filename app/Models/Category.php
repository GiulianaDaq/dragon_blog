<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    //strutturiamo in modo che l'utente possa selezionare solo una categoria di drago per avventura
    //una categoria di drago può essere associata a più avventure
    public function adventures(){
      return  $this->hasMany(Adventure::class);
    }

}
