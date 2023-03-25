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
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger shine w-25 m-lg-5 position-absolute"
                            style="display:flex;
            z-index: 99999;">
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <span class="btn btn-danger close-btn">&times;</span>
                        </div>
                        <script>
                            const close = document.querySelector(".close-btn"),
                                alert = document.querySelector(".alert")
                            close.addEventListener("click", () => {
                                alert.style.display = "none";
                            });
                        </script>
                    @endif
                    <div class="card-body p-0 table-responsive mb-2">
                        <table class="table table-bordered table-striped table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>NIK</th>
                                    <th>E-Mail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            @foreach ($Users as $User)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $User->name }}</td>
                                    <td>{{ $User->nik }}</td>
                                    <td>{{ $User->email }}</td>
                                    <td>
                                        {{-- <a class="btn btn-sm btn-warning" href="{{ route('customer.edit', $customer) }}">Edit</a> --}}
                                        <form method="POST" action="{{ route('u53r5.destroy', $User) }}"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!--Container Main end-->
    @include('partials.footerAdmin')
@endsection
