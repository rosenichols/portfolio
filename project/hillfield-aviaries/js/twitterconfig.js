getTwitters('twitters', {
	        id: 'RoseNichols', 
	        count: 3, 
	        withFriends: false,
	        enableLinks: true, 
	        ignoreReplies: true,
	        template: "<p><span id='tweet'> %text% <br /><span class='time'><a href='http://twitter.com/%user_screen_name%/statuses/%id%' class='twittertime'>%time%</a></span></p>"
	    });