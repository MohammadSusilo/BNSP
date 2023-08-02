@extends('layouts.frontend.based.apps')
@section('title', 'Confirm')

@php
    use Illuminate\Support\Facades\DB;
    $getTable = DB::table('tb_daftar')->get();
@endphp

@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">   
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">   
@endpush

@section('content')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> </a></li>
                    </ol>
                </nav>

                <h2 class="text-white"> </h2>
                <div class="d-flex align-items-center mt-5"></div>
            </div>

            <div class="col-lg-5 col-12">
                <div class="topics-detail-block bg-white shadow-lg">
                </div>
            </div>

        </div>
    </div>
</header>


<section class="topics-detail-section section-padding" id="topics-detail">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <div class="p-4 shadow p-3 mb-5 bg-body rounded border border-5 bordersecondary position-absolute start-50 top-50 translate-middle">
                <table id="myTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Hp</th>
                            <th scope="col">Semester</th>
                            <th scope="col">IPK</th>
                            <th scope="col">Beasiswa</th>
                            <th scope="col">Berkas</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getTable as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nama }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->hp }}</td>
                                <td>{{ $value->semester }}</td>
                                <td>{{ $value->ipk }}</td>
                                <td>{{ $value->beasiswa }}</td>
                                <td>{{ $value->berkas }}</td>
                                <td>
                                    @if($value->status == 0)
                                        Belum diverifikasi
                                    @endif
                                </td>
                            </tr>                            
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection()

@push('js')
    {{-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
@endpush