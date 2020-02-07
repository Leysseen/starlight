@extends('layouts.layout')

@section('header')
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Modification d'un utilisateur</h2>
                <div class="col-sm-offset-4">
                    <br>
                    <div class="panel panel-primary text-white">
                        <div class="panel-body">
                            <div class="col-sm-12">
                                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                </div>
                                <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            {!! Form::checkbox('admin', 1, null) !!}Administrateur
                                        </label>
                                    </div>
                                </div>
                                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                                {!! Form::close() !!}
                            </div>
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
