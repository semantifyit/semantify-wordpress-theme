$(document).ready(function() {
    $('code').each(function(i, block) {
        hljs.highlightBlock(block);
    });

});

function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

(function($){
  $(function(){

    $('.button-collapse').sideNav({
        menuWidth: 200, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: false // Choose whether you can drag to open on touch screens,
         });

      $(".semantify.is-front nav .menu ul li a").click(function(e) {
          var val = $(this).data("id");
          if(val!=undefined){
              e.preventDefault();
              var id = "#"+$(this).data("id");
              //location.href = window.location.protocol+"//"+window.location.hostname+"/"+window.location.pathname+"/"+id;

              $('html, body').animate({
                  scrollTop: $(id).offset().top
              }, 700);
              window.location.hash="#"+$(this).data("id");
          }

      });

      var settings = {
          wp:false,
          colClass: "col-lg-4 col-md-6 col-sm-6 col-xs-12"
      };

      IA_Init(settings);


      var settings = {
          colClass: "col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 col-xs-12",
          wp: false
      };

      IV_Init(settings);


      $("#instant-button-1").click(function(){
          $("#IAblock").toggleClass("hidden");
          $("#IVblock").addClass("hidden");
      });

      $("#instant-button-2").click(function(){
          $("#IAblock").addClass("hidden");
          $("#IVblock").toggleClass("hidden");
      });

      //load annotations
      var jqxhr = $.ajax( "https://semantify.it/api/annotation/count/total/" )
          .done(function( data ) {
              $("#annotations_count").html(numberWithSpaces(data));
          })
          .fail(function() {
              $("#annotations_count").html(numberWithSpaces(1578293));
          });



      if (isLoggedIn()) {
          //logged in
          $('#button-login-text').text("Hi " +currentUserName() + "");
      }



      if($('#brokertest').length > 0 ) {
          $('#brokertest').load('/brokertest/brokertest.html', function () {

              var BrokerTest = new $.BrokerTest();
              BrokerTest.load();
          });
      }



      //master slider
	/*
      var slider = new MasterSlider();
	slider.setup('masterslider', {
        fullwidth:true,
        heightLimit: true,
        // slider standard width
        height: 700,
        width:1200,
        // slider standard height
        space: 5,
        swipe: false,
        //auto play
        autoplay: false,
        duration:300,

        loop: true
	});
	slider.control('arrows',{autohide:false});
	slider.control('bullets',{autohide:false});
*/




  }); // end of document ready
})(jQuery); // end of jQuery name space

 
jQuery(document).ready(function() {
 
var offset = 250;
 
var duration = 300;
 
jQuery(window).scroll(function() {
 
if (jQuery(this).scrollTop() > offset) {
 
jQuery('.back-to-top').fadeIn(duration);
 
} else {
 
jQuery('.back-to-top').fadeOut(duration);
 
}
 
});
 
 
 
jQuery('.back-to-top').click(function(event) {
 
event.preventDefault();
 
jQuery('html, body').animate({scrollTop: 0}, duration);
 
return false;
 
})
 
});
 
