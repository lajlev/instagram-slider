$(document).ready(function() {

  $('#fullpage').fullpage({
    navigation: true,
    navigationPosition: 'right',
    paddingTop: '50px',
    css3: false,
    continuousVertical: true
  });

  // Scroll to next section every 5 sec
  window.setInterval(function(){
    $.fn.fullpage.moveSectionDown();
  }, 7000);

  // reload page after 20 * 7 sec
  window.setInterval(function(){
    location.reload();
  }, 140000);
});