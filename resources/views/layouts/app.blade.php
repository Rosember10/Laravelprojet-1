<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> {{config('app.name')}}  @yield('title')</title>   
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body id="page-top" class=" d-flex flex-column min-vh-100" >
    @yield('content')

    <footer class="bg-dark py-4 mt-auto footer">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white"> Collège de Maisonneuve &copy; Tous droits réservés 2023</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
</body>
<script src="{{asset('js/bootstrap.min.js')}}" ></script>
</html>