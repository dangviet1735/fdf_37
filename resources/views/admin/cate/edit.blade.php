@extends('admin.master')

@section(trans('admin/master.content'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('admin/master.category') }}
                    <small>{{ trans('admin/master.add') }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                {{ Form::open() }}
                    <div class="form-group">
                        {{ Form::label('name', trans('admin/master.category_name')) }}
                        {{ Form::text('name', old('categoryName'), ['placeholder' => trans('admin/master.please_enter_category_name'), 'class' => 'form-control']) }}
                    </div>
                    {{ Form::submit(trans('admin/master.category_add'), ['class' => 'btn btn-default']) }}
                    {{ Form::reset(trans('admin/master.reset'), ['class' => 'btn btn-default']) }}
                {{ Form::close() }}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection()      
