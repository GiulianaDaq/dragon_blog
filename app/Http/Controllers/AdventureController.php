<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Adventure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdventureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  $adventures= Adventure::all();
        return view('adventure.index',compact('adventures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adventure.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adventure $adventure)
    {
        return view('adventure.show',compact('adventure'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adventure $adventure)
    {
        //permettiamo all'utente di modificare solo le avventure inserite da lui

        //non ha molto senso perchè gli stiamo già facendo vedere solo le avventure inserite da lui, quindi va da sà che sono tutte modificabili da lui perchè sono state inserite da lui!!! e non avrà mai l'accesso negato

        //quindi prendiamo l'id dell'utente autenticato in questo momento e lo confrontiamo, partendo dal nostro record adventure, passiamo al campo user e leggiamo l'id
        //provare con if(Auth::user()->id == $adventure->user_id){
        if(Auth::user()->id == $adventure->user->id){
        return view('adventure.edit', compact('adventure'));
        }
        return redirect()->back()->with('denied', 'Accesso negato');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adventure $adventure)
    {
        //verrà gestita nella classe livewire AdventureEditForm
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adventure $adventure)
    {
        //
    }

    public function indexCategory(Category $category){
        return view('adventure.index-category', compact('category'));
    }
}
