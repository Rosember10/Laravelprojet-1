@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <header class="header-index">
		<img  class="img-index" src="{{asset('assets/m1.png')}}" alt="Nicolas">
		<div>
            <h1 class="mt-5">
            APPRENDRE C'EST L'AVENIR
            </h1>
            <a href="{{ route('etudient.index')}}" class="btn btn-primary mt-5"> Afficher les étudiants</a>
		</div>
	</header>

@endsection
