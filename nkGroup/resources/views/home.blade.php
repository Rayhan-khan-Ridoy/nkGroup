@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 >WELCOME TO  USER-DASHBOARD</h1>
                    <button type="button" class="btn btn-danger"> <a href="/custom_logout3">Logout</a> </button>
                    
                </div>
               
            </div>
        </div>
    </div>
    <table border="1" align="center" class="table">
</div>



<tr>
    <th>User Unique-Id</th>
    <th>User_Name</th>
    <th>Email</th>
    
</tr>
@foreach($user as $s)
    <tr>
        {{-- <td><a href="{{route('details', ['id' => $s->id,'name'=>$s->name])}}">{{$s->name}}</td> --}}
        <td>{{$s->id}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->email}}</td>
    
    </tr>
@endforeach
</table>
@endsection
