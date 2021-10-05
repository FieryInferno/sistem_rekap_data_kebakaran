@extends('layouts.app')
@section('title', 'Data Kasus')
@section('content')
<div class="container-xxl">
    <h1 class="pb-2">Data kasus</h1>
    <div class="card border-white shadow-sm mb-3 table-responsive p-5">
        <table class="table table-striped table-hover" id="dtTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->waktu }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
    <!-- <div class="text-center text-white py-2 bg-primary rounded">Yudha Brama Jaya 2021</div> -->
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#dtTable').DataTable();
});
</script>
@endsection
