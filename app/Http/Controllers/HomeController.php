<?php

namespace App\Http\Controllers;

use App\ShipUpgrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function shop(){
        // $taers = Auth::user()->taers;
        $storeitems = ShipUpgrade::all();
        return view('store.index', compact('storeitems'));
    }

    public function purchaseitem(Request $request){
        $user = Auth::user();

        $item = ShipUpgrade::find($request->_item_id);

        //check that the user has enough funds
        if($user->taers<$item->upgrade_cost){
            return redirect()->route('shop')
                ->with('flash-message', 'Your so poor man, stop it');
            //return to previous view with session flash
        }

        $user->debittaers($item->upgrade_cost)->save();

        //insert item into user inventory

        //return back to the shop with a session flash
        return redirect()->route('shop')
            ->with('flash-message', 'You purchased it mo');

    }

    /**
    * sample method for upgrading a ship
    */
    public function installUpgrade(HeroShip $ship, ShipUpgrade $upgrade) {
        $ship->upgrades()->attach($upgrade->id);
    }
}
