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

    <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">الاعدادات العامة للموقع</h4>
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="site_name" class="form-label">إسم الموقع</label>
                                    <input type="text" name="site_name" id="site_name" class="form-control"
                                        value="{{ $setting[0]->site_name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="logo" class="form-label">شعار الموقع</label>
                                    <input type="file" name="logo" id="logo" class="form-control">
                                    {{ $setting[0]->logo }}
                                </div>

                                <div class="mb-3">
                                    <label for="site_desc" class="form-label"> وصف الموقع (خاص بالفوتر)</label>
                                    <textarea type="text" name="site_desc" id="site_desc" class="form-control"
                                      cols="6" rows="15" style="resize: none;">{{ $setting[0]->site_desc }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="footer_logo" class="form-label">شعار الفوتر</label>
                                    <input type="file" name="footer_logo" id="logo" class="form-control">
                                    {{ $setting[0]->footer_logo }}
                                </div>


                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">التواصل الاجتماعي</h4>

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="mb-3">
                                    <label for="phone" class="form-label">رقم الهاتق</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ $setting[0]->phone }}">
                                </div>

                                <div class="mb-3">
                                    <label for="facebook" class="form-label">صفحة الفيسبوك</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        value="{{ $setting[0]->facebook }}">
                                </div>

                                <div class="mb-3">
                                    <label for="twitter" class="form-label">صفحة تويتر </label>
                                    <input type="text" name="twitter" id="twitter" class="form-control"
                                        value="{{ $setting[0]->twitter }}">
                                </div>

                                <div class="mb-3">
                                    <label for="instagram" class="form-label">صفحة انستجرام</label>
                                    <input type="text" name="instagram" id="instagram" class="form-control"
                                        value="{{ $setting[0]->instagram }}">
                                </div>

                                <div class="mb-3">
                                    <label for="tiktok" class="form-label">صفحة تيك توك</label>
                                    <input type="text" name="tiktok" id="tiktok" class="form-control"
                                        value="{{ $setting[0]->tiktok }}">
                                </div>
                            </div> <!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">محركات البحث (SEO)</h4>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label class="form-label">الكلمات المفتاحية</label>
                                        <input type="text" id="selectize-tags" id="input-tags" class="form-control input-tags" name="meta_tag" value="{{ $setting[0]->meta_tag }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_desc" class="form-label">الوصف</label>
                                        <textarea type="text" rows="6" style="resize: none" name="meta_desc" id="meta_desc" class="form-control">{{ $setting[0]->meta_desc }}</textarea>
                                    </div>
                                    <div class="col-xl-2 col-md-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"> @lang('dash.save')
                                             <i class="fas fa-save"></i></button>
                                    </div>
                                </div> <!-- end col -->
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
