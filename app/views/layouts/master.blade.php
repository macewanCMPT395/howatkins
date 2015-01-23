<!DOCTYPE HTML PUBLIC>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/css/basic.css">
</head>

<body>
    <div class="title">
        <h1>CMPT395</h1>
    </div>    

    <div id="nav">    
        <ul>
            <li><a href="/" id="homenav" >Home</a></li>
	    @yield('listItem')
            <li><a href="/" id="loginnav" >Login</a></li>
            
        </ul>
    </div>
    <br></br>
    @yield('content')
</body>
</html>
