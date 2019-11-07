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

                    <!-- This is the PHP to find fav team for the if statement -->
                    <?php
                        use App\post;

                        $user = auth()->user();
                        $fav_team = post::find($user->id);
                        $team = $fav_team->favorite_team;
                    ?>
                    <!-- ----------------------------------------------------- -->

                    @if ($team == !null)
                        <h1>Click Here to see how the <?= $team ?> are doing</h1>

                        <!-- Goes to controller to call function to remove favTeam, sets it to null and reloads page -->
                        <form method="POST" action="/removeFavTeam">
                            {{ csrf_field() }}
                            @method('PUT')
                            <input type="submit" value="Remove">
                        </form>

                    @else
                        Choose your favorite Team!
                        <form method="POST" action="/update">
                            {{ csrf_field() }}   <!-- does something, ask Guido -->
                            @method('PUT')       <!-- so laravel can process this as a put and not a post request -->

                            <input type="radio" value="cardinals" name="team" required>
                            <label for="cardinals">Arizona Cardinals</label>
                            <br>
                            <input type="radio" value="falcons" name="team" required>
                            <label for="falcons">Atlanta Falcons</label>
                            <br>
                            <input type="radio" value="ravens" name="team" required>
                            <label for="ravens">Baltimore Ravens</label>
                            <br>
                            <input type="radio" value="bills" name="team" required>
                            <label for="bills">Buffalo Bills</label>
                            <br>
                            <input type="radio" value="panthers" name="team" required>
                            <label for="panthers">Carolina Panthers</label>
                            <br>
                            <input type="radio" value="bengals" name="team" required>
                            <label for="bengals">Cincinnati Bengals</label>
                            <br>
                            <input type="radio" value="bears" name="team" required>
                            <label for="bears">Chicago Bears</label>
                            <br>
                            <input type="radio" value="browns" name="team" required>
                            <label for="browns">Cleveland Browns</label>
                            <br>
                            <input type="radio" value="cowboys" name="team" required>
                            <label for="cowboys">Dallas Cowboys</label>
                            <br>
                            <input type="radio" value="broncos" name="team" required>
                            <label for="broncos">Denver Broncos</label>
                            <br>
                            <input type="radio" value="lions" name="team" required>
                            <label for="lions">Detroit Lions</label>
                            <br>
                            <input type="radio" value="packers" name="team" required>
                            <label for="packers">Green Bay Packers</label>
                            <br>
                            <input type="radio" value="texans" name="team" required>
                            <label for="texans">Houston Texans</label>
                            <br>
                            <input type="radio" value="colts" name="team" required>
                            <label for="colts">Indianapolis Colts</label>
                            <br>
                            <input type="radio" value="jaguars" name="team" required>
                            <label for="jaguars">Jacksonville Jaguars</label>
                            <br>
                            <input type="radio" value="chiefs" name="team" required>
                            <label for="chiefs">Kansas City Chiefs</label>
                            <br>
                            <input type="radio" value="chargers" name="team" required>
                            <label for="chargers">Los Angeles Chargers</label>
                            <br>
                            <input type="radio" value="rams" name="team" required>
                            <label for="rams">Los Angeles Rams</label>
                            <br>
                            <input type="radio" value="dolphins" name="team" required>
                            <label for="dolphins">Miami Dolphins</label>
                            <br>
                            <input type="radio" value="vikings" name="team" required>
                            <label for="vikings">Minnesota Vikings</label>
                            <br>
                            <input type="radio" value="patriots" name="team" required>
                            <label for="patriots">New England Patriots</label>
                            <br>
                            <input type="radio" value="saints" name="team" required>
                            <label for="saints">New Orleans Saints</label>
                            <br>
                            <input type="radio" value="giants" name="team" required>
                            <label for="giants">New York Giants</label>
                            <br>
                            <input type="radio" value="jets" name="team" required>
                            <label for="jets">New York Jets</label>
                            <br>
                            <input type="radio" value="raiders" name="team" required>
                            <label for="raiders">Oakland Raiders</label>
                            <br>
                            <input type="radio" value="eagles" name="team" required>
                            <label for="eagles">Philadelphia Eagles</label>
                            <br>
                            <input type="radio" value="steelers" name="team" required>
                            <label for="steelers">Pittsburgh Steelers</label>
                            <br>
                            <input type="radio" value="49ers" name="team" required>
                            <label for="49ers">San Francisco 49ers</label>
                            <br>
                            <input type="radio" value="seahawks" name="team" required>
                            <label for="seahawks">Seattle Seahawks</label>
                            <br>
                            <input type="radio" value="buccaneers" name="team" required>
                            <label for="buccaneers">Tampa Bay Buccaneers</label>
                            <br>
                            <input type="radio" value="titans" name="team" required>
                            <label for="titans">Tennessee Titans</label>
                            <br>
                            <input type="radio" value="redskins" name="team" required>
                            <label for="redskins">Washington Redskins</label>
                            <br><br>
                            <input type="submit"/>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
