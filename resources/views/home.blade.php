@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>
                    Choose your favorite Team!
                    <form method="POST" action="/update">      <!-- Make reactive --- if(fav_team != null) show fav team : else show all options to choose fav_team
                                                                    Make option to choose fav team then it will bring up this form -->
                        {{ csrf_field() }}   <!-- does something, ask Guido -->
                        @method('PUT')       <!-- so laravel can process this as a put and not a post request -->

                        <input type="radio" value="ardinals" name="team">
                        <label for="cardinals">Arizona Cardinals</label>
                        <br>
                        <input type="radio" value="falcons" name="team">
                        <label for="falcons">Atlanta Falcons</label>
                        <br>
                        <input type="radio" value="ravens" name="team">
                        <label for="ravens">Baltimore Ravens</label>
                        <br>
                        <input type="radio" value="bills" name="team">
                        <label for="bills">Buffalo Bills</label>
                        <br>
                        <input type="radio" value="panthers" name="team">
                        <label for="panthers">Carolina Panthers</label>
                        <br>
                        <input type="radio" value="bengals" name="team">
                        <label for="bengals">Cincinnati Bengals</label>
                        <br>
                        <input type="radio" value="bears" name="team">
                        <label for="bears">Chicago Bears</label>
                        <br>
                        <input type="radio" value="browns" name="team">
                        <label for="browns">Cleveland Browns</label>
                        <br>
                        <input type="radio" value="cowboys" name="team">
                        <label for="cowboys">Dallas Cowboys</label>
                        <br>
                        <input type="radio" value="broncos" name="team">
                        <label for="broncos">Denver Broncos</label>
                        <br>
                        <input type="radio" value="lions" name="team">
                        <label for="lions">Detroit Lions</label>
                        <br>
                        <input type="radio" value="packers" name="team">
                        <label for="packers">Green Bay Packers</label>
                        <br>
                        <input type="radio" value="texans" name="team">
                        <label for="texans">Houston Texans</label>
                        <br>
                        <input type="radio" value="colts" name="team">
                        <label for="colts">Indianapolis Colts</label>
                        <br>
                        <input type="radio" value="jaguars" name="team">
                        <label for="jaguars">Jacksonville Jaguars</label>
                        <br>
                        <input type="radio" value="chiefs" name="team">
                        <label for="chiefs">Kansas City Chiefs</label>
                        <br>
                        <input type="radio" value="chargers" name="team">
                        <label for="chargers">Los Angeles Chargers</label>
                        <br>
                        <input type="radio" value="rams" name="team">
                        <label for="rams">Los Angeles Rams</label>
                        <br>
                        <input type="radio" value="dolphins" name="team">
                        <label for="dolphins">Miami Dolphins</label>
                        <br>
                        <input type="radio" value="vikings" name="team">
                        <label for="vikings">Minnesota Vikings</label>
                        <br>
                        <input type="radio" value="patriots" name="team">
                        <label for="patriots">New England Patriots</label>
                        <br>
                        <input type="radio" value="saints" name="team">
                        <label for="saints">New Orleans Saints</label>
                        <br>
                        <input type="radio" value="giants" name="team">
                        <label for="giants">New York Giants</label>
                        <br>
                        <input type="radio" value="jets" name="team">
                        <label for="jets">New York Jets</label>
                        <br>
                        <input type="radio" value="raiders" name="team">
                        <label for="raiders">Oakland Raiders</label>
                        <br>
                        <input type="radio" value="eagles" name="team">
                        <label for="eagles">Philadelphia Eagles</label>
                        <br>
                        <input type="radio" value="steelers" name="team">
                        <label for="steelers">Pittsburgh Steelers</label>
                        <br>
                        <input type="radio" value="49ers" name="team">
                        <label for="49ers">San Francisco 49ers</label>
                        <br>
                        <input type="radio" value="seahawks" name="team">
                        <label for="seahawks">Seattle Seahawks</label>
                        <br>
                        <input type="radio" value="buccaneers" name="team">
                        <label for="buccaneers">Tampa Bay Buccaneers</label>
                        <br>
                        <input type="radio" value="titans" name="team">
                        <label for="titans">Tennessee Titans</label>
                        <br>
                        <input type="radio" value="redskins" name="team">
                        <label for="redskins">Washington Redskins</label>
                        <br><br>
                        <input type="submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
