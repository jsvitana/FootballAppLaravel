<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class footballapp extends Controller
{
    public function show()
    {

    }

    public function update()  //UPDATE
    {
        $user = auth()->user();                        //finds the current logged in user

        $fav_team = post::find($user->id);             //Sets fav_team to the correct record to update

        $fav_team->favorite_team = request('team');    //Grabs the info off form and stores in db

        $fav_team->save();

        return redirect('/teamstats');   //redirect to a screen showing info on fav team

        //Port over vue code
        //Figure out how to link JS inside of laravel
        //Add in reative features that show real time stats and such of favorite team when you go to redirect
    }

    public function store()    // INSERT
    {
        $favTeam = new post();

        $favTeam->favorite_team = request('team');

        $favTeam->save();

        return redirect('/');

    }
}
