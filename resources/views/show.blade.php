@extends('layouts.layout')

@section('header')
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Fiche d'utilisateur</h2>
                <div class="col-sm-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-body text-white">
                            <p>Nom : {{ $user->name }}</p>
                            <p>Email : {{ $user->email }}</p>
                            @if($user->admin == 1)
                                Administrateur
                            @endif
                        </div>
                    </div>
                    <a href="javascript:history.back()" class="btn btn-primary">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                </div>
            </div>
        </div>
    </header>
@endsection
