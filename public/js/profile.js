particlesJS('particles-js', {
	particles: {
		color:'#000',
		shape: 'circle', // "circle", "edge" or "triangle"
		opacity: 2,
		size: 5,
		size_random: true,
		nb: 50,
		line_linked: {
			enable_auto: true,
			distance: 200,
			color: '#000',
			opacity: 1,
			width: 1,
			condensed_mode: {
				enable: false,
				rotateX: 600,
				rotateY: 600
			}
		},
		anim: {
			enable: true,
			speed: 3
		}
	},
	interactivity: {
		enable: true,
		mouse: {
			distance: 250
		},
		detect_on: 'canvas', // "canvas" or "window"
		mode: 'grab',
		line_linked: {
			opacity: .5
		},
		events: {
			onclick: {
				enable: true,
				mode: 'push', // "push" or "remove" (particles)
				nb: 2
			}
		} 
	},
	/* Retina Display Support */
	retina_detect: true
});

var setSpans = function(letters, className){
	var s,
	spanizeLetters = {
		settings: {
			letters: letters
		},

		init: function() {
			s = this.settings;
			this.bindEvents();
		},

		bindEvents: function(){
			
			s.letters.html(function (i, el) {
				
				var spanizer = $.trim(el).split("");

				return '<span class="' + className + '">' + spanizer.join('</span><span class="'+ className + '">') + '</span>';
			});
		},
	};
	spanizeLetters.init();
};

var setAnimationDelay = function(letters, speed){
	var animationDelay = speed;

	for(var i = 0; i < letters.length; i++ ){
		letters[i].setAttribute("style", "animation-delay: " + animationDelay + "s");
		animationDelay += speed;
	}

}

setSpans($('.text-span'), 'letter');
setSpans($('.title-span'), 'title-letter');
setAnimationDelay(document.getElementsByClassName('letter'), .02);
setAnimationDelay(document.getElementsByClassName('title-letter'), .075);
