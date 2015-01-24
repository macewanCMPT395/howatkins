 <?php $auth = Auth::check();
        $id = -1;

        if ($auth) $id = Auth::user()->id;?>
<!DOCTYPE HTML PUBLIC>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/css/basic.css">
</head>

<body>
    <div class="title">
        <span>CMPT395</span>
    </div>    

    <div id="nav">    
        <ul>
            <li><a href="/" id="homenav" >Home</a></li>
            <li><a href="/users">Users</a></li>
            <!-- @yield('listItem')-->
	    @if ($auth) 
               <li><a href="/users/{{$id}}">My Profile</a></li>
               <li><a href="/logout">Logout</a></li>
	    @else
               <li><a href="/users/create">Create User</a></li>
               <li><a href="/login">Login</a></li>    
	    @endif

        </ul>
    </div>
    <br></br>
    @yield('content')
</body>
</html>
