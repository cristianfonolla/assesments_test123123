@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Assesments</div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Note</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach ($assesments as $assesment)

                                <th> {{ $assesment->id }}</th>
                                <th> {{ $assesment->note }}</th>

                            @endforeach

                            </tbody>

                        </table>










                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
