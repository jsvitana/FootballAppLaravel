<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class footballapp extends Controller
{
    public function store()
    {
        $favTeam = new post();

        $favTeam->favorite_team = request('team');

        $favTeam->save();

        return redirect('/welcome');

    }
}
