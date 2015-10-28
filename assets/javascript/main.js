/* Get all div elements. */
var tr = document.querySelectorAll('.row');

/* Animate all divs at once. */
Velocity(tr, 'transition.slideUpIn', {stagger: 100, duration: 200});

var card = document.querySelectorAll('.card-view__card');

/* Animate all divs at once. */
Velocity(card, 'transition.slideUpIn',{stagger: 100, duration: 200, display: "inline-block"})


var showText = function (target, message, index, interval) {   
  if (index < message.length) {
    $(target).append(message[index++]);
    setTimeout(function () { showText(target, message, index, interval); }, interval);
  }
}