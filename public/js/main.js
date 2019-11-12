let homeTeam = "";
let homeScore = "";
let awayTeam = "";
let awayScore = "";
let test;
//let gameNum = 0;
const url = "http://www.nfl.com/liveupdate/game-center/2019102100/2019102100_gtd.json"

const app = new Vue({
    el: '#test',
    data: {
        object: {
            scores: [],
            homeTeamAbbrs: []
        }
    },
    created () {
        fetch("http://www.nfl.com/liveupdate/scores/scores.json")
        .then((resp) => resp.json()
        .then((data) => {
            for(var i = 0;i<Object.keys(data).length;i++)
            {
                let chosenGame = data[Object.keys(data)[i]];
                
               // gameNum = 5;
                homeTeam = chosenGame.home.abbr;
                homeScore = chosenGame.home.score.T;
                awayTeam = chosenGame.away.abbr;
                awayScore = chosenGame.away.score.T;

                if(homeScore === null) {
                    homeScore = 0;
                }
                if(awayScore === null) {
                    awayScore = 0;
                }

                this.object.homeTeamAbbrs.push(homeTeam);
    
                this.object.scores.push(awayTeam + ":" + awayScore + " vs " + homeTeam + ":" + homeScore);
            }
        }))
    }
})

