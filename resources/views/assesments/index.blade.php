@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">




            <div class="col-md-8 col-md-offset-2">


                <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Assesments</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        Aqui van assesments TODO
                    </div>
                    <!-- /.box-body -->
                </div>







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
