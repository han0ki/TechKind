
       $(".button-collapse").sideNav();

 document.addEventListener('DOMContentLoaded', function() { 
var elems = document.querySelectorAll('.slider'); 
var instances = M.Slider.init(elems, {'height' : 400, 'indicators' : false}); 
});
$(document).ready(function(){
        $(".carousel1").carousel({
            dist: 0,
            padding: 40,
            indicators: true,
            numVisible: 5    
        }); 
    });

  $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
  
   $(document).ready(function(){
    $('.modal').modal();
  });
      
  new WOW().init();

$(window).on('load', function () {
 var $preloader = $('#page-preloader'),
 $spinner = $preloader.find('.spinner');
 $spinner.fadeOut();
 $preloader.delay(1000).fadeOut('slow');
});