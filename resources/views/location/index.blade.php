@extends ('layout.main')
@section ('content')
    <div class="col-sm-6">
        @include('location.add')
    </div>
    <div class="col-sm-6">
        @include('location.delete')
    </div>
    <div class="col-sm-12 mt-5">
        <div class="w-50">
            @include('location.table')
        </div>
    </div>
@endsection
