@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



    @foreach ($assesments as $assesment)

        <p>{{ $assesment->note }}</p>

    @endforeach



@endsection
