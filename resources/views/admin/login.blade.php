<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ trans('admin/login.admin') }}</title>

    <!-- Bootstrap Core CSS -->
    {{ Html::style(asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')) }}

    <!-- MetisMenu CSS -->
    {{ Html::style(asset('admin/bower_components/metisMenu/dist/metisMenu.min.css')) }}

    <!-- Custom CSS -->
    {{ Html::style(asset('admin/dist/css/sb-admin-2.css')) }}

    <!-- Custom Fonts -->
    {{ Html::style(asset('admin/bower_components/font-awesome/css/font-awesome.min.css')) }}

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ trans('admin/login.please_sign_in') }}</h3>
                    </div>
                    @include('common.errors')
                    <div class="panel-body">
                        {{ Form::open(['route' => 'postLoginAdmin']) }}
                            <fieldset>
                                <div class="form-group">
                                    {{ Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => trans('admin/master.username')]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => trans('admin/master.password')]) }}
                                </div>
                                    {{ Form::submit(trans('admin/login.login'), ['class' => 'btn btn-lg btn-success btn-block']) }}             
                            </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

     <script type="text/javascript">
        $("div.alert").delay(3000).slideUp();
    </script>
    <!-- jQuery -->
    {{ Html::script(asset('admin/bower_components/jquery/dist/jquery.min.js')) }}

    <!-- Bootstrap Core JavaScript -->
    {{ Html::script(asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')) }}

    <!-- Metis Menu Plugin JavaScript -->
    {{ Html::script(asset('admin/bower_components/metisMenu/dist/metisMenu.min.js')) }}

    <!-- Custom Theme JavaScript -->
    {{ Html::script(asset('admin/bower_components/dist/js/sb-admin-2.js')) }}

</body>

</html>
