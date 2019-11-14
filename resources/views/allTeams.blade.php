<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>

    <body>
        <div id="main">
            <div class="inner">
                <ul>
                    <section id="test" class="tiles">
                        <li v-for="(score, index) in object.scores">
                            <article class="style1">
                                <span class="image">
                                    <img src="images/pic01.jpg" alt="" />
                                </span>
                                <a v-bind:href="'/teamstats/' + object.homeTeamAbbrs[index]">
                                    @{{score}}
                                </a>
                            </article>
                        </li>
                    </section>
                </ul>
            </div>
        </div>

        <script src="./js/vue.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>

  
