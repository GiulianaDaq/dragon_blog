<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Adventure extends Model
{
    use HasFactory;
    protected $fillable=['title','description','difficulty_level','image','user_id','category_id'];
    
    // un utente può creare molte avventure, un avventura è creata da un utente
    public function user(){
        // un avventura è creata SOLO da un utente
        return $this->belongsTo(User::class);
    }

    //strutturiamo in modo che l'utente possa selezionare solo una categoria di drago per avventura
    //una categoria di drago può essere associata a più avventure

    public function category(){
        return $this->BelongsTo(Category::class);
    }

    public function tags(){
      return  $this->belongsToMany(Tag ::class);
    }
}
