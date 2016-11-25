@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



    @foreach ($grade as $grade)

        <p>{{ $grade->id }}</p>

    @endforeach



@endsection
