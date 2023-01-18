@extends('layout.main')
@section('content')
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
@if(count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
<li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
@endif
<br>
<div class="bg-white mt-12 rounded-lg shadow-xl w-3/5 mx-auto">

    <div class="px-8 py-4">
        <p class="text-slate-800 text-xl flex ">
            <a class="pt-2 mr-3" href="../Pages/Dokter.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 
                    .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </a>
            Dokter / Tambah Data
        </p>
    </div>
<div class="px-8 py-6 ">
    <form action="{{ url()->current() }}/simpan" method="post"  name="form1">
        {{csrf_field()}}
        <div class="relative z-0 mb-6 w-full group">
            <input class="form-control block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="input" name="kode" value="{{old('id_dokter')}}"  placeholder=" " required />
            <label class="absolute text-sm text-gray-500 duration-300 transform 
            -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 
            peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
            peer-focus:scale-75 peer-focus:-translate-y-6">Id Dokter</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input class="form-control block py-2.5 px-0 w-full text-sm 
            text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="input" name="nama" value="{{old('nama_dokter')}}" placeholder=" " required />
            <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 
            scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
            peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
            peer-focus:-translate-y-6">Nama Dokter</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input class="form-control block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="input" name="alamat" value="{{old('alamat_dokter')}}"  placeholder=" " required />
            <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 
            scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
            peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
            peer-focus:-translate-y-6">Alamat Dokter</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input class="form-control block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="input" name="spesialis" value="{{old('spesialis_dokter')}}"  placeholder=" " required />
            <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 
            scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
            peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
            peer-focus:-translate-y-6">Spesialis</label>
        </div>
        <button type="submit" value="simpan" class="text-white bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-blue-300 
        font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center">Submit</button>
    </form>     
</div>

</body>
</html>
@endsection