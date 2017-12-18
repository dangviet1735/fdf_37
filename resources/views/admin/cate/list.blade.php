@extends('admin.master')

@section(trans('admin/master.content'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('admin/master.category') }}
                    <small>{{ trans('admin/master.list') }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('admin/master.id') }}</th>
                        <th>{{ trans('admin/master.category_name') }}</th>
                        <th>{{ trans('admin/master.status') }}</th>
                        <th>{{ trans('admin/master.delete') }}</th>
                        <th>{{ trans('admin/master.edit') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('admin/master.delete') }}</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('admin/master.edit') }}</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection()  
