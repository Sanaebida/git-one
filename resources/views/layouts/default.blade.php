<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet attempt 1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-white">
        <Header class="fixed bg-gray-800 top-0 left-0 right-0 z=0" >
            <div class="container mx-auto flex justify-between p-4">
                <h1 class="text-2xl font-black">SimpleSyndic</h1>
                <nav class="-mx-2"> 
                 <a href="{{route('home')}}" class="text-3lg mx-5 text font-black black hover:text-indigo-200 transition">Acceuil</a>
                 <a href="{{route('login')}}" class="text-2lg mx-5 text font-black white hover:text-indigo-400 transition">Login</a>
                 <a href="{{route('gestion')}}" class="text-2lg mx-5 text font-black white hover:text-indigo-700 transition">Gestion</a>
                </nav>
            </div>
        </Header>
        <main>
@yield('page-content')
        </main>
    <footer>
        <!--<div>
            <p>&copy; sanaa bida/first try </p>
        </div>//
    </footer>-->

</body>
</html>