@extends('client.master')

@section(trans('admin/master.content'))
<div id="maincontainer">
    <div class="container">
      <br>
      <h2 class="error404"><span>{{ trans('client/master.error_404') }}</span></h2> <br><br>
      <div class="container centeralign"> 
            <img src="img/error-404.png" alt="" title="">
               <br>   <br>   <br>
            <h2 class="font48">{{ trans('client/master.we_are_sorry') }}</h2>
            <h2>{{ trans('client/master.not_found') }}<br>{{ trans('client/master.please_check') }}</h2>
      </div>
    </div>
</div>
@endsection()
