@extends('admin.master')

@section(trans('admin/master.content'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('admin/master.product') }}
                    <small>{{ trans('admin/master.add') }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                {{ Form::open(['files' => true]) }}
               
                    <div class="form-group">
                        {{ Form::label('name', trans('admin/master.product_name')) }} 
                        {{ Form::text('name', old('name'), ['placeholder' => trans('admin/master.please_enter_product_name'), 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', trans('admin/master.product_description')) }}
                        {{ Form::textarea('description',null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('image', trans('admin/master.images')) }} 
                        {{ Form::file('image') }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('quanity', trans('admin/master.quanity')) }} 
                        {{ Form::number('quanity', old('quanity'), ['placeholder' => trans('admin/master.please_enter_quanity'), 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('rating', trans('admin/master.rating')) }} 
                        {{ Form::number('rating', old('rating'), ['placeholder' => trans('admin/master.please_enter_rating'), 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('manufacturing_date', trans('admin/master.manufacturing_date')) }} 
                        {{ Form::date('manufacturing_date', old('manufacturingDate'), ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('expiry_date', trans('admin/master.expiry_date')) }} 
                        {{ Form::date('expiry_date', old('expiryDate'), ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('username', trans('admin/master.username')) }} 
                        {{ Form::select('username', [
                            '' => trans('admin/master.please_choose_username'),
                            '0' => '',
                        ], null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('categoryName', trans('admin/master.category_name')) }} 
                        {{ Form::select('categoryName', [
                            '' => trans('admin/master.please_choose_category_name'),
                            '0' => '',
                        ], null, ['class' => 'form-control']) }}
                    </div>                      
                    <div class="form-group">
                        {{ Form::label('productStatus', trans('admin/master.product_status')) }} 
                        <label class="radio-inline">
                            {{ Form::radio('rdoStatus', config('setting.product_value.value_0'), true, ['class' => 'field']) }} {{ trans('admin/master.confirmed') }}                          
                        </label>
                        <label class="radio-inline">
                             {{ Form::radio('rdoStatus', config('setting.product_value.value_1'), true, ['class' => 'field']) }} {{ trans('admin/master.suggest') }}
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('admin/master.product_add') }}</button>
                    <button type="reset" class="btn btn-default">{{ trans('admin/master.reset') }}</button>
               
                {{ Form::close() }}
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection()  
