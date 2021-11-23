<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ $pageTitle }}</title>
</head>
<body>
   <nav>
      <ul>
         <li><a href="/lesson4/public">Home</a></li>
         <li><a href="/lesson4/public/posts">Posts</a></li>
         <li><a href="/lesson4/public/create">Create posts</a></li>
      </ul>
   </nav>
   @yield('content')

</body>
</html>