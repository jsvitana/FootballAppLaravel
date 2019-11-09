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
                            <input type="submit" value="Remove Favorite Team">
                        </form>

                    @else
                        Choose your favorite Team!
                        <form method="POST" action="/update">
                            {{ csrf_field() }}   <!-- does something, ask Guido -->
                            @method('PUT')       <!-- so laravel can process this as a put and not a post request -->

                            <input type="radio" value="ARI" name="team" required>
                            <label for="ARI">Arizona Cardinals</label>
                            <br>
                            <input type="radio" value="ATL" name="team" required>
                            <label for="ATL">Atlanta Falcons</label>
                            <br>
                            <input type="radio" value="BAL" name="team" required>
                            <label for="BAL">Baltimore Ravens</label>
                            <br>
                            <input type="radio" value="BUF" name="team" required>
                            <label for="BUF">Buffalo Bills</label>
                            <br>
                            <input type="radio" value="CAR" name="team" required>
                            <label for="CAR">Carolina Panthers</label>
                            <br>
                            <input type="radio" value="CIN" name="team" required>
                            <label for="CIN">Cincinnati Bengals</label>
                            <br>
                            <input type="radio" value="CHI" name="team" required>
                            <label for="CHI">Chicago Bears</label>
                            <br>
                            <input type="radio" value="CLE" name="team" required>
                            <label for="CLE">Cleveland Browns</label>
                            <br>
                            <input type="radio" value="DAL" name="team" required>
                            <label for="DAL">Dallas Cowboys</label>
                            <br>
                            <input type="radio" value="DEN" name="team" required>
                            <label for="DEN">Denver Broncos</label>
                            <br>
                            <input type="radio" value="DET" name="team" required>
                            <label for="DET">Detroit Lions</label>
                            <br>
                            <input type="radio" value="GB" name="team" required>
                            <label for="GB">Green Bay Packers</label>
                            <br>
                            <input type="radio" value="HOU" name="team" required>
                            <label for="HOU">Houston Texans</label>
                            <br>
                            <input type="radio" value="IND" name="team" required>
                            <label for="IND">Indianapolis Colts</label>
                            <br>
                            <input type="radio" value="JAC" name="team" required>
                            <label for="JAC">Jacksonville Jaguars</label>
                            <br>
                            <input type="radio" value="KC" name="team" required>
                            <label for="KC">Kansas City Chiefs</label>
                            <br>
                            <input type="radio" value="LAC" name="team" required>
                            <label for="LAC">Los Angeles Chargers</label>
                            <br>
                            <input type="radio" value="LA" name="team" required>
                            <label for="LA">Los Angeles Rams</label>
                            <br>
                            <input type="radio" value="MIA" name="team" required>
                            <label for="MIA">Miami Dolphins</label>
                            <br>
                            <input type="radio" value="MIN" name="team" required>
                            <label for="MIN">Minnesota Vikings</label>
                            <br>
                            <input type="radio" value="NE" name="team" required>
                            <label for="NE">New England Patriots</label>
                            <br>
                            <input type="radio" value="NO" name="team" required>
                            <label for="NO">New Orleans Saints</label>
                            <br>
                            <input type="radio" value="NYG" name="team" required>
                            <label for="NYG">New York Giants</label>
                            <br>
                            <input type="radio" value="NYJ" name="team" required>
                            <label for="NYF">New York Jets</label>
                            <br>
                            <input type="radio" value="OAK" name="team" required>
                            <label for="OAK">Oakland Raiders</label>
                            <br>
                            <input type="radio" value="PHI" name="team" required>
                            <label for="PHI">Philadelphia Eagles</label>
                            <br>
                            <input type="radio" value="PIT" name="team" required>
                            <label for="PIT">Pittsburgh Steelers</label>
                            <br>
                            <input type="radio" value="SF" name="team" required>
                            <label for="SF">San Francisco 49ers</label>
                            <br>
                            <input type="radio" value="SEA" name="team" required>
                            <label for="SEA">Seattle Seahawks</label>
                            <br>
                            <input type="radio" value="TB" name="team" required>
                            <label for="TB">Tampa Bay Buccaneers</label>
                            <br>
                            <input type="radio" value="TEN" name="team" required>
                            <label for="TEN">Tennessee Titans</label>
                            <br>
                            <input type="radio" value="WAS" name="team" required>
                            <label for="WAS">Washington Redskins</label>
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
