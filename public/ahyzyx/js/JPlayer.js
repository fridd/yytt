var JplayerVideo = function() {
	"use strict";
		
	var runJplayerVideo = function() {
		$(".jp-jplayer").each(function() {
			$(this).jPlayer({
				ready: function () {
					$(this).jPlayer("setMedia", {
						m4v: $(this).attr('data-url'),
						poster: $(this).attr('data-pic-url')
					});
				},
				swfPath: "js",	
				supplied: "webmv, ogv, m4v",
				size: {
					width: "640px",
					height: "360px",
					cssClass: "jp-video-360p"
				},
				smoothPlayBar: true,
				keyEnabled: true,
				remainingDuration: true,
				toggleDuration: true,
				keyBindings: {
					stop: {
						key: 48, 
						fn: function(f) {
		  				f.stop();
						}
					},
					
					play: {
						key: 49, // 开始/暂停播放 ：数字键1
						fn: function(f) {
							if(f.status.paused) {
								f.play();
							} else {
		        				f.pause();
		      					}
		    				}
		  			},
		  			
		  			rewind: {
						key: 50, // 快退 ：数字键2
						fn: function(f) {
							if (f.status.currentTime > 5) {
								f.playHead(f.status.currentTime - 5);
							} else {
								f.playHead(0);
							}
						}
					},

					forward: {
						key: 51, // 快进 ：数字键3
						fn: function(f) {
							f.playHead(f.status.currentTime + 5);
						}
					},
		  			
					fullScreen: {
						key: 93, // enter
						fn: function(f) {
							if(f.status.video || f.options.audioFullScreen) {
								f._setOption("fullScreen", !f.options.fullScreen);
							}
						}
					},
					
					
					muted: {
						key: 8, // backspace
						fn: function(f) {
							f._muted(!f.options.muted);
						}
					},
					
					volumeUp: {
						key: 55, // 音量增加 ：数字键7
						fn: function(f) {
							f.volume(f.options.volume + 0.1);
						}
					},
					
					volumeDown: {
						key: 54, // 音量减小 ：数字键6
						fn: function(f) {
							f.volume(f.options.volume - 0.1);
						}
					}

				}
			});
		});
	};

	return {
		//main function to initiate template pages
		init : function() {
			runJplayerVideo();
		}
	};
}();
