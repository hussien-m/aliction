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

    <form action="{{ route('admin.category.update',$category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"> تعديل الصنف</h4>
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">اسم التصنيف</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $category->name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">حالة التصنيف</label>
                                    <select class="form-control" name="status">
                                        <option value="active" {{  $category->status == "active" ? 'selected':'' }} >مفعل</option>
                                        <option value="inactive" {{  $category->status == "inactive" ? 'selected':'' }}>غير مفعل</option>
                                    </select>
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
