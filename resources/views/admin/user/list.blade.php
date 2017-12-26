@extends('admin.master')

@section(trans('admin/master.content'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('admin/master.user') }}
                    <small>{{ trans('admin/master.list') }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('admin/master.stt') }}</th>
                        <th>{{ trans('admin/master.username') }}</th>
                        <th>{{ trans('admin/master.role') }}</th>
                        <th>{{ trans('admin/master.email') }}</th>
                        <th>{{ trans('admin/master.address') }}</th>
                        <th>{{ trans('admin/master.phone') }}</th>
                        <th>{{ trans('admin/master.delete') }}</th>
                        <th>{{ trans('admin/master.edit') }}</th>
                    </tr>
                </thead>
                <tbody>                   
                    @foreach($users as $key => $user)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td> 
                        <td>{{ $user->phone }}</td>
                        <td class="center">
                            {!! Form::open(['action' => ['Admin\UserController@destroy', $user->id], 'method' => 'DELETE']) !!}
                                {!! Form::submit(trans('admin/master.delete'), ['class' => 'btn btn-danger confirmDelete']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td class="center">
                            <a class="btn btn-danger" href='{{ action("Admin\UserController@edit", [$user->id]) }}'>{{ trans('admin/master.edit') }}</a>
                        </td>   
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
@endsection()  
