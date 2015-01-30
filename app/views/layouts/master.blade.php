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
    <div id="header">
        <div id="sitename"><h1 class="title">The Business Community</h1></div>
        <div id="nav">    
        <ul>
            <li><a href="/" id="homenav" >Home</a></li>
            <li><a href="/users">Users</a></li>
            
            @if ($auth) 
            <li class='right'><a href="/logout">Logout</a></li>
            <li class='right'><a href="/users/{{$id}}">My Profile</a></li>
	        @else
            <li class='right'><a href="/login">Login</a></li>    
            <li class='right'><a href="/users/create">Create User</a></li>
	        @endif
        </ul>
        </div> <!-- end nav -->
    </div> <!-- end header -->

    <div id="content">
        @yield('content')
    </div>

    <div id="footer">
        <p id="copyright">&copy; Lee Howorko & Eric Watkins, 2015</p>

    </div>
</body>
</html>
