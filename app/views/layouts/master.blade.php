 <?php $auth = Auth::check();
        $id = -1;
        if ($auth) $id = Auth::user()->id;
?>
<!DOCTYPE HTML PUBLIC>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/css/basic.css">
</head>

<body>
    <div class="title">
        <span>The Business Community</span>
    </div>    

    <div id="nav">    
        <ul>
            <li class='left'><a href="/" id="homenav" >Home</a></li>
            <li class='left'><a href="/users">Users</a></li>
            
            @if ($auth) 
                <li class='right'><a href="/logout">Logout</a></li>
                <li class='right'><a href="/users/{{$id}}">My Profile</a></li>
	    @else
                <li class='right'><a href="/login">Login</a></li>    
                <li class='right'><a href="/users/create">Create User</a></li>
	    @endif
        </ul>
    </div>
    <br></br>
    @yield('content')
</body>
</html>
