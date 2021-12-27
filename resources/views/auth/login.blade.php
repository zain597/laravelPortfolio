
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="{{asset('assets/login/style.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Portfolio</p>
    <form method="POST" action="{{ route('login') }}" class="form1">
        @csrf
      <input class="un" name="email" id="email" type="email" align="center" placeholder="Email" required autofocus>
      <input class="pass" type="password" name="password" align="center" placeholder="Password" required>
      <a type="submit" class="submit" align="center">Sign in</a>
            
                
    </div>
     
</body>

</html>