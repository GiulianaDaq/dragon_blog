<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdventureEditForm extends Component
{
    use WithFileUploads;
    //fillable
    public $title;
    public $description;
    public $difficulty_level;
    public $image;
    public $user_id;
    public $category_id;

    //attributo dell'oggetto da cui prenderemo i vecchi dati
    public $adventure;
    //vecchia immagine
    public $old_image;

//metodo mount per "montare" l'oggetto con i vecchi dati anche nel form
public function mount(){
    $this->title= $this->adventure->title;
    $this->description= $this->adventure->description;
    $this->difficulty_level= $this->adventure->difficulty_level;
    $this->category_id= $this->adventure->category_id;
    $this->old_image= $this->adventure->image;

}

public function update(){
    $this->adventure->update([
            //i nuovi dati li abbiamo aggiornare in $adventure
            'title'=>$this->title,
            'description'=>$this->description,
            'difficulty_level'=>$this->difficulty_level,
            'category_id'=>$this->category_id,
            'image'=> $this->image ? $this->image->store('public/storage/image_user') : $this->adventure->image,

    ]);
    session()->flash('adventureCreated', 'avventura '.$this->adventure->title.' aggiornata con successo');
    $this->reset('image');
    return redirect()->to(route('user.profile'));
    
}
    //render lasciamolo sempre come ultima funzione
    public function render()
    {
        $categories=Category::all();
        return view('livewire.adventure-edit-form',compact('categories'));
    }
}
