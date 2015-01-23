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
            @yield('listItem')
        </ul>
    </div>
    <br></br>
    @yield('content')
</body>
</html>
