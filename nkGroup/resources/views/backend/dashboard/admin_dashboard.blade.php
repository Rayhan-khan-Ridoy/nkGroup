<div align="center" >

            <h1 >WELCOME TO  ADMIN-DASHBOARD</h1>
            <button type="button" class="btn btn-danger"> <a href="/custom_logout">Logout</a> </button>
            <br>
            <h1> {{--------------------------------------------------}}</h1>
            
            <table border="1" align="center" class="table">


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
            <br>
            <h1> {{--------------------------------------------------}}</h1>
            <table border="1" align="center" class="table">

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

            <br>
            <h1> {{--------------------------------------------------}}</h1>
            <table border="1" align="center" class="table">

                    <tr>
                        <th>Id</th>
                        <th>Admin_Name</th>
                        <th>Email</th>
                        
                    </tr>
                    @foreach($admin as $s)
                        <tr>
                            {{-- <td><a href="{{route('details', ['id' => $s->id,'name'=>$s->name])}}">{{$s->name}}</td> --}}
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->email}}</td>
                        
                        </tr>
                    @endforeach
            </table>

</div>

