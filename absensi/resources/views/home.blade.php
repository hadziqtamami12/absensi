@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('home/check_in')}}" method="post">
                        @csrf
                    <button class="btn btn-primary" type="submit">
                        check in
                    </button>
                    </form>
                    
                    <form action="{{ url('home/check_out')}}" method="post">
                        @csrf
                        <button class="btn btn-warning">
                            check out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
