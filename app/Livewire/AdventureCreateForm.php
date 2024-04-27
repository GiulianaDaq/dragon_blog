<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;
use App\Models\Category;
use App\Models\Adventure;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class AdventureCreateForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3|max:50')] 
    public $title;
    
     #[Validate('required|min:5|max:100')]
     public $description;
    
     //vedere come gestire gli interi
    #[Validate('required|min:1|max:10')]
    public $difficulty_level;
    
    #[Validate('required|image|mimes:jpg,jpeg,webp,png')]
    public $image;
    
    #[Validate('required')]
    public $category_id;

    //l'utente può selezionare più tag quindi creiamo un array, in cui verranno salvati
    public $name_tag =[];

    //per customizzare i messaggi di validazione
    protected $messages = [
    'required' => 'Campo richiesto',
   'min' => 'Il campo deve essere di :min caratteri',
     'max' => 'Il campo deve essere di :max caratteri',
     'image' => 'Il file deve essere un\'immagine',
     'mimes' => 'L\'immagine deve avere queste estensioni :values',
    ];
    public function store(){
        //accertiamoci prima che i campi input siano stati compilati correttamente in base ai nostri rules
      $this->validate(); 
      // if($this->category_id==null){
      //   session()->flash('category_id', 'Devi inserire una categoria');
      // }
      // dd($this->category_id); 
      //questa funzione fa le stesse cose del blocco commentato protected $rules
       //mass assignement
      //perchè c'è uno spazio dopo l'id? perchè nel value nel form dopo la sintassi blade c'era uno spazio prima della chiusura delle virgolette
      //ovvero così: value="{{$tag->id}} " ma non è questo l'errore che blocca
      //non avevo inserito return nella relazione manyToMany nel model adventure..... -.-
      //  dd($this->name_tag);

      //  $adventure = Auth::user()->adventures()->create([
       $adventure = Adventure::create([
       'title' => $this->title,
       'description' => $this->description,
       'difficulty_level' => $this->difficulty_level,
       'image' => $this->image->store('public/image_user'),
       'user_id' => Auth::user()->id,
       'category_id' => $this->category_id,
      
   
      ]);
      
      //inseriamo i tag inseriti dall'utente 
       $adventure->tags()->attach($this->name_tag);

       //dopo aver creato l'avventura posso comunicare all’utente se è stato inserito con successo
       session()->flash('adventureCreated', 'Avventura '. $this->title . 'creata con successo');
       //flash(è come with)
       
       // $this→cleanForm(); fa le stesse cose del reset, ovvero dopo aver registrato il record, azzeriamo nel form i vari input
       $this->reset();
       return redirect()->to(route('user.profile'));
      }
       
   
    public function render()
    {
      $categories = Category::all();
      $tags = Tag::all();
        return view('livewire.adventure-create-form',compact('categories','tags'));
    }
}


