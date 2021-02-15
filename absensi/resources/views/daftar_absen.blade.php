@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Lama Jam Kerja</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data) 
                <tr>
                    <td>{{$data->user->name}}</td>
                    <td>{{$data->tanggal}}</td>
                    <td>{{$data->check_in}}</td>
                    <td>{{$data->check_out}}</td>
                    <td>{{$data->check_out - $data->check_in}}</td>
                    <td></td>
                </tr>
            @endforeach
            </table>
        
        </div>
    </div>
</div>




@endsection

