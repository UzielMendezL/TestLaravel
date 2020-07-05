<style>
    .btn
    {
        border-radius: 3px;
        display: inline-block;
        padding: 20px 15px;
        text-shadow: 0 1px rgba(255,255,255,0.3);
        box-shadow: 0 1px 1px rgba(0,0,0,3);
    }
    .btn-green{
        color: white;
        background-color: #28d1d8;;
    
    }
    .btn-green:hover{
        background-color: #b3ffe1;;
    }
    .btn-greeen:active
    {
        background-color: #1d9e9a; ;
    }
    
    form{
                background-color: white;
                border-radius: 3px;
                color: #999;
                font-size: 0.8em;
                padding: 20px;
                margin: 0 auto;
                width: 300px;
            }
            input, textarea{
                border: 0;
                outline: none;
    
                width: 280px;
            }
    
            .field{
                border: solid 1px #ccc;
                padding: 10px;
    
                
            }
    
            .field:focus{
                border-color: #18A383;
            }
    
            .center-content{
                text-align: center;
            }
    
            body{
                background: #1d9e9a;
            }
    
    </style>
    
<body>
    <form action="{{url('/contacts/' .$contactEdit ->id)}}" method="POST">
        {{csrf_field() }}
        {{method_field('PATCH')}}

        <label for="FirstName">{{'FirstName'}}</label>

    <input class="field" name="FirstName" required type="text" id="named" placeholder="FirstName" value="{{$contactEdit -> FirstName}}"/><br>
    
    <label for="LastName">{{'Last Name'}}</label>

    <input class="field" required name="LastName" type="text" id="lastName" placeholder="LastName" value="{{$contactEdit -> LastName}}"/><br>

    <label for="Email">{{"Email"}}</label>

    <input class="field" required name="Email" type="email" id="email" placeholder="Email" value="{{$contactEdit -> Email}}"/><br>

    <label for="ContactNumber">{{'ContactNumber'}}</label>

    <input class="field" required name="ContactNumber" type="number" id="number" placeholder="Phone" value="{{$contactEdit -> ContactNumber}}"/><br><br>

    <input class="btn btn-green" type="Submit" id="edit" value="Edit"/>


    </form>
</body>