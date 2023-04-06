@extends('layouts.dashboard.dashboard')

@section('styles')

<link href="{{asset('dashboard/assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .dt-button{
        font-family: 'carro', sans-serif;;
    }
    .dt-button-collection{
        font-family: 'arial', sans-serif;;
    }
</style>
@endsection
@section('content')

    <form action="{{ route('admin.say.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">أقوال العملاء</h4>
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="client_name" class="form-label">أسم العميل</label>
                                    <input type="client_name" name="client_name" id="client_name" class="form-control"
                                        value="">
                                </div>

                                <div class="mb-3">
                                    <label for="jop" class="form-label">الوظيفة</label>
                                    <input type="jop" name="jop" id="jop" class="form-control"
                                        value="">
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">الصورة</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">الوصف</label>
                                    <textarea type="text" name="content" id="body" class="form-control"></textarea>
                                </div>
                            </div> <!-- end col -->

                            <button type="submit" class="btn btn-primary col-md-2">حفظ</button>
                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>
    </form>

@stop

@section('scripts')

<script src="{{ asset('dashboard/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/mohithg-switchery/switchery.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/pages/form-advanced.init.js') }}"></script>

<script>
    $("#datatable").DataTable(), $("#datatable-buttons").DataTable({

        style:{'fontSize':200, 'font-family':'sans-serif'},

    });
</script>

@endsection
