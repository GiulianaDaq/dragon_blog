<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Adventure;

class AdventureList extends Component
{
    //attributo dell'oggetto da cui prenderemo i vecchi dati
    

    public function destroy(Adventure $adventure){
        $adventure->delete();
        session()->flash('adventureDeleted','Avventura ' .$adventure->title. ' eliminata con successo');
    }



    public function render()
    {
        //Non passo niente a livewire perchè il controllo delle avvunture inserite dall'utente viene fatto nel component con  @foreach (Auth::user()->adventures as $adventure)
        //ovvero entrando nella tabella adventures e prendendo tutti gli id user uguali all'id user dell'utente loggato
       
        return view('livewire.adventure-list');
    }
}
