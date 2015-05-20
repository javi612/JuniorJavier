
/* Game namespace */
var game = {

	// an object where to store game information
	data : {
		// score
		score : 0
            
        },
	
	
	// Run on page load.
	"onload" : function () {
	// Initialize the video.
	if (!me.video.init("screen",  me.video.CANVAS, 1067, 600, true, '1.0')) {
		alert("Your browser does not support HTML5 canvas.");
		return;
	}

	// add "#debug" to the URL to enable the debug Panel
	if (document.location.hash === "#debug") {
		window.onReady(function () {
			me.plugin.register.defer(this, debugPanel, "debug");
		});
	}

        me.state.SPENDEXP = 112;
        me.state.LOAD = 113;
        me.state.NEW = 114;
      
	// Initialize the audio.
	me.audio.init("mp3,ogg");

	// Set a callback to run when loading is complete.
	me.loader.onload = this.loaded.bind(this);

	// Load the resources.
	me.loader.preload(game.resources);

	// Initialize melonJS and display a loading screen.
	me.state.change(me.state.LOADING);
},

	// Run on game resources loaded.
	"loaded" : function () {
                
                
                me.state.set(me.state.MENU, new game.mainmenu());
		me.state.set(me.state.PLAY, new game.PlayScreen());
		// Start the game.
		me.state.change(me.state.MENU);
	}
};
