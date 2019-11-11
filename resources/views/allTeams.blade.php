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
                <li v-for="(score, gameNum, homeTeam) in scores">   <!-- Restruct this to work with the javascript to get the a dynamic URL -->
                    <a href="/teamstats/{{$abbr}}">
                        @{{score}}
                        <!--@{{gameNum}} -->
                        @{{homeTeam}}      
                    </a>
                </li>
            </ul>
        </h1>

        <script src="./js/vue.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>

  
