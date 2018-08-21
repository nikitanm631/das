$(function(){

  $('.sidelist a[href^="' + document.location.href.match(/[^\/]+$/)[0] + '"]').find('li').addClass('active');
  var url = document.location.href.match(/[^\/]+$/)[0];
  console.log(url);

})
