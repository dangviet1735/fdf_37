@extends('admin.master')
@section(trans('admin/master.content'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('admin/master.product') }}
                    <small>{{ trans('admin/master.list') }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('admin/master.id') }}</th>
                        <th>{{ trans('admin/master.product_name') }}</th>
                        <th>{{ trans('admin/master.product_description') }}</th>
                        <th>{{ trans('admin/master.images') }}</th>
                        <th>{{ trans('admin/master.quanity') }}</th>
                        <th>{{ trans('admin/master.rating') }}</th>
                        <th>{{ trans('admin/master.manufacturing_date') }}</th>
                        <th>{{ trans('admin/master.expiry_date') }}</th>
                        <th>{{ trans('admin/master.username') }}</th>
                        <th>{{ trans('admin/master.category_name') }}</th>
                        <th>{{ trans('admin/master.product_status') }}</th>
                        <th>{{ trans('admin/master.delete') }}</th>
                        <th>{{ trans('admin/master.edit') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
@endsection() 
