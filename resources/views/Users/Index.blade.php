<style>

body{
    background-color: #fff;
    font-family: Arial;
}
#main-container{
    margin: 150px auto;
    width: 600px;
}
table
{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
}
th,td {
    padding: 20px;

}
thead{
    background-color: #1d9e9a;
    border-bottom:  solid 6px #28d1d8;
    color: white;
}
tr:nth-child(even){
    background-color:#ddd;  
}
#add{

    position: absolute;
    top: 25em;
    left: 0em;
    right: 0px;
    width: 135px;
    height: 109px;
    opacity: 30;
    margin: 103px;
}
}

</style>
<body>
<div id="main-container">
    <table class="table table-light">
        <thead  class="table table-light">
         <tr>
            <th>#  </th>
            <th>FirstName </th>
            <th>LastName</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th></th>
            <th></th>
         </tr>  
        </thead>
        
        <tbody>
            @foreach ($contactsIndex as $index)
            <tr>
            <td>{{$loop ->iteration}}</td>
            <td>{{$index ->FirstName}}</td>
                <td>{{$index ->LastName}}</td>
                <td>{{$index ->Email}}</td>
                <td>{{$index ->ContactNumber}}</td>
                <td>
                    
                    
                    <form method="POST" action="{{url('/contacts/' .$index -> id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Are you sure?');">Borrar</button>
                    </form>
                    
                    
                </td>
            <td>    
                <form method="GET" action="{{url('/contacts/' .$index ->id.'/edit')}}">
                   
                    <button type="submit" >Editar</button>
            </form>
          </td>
            </tr>  
            @endforeach
        
        </tbody>
    </table>
    <form method="GET" action="{{url('/contacts/create')}}">
                   
        <button id="add" type="submit" >Add</button>
    </form>
    
</div>
</body>