@extends('layouts.dashboard.dashboard')

@section('styles')
<style>
    .ck.ck-editor__editable {
    min-height: 200px;
}
</style>
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="card-header">{{ __('Create New Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.post.update',$post->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $post->title }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">{{ __('Category') }}</label>
                            <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">{{ __('-- Select a category --') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">{{ __('Content') }}</label>
                            <textarea cols="10" rows="10" type="text" name="body" id="content" class="form-control">{!! $post->body !!}</textarea>

                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">{{ __('Image') }}</label>
                            <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0 mt-3">
                            <button type="submit" class="btn btn-primary">انشاء مقال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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

