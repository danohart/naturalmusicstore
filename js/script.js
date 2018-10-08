// function leaveFromTop(visitor) {
// 	if( visitor.clientY < 0 )
// 		if ($.cookie('shown-pop') != '1') {
// 			$.magnificPopup.open({ items: { src: '.popup' }, type: 'inline', mainClass: 'mfp-fade' });		
// 			$.cookie('shown-pop', '1', { expires: 1 });
// 	}
// }
// $(document).on('mouseleave', leaveFromTop);

// Countdown from 24 hours
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  return {
    'total': t,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    hoursSpan.innerHTML = t.hours;
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 24 * 60 * 60 * 1000);
initializeClock('clock', deadline);