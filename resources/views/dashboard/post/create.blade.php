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

    <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">اضافة الصفحات</h4>
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="image" class="form-label"> صورة المقال</label>
                                    <input type="file" name="image" id="image" class="form-control"
                                        value="">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">عنوان المقال</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="">
                                </div>

                                <div class="mb-3">
                                    <label for="category_id" class="form-label">تصنيف المقال</label>
                                    <select class="form-control" name="category_id">
                                        <option disabled selected>-- اختر التصنيف --</option>
                                        @foreach ($categories as $cat )
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">محتوى المقال</label>
                                    <textarea cols="10" rows="10" type="text" name="body" id="content" class="form-control"></textarea>
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
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ), {
            ckfinder: {
                language: 'ar',
                contentLanguageDirection: 'rtl',
                uploadUrl: '{{ route('admin.ckeditor.image-upload', ['_token' => csrf_token()]) }}',
                options: {
                    resourceType: 'Images',
                    disallowedExtensions: ['php','html','js','exe','bat','sh','py','pl','cgi','jar','app','com','scr','pif','vb','vbs','reg','msi','msp','aspx','ascx','asmx','asax','cs','config','ini','htaccess','htpasswd','log','txt','zip','rar','tar','gz','gzip','csv'],
                }
            },
            language: 'ar',
            licenseKey: '',
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
