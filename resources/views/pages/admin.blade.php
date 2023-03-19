@extends('back')
@section('content')
    @include('partials.headerAdmin')
    <div class="container-fluid">
        <div class="row">
            @include('partials.leftSideAdmin')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light bg-gradient">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                Share
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                Export
                            </button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            This week
                        </button>
                    </div>
                </div>
                {{-- isi --}}
                <div class="">
                    test
                </div>
            </main>
        </div>
    </div>
    <!--Container Main end-->
    @include('partials.footerAdmin')
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
