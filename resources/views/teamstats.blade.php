@extends('layouts.teamstatslayout')

<?php
use App\post;

$user = auth()->user();
$fav_team = post::find($user->id);
$team = $fav_team->favorite_team;
?>

@section('content')
<h1><?php echo $team ?></h1>
@endsection