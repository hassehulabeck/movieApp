@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Add a movier</h1>
            {!! Form::open(['route' => 'movies.store']) !!}

            <div class="form-group">
                {!! Form::label('movieTitle', 'Movie title') !!}
                {!! Form::text('movieTitle', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Year', 'Year') !!}
                {!! Form::text('Year', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category', 'Category') !!}
                {!! Form::text('category', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Add this movie', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
          </div>
    </div>
</div>
@endsection
