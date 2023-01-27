@extends('layouts.app')
@section('title','etudient-list')
    @section('content')
    <div class="container ">
        <div class="row rounded mx-auto d-block ">
            <img src="{{asset('assets/banner.jpg')}}" class="img-fluid  " alt="">
        </div>
    </div>
    <div class="container p-5" >
        <div class="row">
            <div class="col-12 text-center pt-5">
                <div class="row">
                    <div class="col-8">
                        <h4 class="text-primary text-uppercase">
                           Étudiant des college de maisonneuve
                        </h4>
                    </div>
                    <div class="col-4">
                        <a href="{{route('etudient.create')}}" class="btn btn-primary"> Ajouter un étudiant</a>
                    </div>
                </div>
                <hr>
            </div>
                <table class="table table-striped table-hover  table-borderless">
                    <thead >
                        <tr class="text-primary">
                        <th>NOM</th>
                        <th>ADRESSE</th>
                        <th>TÉLÉPHONE</th>
                        <th>ADRESSE COURRIEL</th>
                        <th>DATE DE NAISSANCE</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody >
                    @forelse ($etudients as $etudient)
                        <tr >
                        <td>{{$etudient->nom}}</td>
                        <td>{{$etudient->adresse}}</td>
                        <td>{{$etudient->phone}}</td>
                        <td>{{$etudient->email}}</td>
                        <td>{{$etudient->date_naissance}}</td>
                        <td><a href="{{route('etudient.show',$etudient->id)}}" class="btn btn-outline-primary m-2 p-1 text-center mx-auto d-block">Voir l'étudiant</a></td>
                        </tr>
                        @empty   
                        <tr>
                        <td></td>
                        <td>Aucun </td>
                        <td>étudiant</td>
                        <td>disponible</td>
                        <td></td>
                        </tr>
                    @endforelse    
                    </tbody>
                </table>
            </div>
         </div>
    <div class="d-flex">
        <div id="mi-div" class="mx-auto">
        {{$etudients}}
        </div>
    </div>

    @endsection