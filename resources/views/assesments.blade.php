@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



    @foreach ($assesments as $assesment)

        <p>{{ $assesment->id }}</p>
        <p>{{ $assesment->grade_id }}</p>
        <p>{{ $assesment->user_id }}</p>
        <p>{{ $assesment->item_id }}</p>
        <p>{{ $assesment->note }}</p>
        <p>{{ $assesment->item_type }}</p>
        <p>{{ $assesment->weight }}</p>
        <p>{{ $assesment->parent_grade_id }}</p>


    @endforeach



@endsection
