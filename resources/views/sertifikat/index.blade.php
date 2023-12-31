@extends('layouts.main2')
@section('container')
    @include('layouts.navbar')
    @include('layouts.header-event')  
    @include('layouts.event-sertif') 
    @include('layouts.abjad-sertif')

    <div class="table-sertif">
    <table id="myTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Instansi</th>
                <th>Fasilitas</th>
                <th>Sertifikat</th>
            </tr>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->instansi }}</td>
                    <td></td>
                    <td><button><a href="{{ route('sertif.download', ['id' => $data->id]) }}">Download</a></button></td>
                </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
    </div>


    @include('tombolwa')
    @include('layouts.footer')
@endsection

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    var DataTable = require('datatables.net');
    require('datatables.net-responsive');

    let table = new DataTable('#myTable', {
        responsive: true
    });
    console.log(table);
</script>
