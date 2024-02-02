@extends('layouts.app')

@section('content')
  <section class="section section-sm">
    <div class="container container-lg-3 pt-lg-5 pt-2">
      <div class="row">
        <div class="col-md-2">
          @include('includes.menu-sidebar-home')
        </div>

        <div class="col-md-10 p-0 second wrap-post">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230187.05553858384!2d-100.47380918279377!3d25.648984777722905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629531b437f8f5%3A0xa3d3d3ca6ac89894!2sMonterrey%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1706611839811!5m2!1ses-419!2smx" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- end col-md-6 -->
      </div>
    </div>
  </section>
@endsection

@section('javascript')

@if (session('noty_error'))
<script type="text/javascript">
    swal({
        title: "{{ trans('general.error_oops') }}",
        text: "{{ trans('general.already_sent_report') }}",
        type: "error",
        confirmButtonText: "{{ trans('users.ok') }}"
    });
</script>
@endif

@if (session('noty_success'))
<script type="text/javascript">
    swal({
       title: "{{ trans('general.thanks') }}",
       text: "{{ trans('general.reported_success') }}",
       type: "success",
       confirmButtonText: "{{ trans('users.ok') }}"
    });
</script>
 @endif

 @endsection
