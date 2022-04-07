    {{-- <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Css/Menu.css') }}" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
 --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layouts</title>
    <!--  CSS Style -->
    <link rel="stylesheet" href="{{ asset('Css/Menu.css') }}">

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="app">

        <header class="header" id="header">
            <nav class="nav" id="nav">
                header
            </nav>
        </header>
        
        <main class="main px-3">
            <div class="icon-menu" id="icon-menu" >
                <button>X</button>
            </div>

            
            <section class="contenido">
                @yield('contenido')
                
            </section>

            <footer class="footer">
                Footer
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda similique voluptas laudantium fugit ut explicabo officiis. Temporibus, autem, commodi asperiores natus, saepe dignissimos dolorum nihil sit accusantium repellendus odio. Praesentium?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio minus dolorem saepe ipsum hic itaque molestias quasi, laboriosam autem, at temporibus similique fuga dolore perferendis deleniti molestiae eius nam officia!
                Facere sequi nesciunt illum in. Mollitia, ipsum ab incidunt cum deserunt omnis nulla, dolorem soluta ut quasi at eius. Alias, non fugiat mollitia quos minima cum earum id. Repellendus, reprehenderit!
                Impedit, ea aliquid ipsum accusamus ipsam soluta praesentium consequatur enim mollitia ipsa adipisci rem nulla ullam dolor voluptates quia, obcaecati suscipit voluptatem quod. Vero nam eveniet exercitationem nulla enim consequatur.
                Iusto maiores at ut doloremque repellendus ullam porro ipsa sint dolore quod odio quidem quo sit natus laboriosam, vitae cum beatae vel odit molestiae? Numquam, eos? Pariatur adipisci deserunt fuga.
                Voluptatibus, nam inventore corrupti sint consequuntur fugit, ipsum veritatis adipisci rem officiis omnis nobis minima minus consequatur nostrum rerum. Praesentium sint, totam id ratione aliquam quo recusandae neque repellendus officia.
            </footer>
        </main>
    </div>
         <!-- JS -->
        <script src="{{asset('Js/Menu.js') }}"></script> 
</body>
</html>