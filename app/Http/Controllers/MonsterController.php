<?php

namespace App\Http\Controllers;

use App\Monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    private $validationRules = [
        'index' => 'required|min:5|max:100',
        'name' => 'required|unique:monsters|max:100',
        'type' => 'required|max:100',
        'alignment' => 'required|max:50',
        'size' => 'max:150',
        'hit_dice' => 'numeric|min:50|max:5000',
        'languages' => 'numeric|min:0|max:100',
        'armor_class' => 'numeric|min:0|max:1',
        'hit_points' => 'numeric',
        'strenght' => 'date',
        'dexterity' => 'numeric',
        'constitution' => 'numeric',
        'intelligence' => 'numeric',
        'wisdom' => 'numeric',
        'charisma' => 'numeric',
        'xp' => 'numeric',
        'challenge_rating' => 'numeric',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monsters = Monster::paginate(8);

        return view('monsters.index', compact('monsters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monsters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Monster $monster)
    {
        return view('monsters.show', compact('monsters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Monster $monster)
    {
        return view('monsters.edit', compact('monster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monster $monster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monster $monster)
    {
        $monster->delete();
        return redirect()->route('monsters.index');
    }
}
