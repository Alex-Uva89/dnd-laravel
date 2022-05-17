<?php

namespace App\Http\Controllers;

use App\Monster;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class MonsterController extends Controller
{
    private $validationRules = [
        'index' => 'required|min:5|max:100',
        'name' => 'required|unique:monsters|max:100',
        'type' => 'required|max:100',
        'alignment' => 'required|max:100',
        'size' => 'max:50',
        'hit_dice' => 'min:0|max:10',
        'languages' => 'nullable',
        'armor_class' => 'numeric|min:1|max:100',
        'hit_points' => 'numeric|min:1|max:1000',
        'strenght' => 'numeric|min:1|max:100',
        'dexterity' => 'numeric|min:1|max:100',
        'constitution' => 'numeric|min:1|max:100',
        'intelligence' => 'numeric|min:1|max:100',
        'wisdom' => 'numeric|min:1|max:100',
        'charisma' => 'numeric|min:1|max:100',
        'xp' => 'numeric',
        'challenge_rating' => 'numeric|min:1|max:100',
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

        $formData = $request->all();

        $newMonster = Monster::create($formData);

       return redirect()->route('monsters.show', $newMonster->id)->with('status', 'Completed with success!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Monster $monster)
    {
        return view('monsters.show', compact('monster'));
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
        $this->validationRules['name'] = [
            'required',
            Rule::unique('monsters')->ignore($monster),
            'min:5',
            'max:100'
        ];

        $request->validate($this->validationRules);

        $formData = $request->all();

        $monster->update($formData);

        return redirect()->route('monsters.show', $monster->id);
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
