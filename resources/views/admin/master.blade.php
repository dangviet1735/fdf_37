<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Food & Drink">
    <meta name="author" content="">

    <title>{{ trans('admin/login.admin') }}</title>

    <!-- Bootstrap Core CSS -->
    {{ Html::style(asset('css/bootstrap/dist/css/bootstrap.min.css')) }}

    {{ Html::style(asset('css/metismenu/dist/metisMenu.css')) }}

    {{ Html::style(asset('admin/dist/css/sb-admin-2.css')) }}

    {{ Html::style(asset('css/font-awesome/css/font-awesome.min.css')) }}

    {{ Html::style(asset('css/datatables.net-plugins/integration/bootstrap/3/dataTables.bootstrap.css')) }}
    
    {{ Html::style(asset('css/datatables-responsive/css/dataTables.responsive.css')) }}

    {{ Html::style(asset('css/bootstrap/dist/css/bootstrap.min.css')) }}


    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.header')

        <!-- Page Content -->
        <div id="page-wrapper">

            @yield(trans('admin/master.content'))
            
            <!-- /.container-fluid -->
        <!-- End Page Content -->
        <div class="box">
            @if ( Session::has('messages') )
                <div class="alert alert-{{ Session::get('flash') }}">
                    {{ Session::get('messages') }}
                </div>
            @endif
        </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    {{ Html::script(asset('js/jquery/dist/jquery.min.js')) }}

    {{ Html::script(asset('js/bootstrap/dist/js/bootstrap.min.js')) }}

    {{ Html::script(asset('js/metismenu/dist/metisMenu.js')) }}

    {{ Html::script(asset('admin/dist/js/sb-admin-2.js')) }}

    {{ Html::script(asset('js/datatables/media/js/jquery.dataTables.min.js')) }}

    {{ Html::script(asset('js/datatables.net-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')) }}

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="text/javascript">
        $("div.alert").delay(3000).slideUp();
    </script>
</body>
</html>
