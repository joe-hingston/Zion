<?php

namespace App\Http\Controllers;

use App\Faction;
use App\Hero;
use App\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factions = Faction::all();

        return view('hero.create', compact('factions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'hero_name' => 'required|unique:heroes|max:15',
            'hero_gender' => 'required',
            'faction_id' => 'required',
        ]);

        // check for number of heroes
        if (Auth::user()->heroes->count() > 10) {
            return redirect()->route('home')
                ->with('flash-message', 'chill bro');
        }

        // get faction
        $faction = Faction::find($request->faction_id);s

        // set current player location
        $startingposition = [$faction->name, $faction->startingLat, $faction->startingLong];

        $hero = new Hero;
        $hero->hero_name = $request->hero_name;
        $hero->faction_id = $request->faction_id;
        $hero->hero_gender = $request->hero_gender;
        $hero->hero_latlong = implode('-', $startingposition);
        $hero->user_id = Auth::id();

        $hero->save();

        // assign ship
        $defaultShip = Ship::find($faction->ship_id);

        $stats = [
            'ship_health' => $defaultShip->ship_health,
            'ship_damage' => $defaultShip->ship_damage,
            'ship_colour' => $defaultShip->ship_colour,
        ];

        $hero->heroships()->create([
            'ship_id' => $defaultShip->id,
            'hero_ship_name' => 'Jolly Roger',
            'stats' => serialize($stats)
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
         return view ('hero.index', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hero::destroy($id);
        return  redirect()->back()
            ->with('flash-message','Your hero has been killed, RIP');
    }
}
