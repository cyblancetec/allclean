
function removeFile(id){
    jQuery('#attachFileName_'+id).hide().html('');
    jQuery('#supportedFileName_'+id).show();
    jQuery('#supportedFile_'+id).val('');
}
jQuery(function() {
    jQuery(".hovereffect").on("touchstart", function (e) {
        jQuery(this).addClass('hover');
    });
    
    jQuery('#supportedFile_1').change(function(e){
      var fileName = e.target.files[0].name;
        jQuery('#supportedFileName_1').hide();
      jQuery('#attachFileName_1').show().html(fileName+'<i onclick="removeFile(1)" class="fa fa-close "></i>');
    }); 

    jQuery('#supportedFile_2').change(function(e){
      var fileName = e.target.files[0].name;
        jQuery('#supportedFileName_2').hide();
      jQuery('#attachFileName_2').show().html(fileName+'<i onclick="removeFile(2)" class="fa fa-close "></i>');
    });

    jQuery('#supportedFile_3').change(function(e){
      var fileName = e.target.files[0].name;
        jQuery('#supportedFileName_3').hide();
      jQuery('#attachFileName_3').show().html(fileName+'<i onclick="removeFile(3)" class="fa fa-close "></i>');
    });
    /*var animateButton = function(e) {

      e.preventDefault;
      //reset animation
      e.target.classList.remove('animate');

      e.target.classList.add('animate');

      e.target.classList.add('animate');
      setTimeout(function(){
        e.target.classList.remove('animate');
      },3000);
    };

    var classname = document.getElementsByClassName("vc_btn3-style-outline");

    for (var i = 0; i < classname.length; i++) {
      classname[i].addEventListener('click', animateButton, false);
    }*/
  }); 

jQuery(function(cash) {    
  jQuery('body').find('img:not([alt])').attr('alt', '');
  jQuery('body').find('a:empty').append('<span class="screen-reader-text">reader</span>');
});
jQuery(window).load(function(cash) {
  jQuery('body').find('img:not([alt])').attr('alt', '');
});
jQuery(window).scroll(function() {
    if (jQuery(window).width() <= 992) {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#header').addClass("f-nav");
            jQuery('#header').addClass("f-nav");
        } else {
            jQuery('#header').removeClass("f-nav");
        }
    } else {
        if (jQuery(this).scrollTop() > 112) {
            jQuery('#header').addClass("f-nav");
        } else {
            jQuery('#header').removeClass("f-nav");
        }
    }
});
jQuery(document).ready(function(cash) {
    var c, currentScrollTop = 0,
    navbar = jQuery('#header');

    jQuery(window).scroll(function () {
      var a = jQuery(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;

      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
    });
    var locationLink = window.location.hash.substring(1);
    if(locationLink!=''){
        var HeaderHi = jQuery('#topbar').innerHeight();
        jQuery('html, body').animate({
        scrollTop: jQuery('#'+locationLink).offset().top - HeaderHi }, 'slow');
        setTimeout(function(){
            var HeaderHi = jQuery('#header').innerHeight();
            jQuery('body, html').animate({
             scrollTop: jQuery('#'+locationLink).offset().top - HeaderHi }, 'slow');
            jQuery('#header').removeClass("scrollUp");
        }, 500);
    }
    
    jQuery('body').find('img:not([alt])').attr('alt', '');

    var HeaderHi = jQuery('#topbar').innerHeight();
    jQuery('body').css('margin-top', HeaderHi + 'px')
    
    jQuery(".Mobile_nav").click(function() {
        if (jQuery("#mobile-menu").is(":hidden")) {
            jQuery("#mobile-menu").slideDown();           
            jQuery('.Mobile_nav').addClass('close_menu');
            jQuery('body').addClass('overlay');
            
        } else {  
            jQuery('#mobile-menu').slideUp();           
            jQuery('.Mobile_nav').removeClass('close_menu');
            jQuery('body').removeClass('overlay');
        }
    });
  
});
 /*============================================
        07: Preloader
==============================================*/
jQuery(window).on('load', function(){

    function removePreloader() {
        var preLoader = jQuery('.preLoader');
        preLoader.fadeOut();
    }
    setTimeout(removePreloader, 250);
});

function download_popup(){
    jQuery('#dow_button').bPopup({
        //position: ['auto', 50],
        //position: ['auto', 'auto'],
        modalColor: '#ef8fba',
        opacity:'0.9'
    });
  jQuery(window).trigger('resize');
  setTimeout(function(){
    jQuery(window).trigger('resize');
  },500)
}

jQuery(window).load(function(cash) {
    
    
    if (jQuery(window).width() <= 767) {
        jQuery('.sidebar-left h3').click(function() {
          jQuery(this).toggleClass("active");
          jQuery(".sidebar-left ul").slideToggle();
        });
        jQuery('#value-slider, #meetteam-slider, #job-slider').owlCarousel({
            loop:false,
            margin:0,
            nav:false,
            items:1,
            autoWidth:true,
            loop:true
        });
      
    } 
    else {  
       jQuery('.grid').isotope({
          itemSelector: '.grid-item',
          masonry: {
            //columnWidth:
          }
        });
    }
    
    jQuery('#services-slider').css('padding','0');
    jQuery('#services-slider').owlCarousel({
        stagePadding: 0,
        left: true,
        loop:true,
        margin:0,
        nav:false,
        responsive:{
            0:{
                items:1,               
                autoWidth:true
            },
            767:{
                items:3            
            },
            992:{
                items:3,
                autoWidth:false
            },
            1200:{
                items:4,
                autoWidth:false
            },
            1400:{
                items:5,
                autoWidth:false
            }
        }
    });
  var x = jQuery(".container").offset();
jQuery('#services-slider').css('margin-left', x.left+'px')
  //var transform = 'matrix(1, 0, 0, 1, '+x.left+', 0'
  //jQuery('#services-slider .owl-stage').css('transform', transform)

  /*jQuery('#services-slider').on('changed.owl.carousel', function(event) {
    var Ostage = jQuery('#services-slider .owl-stage').css('transform');
    if(Ostage >= transform){
      //console.log('in');
      //jQuery('#services-slider .owl-stage').css('transform', transform);
    } else {
      console.log('out');
      jQuery('#services-slider .owl-stage').css('transform', transform);
    }
  });*/
});

 jQuery(window).resize(function() {
        var HeaderHi = jQuery('#topbar').innerHeight();
        jQuery('body').css('margin-top', HeaderHi + 'px');
        jQuery('body').removeClass('overlay');
        jQuery('#Mobile_nav').removeClass('close_menu');
        jQuery('#mobile-menu').hide();
    });
function navScroll(navId){
    var HeaderHi = jQuery('#header').innerHeight();
    jQuery('html, body').animate({
    scrollTop: jQuery(navId).offset().top - HeaderHi }, 'slow');
    setTimeout(function(){ 
       var HeaderHi = jQuery('#header').innerHeight();
        jQuery('html, body').animate({
        scrollTop: jQuery(navId).offset().top - HeaderHi }, 'slow');
    }, 200);
}
