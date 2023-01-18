@extends('layout.main')
@section('content')
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="md:mx-24 bg-white mt-8 rounded-lg shadow-xl">
    <div class="mt-6 mx-8 ">
        <a class="px-4 py-2 bg-slate-500 hover:bg-slate-700 rounded-lg text-white" id="tambah" onclick="window.location.href='{{ url()->current()}}/tambah';">Tambah Data</a>
    </div>

    <div class="flex flex-col px-8 py-6">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden ">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                        <thead class="bg-gray-100 ">
                            <tr>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    Id Pasien
                                </th>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    
                                </th>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    Nama Pasien
                                </th>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    Alamat
                                </th>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    Keluhan
                                </th>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    Tanggal Datang
                                </th>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    Dokter Penanganan
                                </th>
                                <th scope="col" class="py-1 px-1 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                    Aksi
                                </th>
                                <th scope="col" class="p-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        @foreach($pasien as $row)
                        <tr>
                        
                        <td>{{$row->id_pasien}}</td> 
                        <td>{{$row->nama_pasien}}</td>
                        <td>{{$row->alamat_pasien}}</td>
                        <td>{{$row->tanggal_datang}}</td>
                        <td>{{$row->keluhan_pasien}}</td>
                        <td>{{$row->id_dokter}}</td>
                        <td>
                        <a href="{{ url()->current() }}/edit/{{$row->id_pasien}}" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">Edit</a>
                        <a href="{{ url()->current() }}/hapus/{{$row->id_pasien}}" class="btn btn-danger">Hapus</a>
                        </td>
	                    </tr>
                      @endforeach
                       </table>
    
             </body>
                        </html> 
    
@endsection