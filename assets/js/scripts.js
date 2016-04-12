// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

function faq_add(par) {
  parent1 = '#faq_add';
  parent2 = '#faq_add #addtop';

  if (par == 'show') {
    $(parent2).find('button').animate({
      'opacity': '0.5'
    }, function() {});
    $(parent1).find('#form').slideDown('500');
    $(parent1).find('#pip').show();

    $(parent1).addClass('act');
  } else if (par == 'hide') {
    $(parent2).find('button').animate({
      'opacity': '1'
    }, function() {});
    $(parent1).find('#form').hide();
    $(parent1).find('#pip').hide();

    $(parent1).removeClass('act');
  }
}

$('#faq_add #addtop button').on('click', function() {
  parent1 = $(this).parent().parent();
  parent2 = $(this).parent();
  if (parent1.attr('class') != 'act') {
    faq_add('show');
  }
});
$('#faq_add #addtop #pip').on('click', function() {
  parent1 = $(this).parent().parent();
  parent2 = $(this).parent();

  faq_add('hide');
});

clas = $('#faq_add').attr('class');
//alert(clas);
if (clas == 'act') {
  faq_add('show');
} else {
  faq_add('hide');
}
