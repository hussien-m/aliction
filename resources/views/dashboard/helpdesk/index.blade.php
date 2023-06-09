@extends('layouts.dashboard.dashboard')

@section('styles')
<link href="{{asset('dashboard/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('dashboard/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('dashboard/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('dashboard/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

        @endsection
@section('content')
<div class="card p-3">
    <form method="post" action="{{ route('admin.save.how') }}">
        @csrf
        <div class="mb-3">
            <label for="how">عنوان القسم</label>
            <input type="text" class="form-control" name="how_title" value="{{ $title_section->how_title }}">
        </div>
        <button class="btn btn-primary" type="submit">حفظ</button>
    </form>
</div>
<div class="card p-3">
    <div class="table-responsive">
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                <th>#</th>
                <th>الصورة</th>
                <th>العنوان</th>
                <th>الوصف</th>
                <th>الحدث</th>
            </thead>
            <tbody>
                @foreach($helpdesks as $key => $helpdesk)
                <tr>
                    <td>{{ $key+=1 }}</td>
                    <td>
                        <a class="image-popup-no-margins" href="{{asset("/images/helpdesk/".$helpdesk->image)}}">
                            <img class="img-fluid rounded img-thumbnail" alt="" src="{{asset("/images/helpdesk/".$helpdesk->image)}}" width="90">
                        </a>
                    </td>
                    <td>{{ $helpdesk->title }}</td>
                    <td>{{ $helpdesk->body }}</td>
                    <td><a href="{{ route("admin.helpdesk.edit",$helpdesk->id) }}" class="btn btn-primary">تعديل</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('scripts')
        <!-- Magnific Popup-->
        <script src="{{asset('dashboard/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

        <!-- Tour init js-->
        <script src="{{asset('dashboard/assets/js/pages/lightbox.init.js')}}"></script>

        <script src="{{ asset('dashboard/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/pages/datatables.init.js') }}"></script>
@endsection
