@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



    @foreach ($scale as $scale)

        <p>{{ $scale->name }}</p>

    @endforeach



@endsection
