<html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>

    </head>
    <body>
        <div id="app">
            {!! $chart->container() !!}
        </div>
        <div id="app" style="width:50%">
            {!! $line->container() !!}
        </div>
        <div id="app" style="width:50%">
            {!! $bar->container() !!}
        </div>
        <div id="app" style="width:50%">
            {!! $barcandidat->container() !!}
        </div>
        <script src="{{asset('js/vue.js')}}"></script>
        <script>
            var app = new Vue({
                el: '#app',
            });
        </script>
        <script src="{{asset('js/Chart.min.js')}}" charset="utf-8"></script>
        {!! $chart->script() !!}
        {!! $line->script() !!}
        {!! $bar->script() !!}
        {!! $barcandidat->script() !!}

    </body>
</html>
