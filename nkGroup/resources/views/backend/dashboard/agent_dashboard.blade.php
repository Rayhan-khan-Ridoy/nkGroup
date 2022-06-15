<div align="center" >

<h1 >WELCOME TO  AGENT-DASHBOARD</h1>
<button type="button" class="btn btn-danger"> <a href="/custom_logout2">Logout</a> </button>
<table border="1" align="center">


    <tr>
        <th>Id</th>
        <th>Agent_Name</th>
        <th>Email</th>
        
    </tr>
    @foreach($agent as $s)
        <tr>
            {{-- <td><a href="{{route('details', ['id' => $s->id,'name'=>$s->name])}}">{{$s->name}}</td> --}}
            <td>{{$s->id}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->email}}</td>
          
        </tr>
    @endforeach
</table>

</div>

