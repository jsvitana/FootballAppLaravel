<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/materialize.min.css">
    </head>

    <body>
        <h1 id="test">
            <ul>
                <li v-for="(score, index) in object.scores">
                    <a v-bind:href="'/teamstats/' + object.homeTeamAbbrs[index]">
                        @{{score}}
                    </a>
                </li>
            </ul>
        </h1>

        <script src="./js/vue.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>

  
