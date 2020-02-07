@extends('layouts.layout')

@section('header')
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Création d'un utilisateur</h2>
                <div class="panel panel-primary text-white">
                    <div class="panel-body">
                        <div class="col-sm-12">
                            {!! Form::open(['route' => 'user.store', 'class' => 'form-horizontal panel']) !!}
                            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                                {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
                                {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('admin', 1, null) !!} Administrateur
                                    </label>
                                </div>
                            </div>
                            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <a href="javascript:history.back()" class="btn btn-link text-white">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                </div>
            </div>
        </div>
    </header>
@endsection

