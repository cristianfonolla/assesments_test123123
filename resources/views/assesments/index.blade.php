<<<<<<< HEAD
{{--{{ dump($assesments) }}--}}

<ul>
    @foreach ($assesments as $assesment)
        <li>This is assesment {{ $assesment->id }}</li>
    @endforeach
</ul>
=======
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

                            <input type="hidden" name="grade_id" value="1">
                            <input type="hidden" name="user_id" value="1">
                            <input type="hidden" name="item_id" value="1">
                            <input type="hidden" name="item_type" value="1">
                            <input type="hidden" name="weight" value="1">
                            <input type="hidden" name="parent_grade_id" value="1">

                            @if ($errors->has('note'))
                                <div class="form-group has-warning">
                                    <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i>Note</label>
                                    <input type="text" class="form-control" id="inputWarning" placeholder="Note" note="note">
                                    @foreach ($errors->get('Note') as $message)
                                        <span class="help-block"> {{ $message }}</span>
                                    @endforeach
                                </div>
                            @else
                                <div class="form-group">
                                    <label>Note</label>
                                    <input type="text" class="form-control" placeholder="Note" note="note">
                                </div>
                            @endif

                            <input type="submit" value="create">


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
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
