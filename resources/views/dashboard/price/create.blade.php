@extends('layouts.dashboard.dashboard')

@section('styles')

<link href="{{asset('dashboard/assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.css">
<style>
    .dt-button{
        font-family: 'carro', sans-serif;;
    }
    .dt-button-collection{
        font-family: 'arial', sans-serif;;
    }

    .ck.ck-editor__editable_inline>:last-child {
    margin-bottom: var(--ck-spacing-large);
    text-align: right;
    height: 300px;
}
</style>
@endsection
@section('content')

    <form action="{{ route('admin.price.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">اضافة الاسعار</h4>
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">العنوان</label>
                                        <input type="text" name="name" id="title" class="form-control"
                                            value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="price" class="form-label">السعر</label>
                                        <input type="text" name="price" id="price" class="form-control" value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="btn-link" class="form-label">الرابط</label>
                                        <input type="text" name="btn-link" id="btn-link" class="form-control" value="">
                                   </div>

                                    <div class="mb-3">
                                        <label for="features" class="form-label">المميزات</label>
                                        @foreach ( $extras as $extra )
                                            <input type="checkbox" name="extra[]" class="checkbox" value="{{ $extra->id }}"

                                            checked
                                            > {{ $extra->name }}
                                        @endforeach
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
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

<script>
    $("#datatable").DataTable(), $("#datatable-buttons").DataTable({

        style:{'fontSize':200, 'font-family':'sans-serif'},

    });
</script>
<script>
ClassicEditor
    .create( document.querySelector( '#content' ), {
        language: 'ar',
        contentLanguageDirection: 'rtl' // يتم تعيين الاتجاه الى اليمين-الى-اليسار
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection
