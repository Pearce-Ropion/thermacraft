window.onload = function() {
    var Game = {};
    Game.Init = function() {
        Game.ready = 0;
        Game.player1wins = 0;
        Game.player2wins = 0;
        Game.running = 0;
        Game.turn = 0;
        var boxes = [];
        for (x = 0; x < 9; x++) {
            boxes[x] = new box;
        }
        Game.Reset = function() {
            Game.running = 0;
            Game.turn = 0;

            for (x = 0; x < 9; x++) {
                box = 'box'+(x+1);
                alert(box);
                if (document.getElementById('gamewindow') != null) {
                    document.getElementById(box).innerHTML = "+";
                    document.getElementById(box).style.color = "white";
                }
            }
        }
    }
    var boxstate = {
        OPEN: 0,
        CLOSED: 1,
    };
    var boxchoice = {
        OPEN: 0,
        X: 1,
        O: 2,
    };
    var box = {
        state: boxstate.OPEN,
        player: boxchoice.OPEN,
    };
    if (document.getElementById('gamewindow') != null) {
        Game.Init();
        document.getElementById('resetbtn').addEventListener('click', function() {
            Game.reset();
        });
    }

    // if (document.getElementById('gamewindow') != null) {
    //     for (x = 0; x < 9; x++) {
    //         var box = document.getElementById('box'+(x+1));
    //         (function (box) {
    //             box.addEventListener('click', function() {
    //                 if (turn >= 9 || boxState[x] == 1) {
    //                     return;
    //                 } else {
    //                     if (turn % 2 == 0) {
    //                         this.innerHTML = "X";
    //                         this.style.color = "green";
    //                     } else {
    //                         this.innerHTML = "O";
    //                         this.style.color = "red";
    //                     }
    //                     turn++;
    //                     boxState[x] = 1;
    //                 }
    //             });
    //         })(box);
    //     }
    // }
}
