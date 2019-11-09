<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/materialize.min.css">
    </head>

    <body>
        <?php 
            $abbr = 'PIT';
        ?>
        <h1 id="test">
            <ul>
                <li v-for="(score, gameNum, homeTeam) in scores">
                    <a href="{{url("/teamstats")}}">
                        @{{score}}
                        @{{gameNum}}       
                    </a>
                </li>
            </ul>
        </h1>

        <script src="./js/vue.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>

  
