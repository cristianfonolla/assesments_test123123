@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">




            <div class="col-md-8 col-md-offset-2">


                <div class="box box-default box-solid">
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

                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                            Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                            soul, like these sweet mornings of spring which I enjoy with my whole heart.
                        </div>

                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Alert!</h4>
                            Success alert preview. This alert is dismissable.
                        </div>


                        <form role="form" action="/assesments" method="post">
                            {{ csrf_field() }}

                            <input type="hidden" >
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>

                            <input type="submit">
                            {{--<!-- input states -->--}}
                            {{--<div class="form-group has-success">--}}
                            {{--<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>--}}
                            {{--<input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">--}}
                            {{--<span class="help-block">Help block with success</span>--}}
                            {{--</div>--}}
                            {{--<div class="form-group has-warning">--}}
                            {{--<label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with--}}
                            {{--warning</label>--}}
                            {{--<input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">--}}
                            {{--<span class="help-block">Help block with warning</span>--}}
                            {{--</div>--}}
                            {{--<div class="form-group has-error">--}}
                            {{--<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with--}}
                            {{--error</label>--}}
                            {{--<input type="text" class="form-control" id="inputError" placeholder="Enter ...">--}}
                            {{--<span class="help-block">Help block with error</span>--}}
                            {{--</div>--}}

                            {{----}}

                        </form>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-danger">Create</button>
                    </div>
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
