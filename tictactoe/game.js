var Game = {};

Game.Launch = function() {
    Game.version = 1;
    Game.mobile = 0;
    Game.touchEvents=0;
	if (Game.mobile) Game.touchEvents=1;

    Game.ready = 0;

    Game.Init = function() {
        Game.ready = 1;
        Game.windowW=window.innerWidth;
		Game.windowH=window.innerHeight;

		window.addEventListener('resize',function(event)
		{
			Game.windowW=window.innerWidth;
			Game.windowH=window.innerHeight;
		});
        window.onbeforeunload=function(event)
        {
            if (typeof event=='undefined') event=window.event;
            if (event) event.returnValue='Are you sure you want to close TicTacToe?';
        }

        Game.Reset = function(hard) {
            if (!hard) {
                for 
            }
        }

    }
}
Game.Launch();

window.onload = function() {
    if (!Game.ready) {
        Game.Init();
    }
};
