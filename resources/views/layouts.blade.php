<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link 
   rel="stylesheet"
   href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
   integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
>
  <title>人生逆転サロン</title>
</head>
<body>
  <header class="navbar navbar-dark bg-danger">
      <div class="container">
         <a class="navbar-brand" href="{{url('')}}">
             Gyakuten
         </a>
      </div>  
  </header>
  
  @yield('content')
  
</body>
</html>