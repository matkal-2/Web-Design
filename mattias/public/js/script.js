document.addEventListener("DOMContentLoaded", function() {
 
    var pop = Popcorn('#demo_video', {
        pauseOnLinkClicked: true
    });
 
    pop.play();
    pop.tagthisperson({
	    start: 1,
	    target: 'tags',
	    person: 'Dan Harper',
	    image: 'img/danharper.jpg',
	    href: 'http://danharper.me'
	});
	pop.image({
	    start: 2,
	    end: 10,
	    target: 'side',
	    href: 'http://net.tutsplus.com',
	    src: 'img/nettuts.jpg'
	});

	pop.googlefeed({
	    start: 4,
	    end: 10,
	    target: 'side',
	    url: 'http://net.tutsplus.com/feed/'
	});
	pop.facebook({
	    start: 8,
	    end: 10,
	    target: 'side',
	    href: 'http://net.tutsplus.com'
	});
	pop.googlemap({
	    start: 10,
	    end: 12,
	    target: 'side',
	    type: 'ROADMAP',
	    location: 'England',
	    zoom: 6
	});
 
});