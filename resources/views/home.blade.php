@extends('layouts.app')

@section(trans('admin/master.content'))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('admin/master.dashboard') }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ trans('admin/master.you_are_logged_in') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
