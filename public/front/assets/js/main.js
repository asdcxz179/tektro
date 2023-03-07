$(document).ready(function () {
  AOS.init();

  $('.jarallax').jarallax({
    speed: 0.6,
  });

  $('.btnGroup_top').click(function (e) {
    e.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 300);
  });

/* ---------------------------------------------------------------------- */
/*  sidebar - start
/* ---------------------------------------------------------------------- */
  $('.close_btn, .overlay').on('click', function () {
    $('.sidebar_mobile_menu').removeClass('active');
    $('.overlay').removeClass('active');
  });
  
  $('.mobile_menu_btn').on('click', function () {
    $('.sidebar_mobile_menu').addClass('active');
    $('.overlay').addClass('active');

  });
  
  /* ---------------------------------------------------------------------- */
  /*  3rd level dropdown menu
  /* ---------------------------------------------------------------------- */
  $('.dropdown > a').addClass('dropdown-toggle');
  $('.dropdown-menu .dropdown > a').on('click', function (e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');
    $(this).parents('li.dropdown.show').on('.dropdown', function (e) {
      $('.dropdown-menu > .dropdown .show').removeClass("show");
    });
    $('.dropdown-menu li a.dropdown-toggle').removeClass("show_dropdown");
    if ($(this).next().hasClass('show')) {
      $(this).addClass("show_dropdown");
    }
    return false;
  });
  
  $('.dropdown').on('click', function () {
    $(this).children('.dropdown-menu').toggleClass('show');
  });

// img zoom
// var src = $('.thumb-show').find('img').attr("src");
// $('.thumb-show').append('<img class="zoom" src="'+src+'" >');

// $('.thumb-show').mouseenter(function(){
  
//     $(this).mousemove(function(event){
      
//         var offset = $(this).offset();
//         var left = event.pageX - offset.left;
//         var top = event.pageY - offset.top;
      
//         $(this).find('.zoom').css({
//           width: '400%',
//           opacity: 1,
//           left: -left,
//           top: -top
//         })
//     });
// });

// $('.thumb-show').mouseleave(function(){                     
//    $(this).find('.zoom').css({
//      width: '100%',
//      opacity: 0,
//      left: 0,
//      top: 0
//    })                               
//  });

});



$(window).scroll(function () {
  if ($(this).scrollTop() > 600) {
    $('.btnGroup').fadeIn(300);
  } else {
    $('.btnGroup').stop().fadeOut(300);
  }

/* ---------------------------------------------------------------------- */
/*  sticky header
/* ---------------------------------------------------------------------- */

  if ($(this).scrollTop() > 120) {
    $('.sticky_header').addClass("stuck");
    // $('.brand_link img').attr('src', '/front/assets/images/logo_2.svg');
  } else {
    $('.sticky_header').removeClass("stuck");
    // $('.brand_link img').attr('src', '/front/assets/images/logo_1.svg');
  }

}).scroll();


/* ---------------------------------------------------------------------- */
/*  header menu_item image
/* ---------------------------------------------------------------------- */

// var aboutLinkItem = document.querySelector('.aboutLink .menu_item_has_child');

$(document).ready(function () {

  // header about
  $('.aboutLink .menu_item_has_child').eq(0).hover(function () {
    $('#aboutImage').attr('src', '/front/assets/images/about_company_thumbnail.jpg');
  });
  $('.aboutLink .menu_item_has_child').eq(1).hover(function () {
    $('#aboutImage').attr('src', '/front/assets/images/about_technologies_thumbnail.jpg');
  });
  $('.aboutLink .menu_item_has_child').eq(2).hover(function () {
    $('#aboutImage').attr('src', '/front/assets/images/about_csr_thumbnail.jpg');
  });
  $('.aboutLink .menu_item_has_child').eq(3).hover(function () {
    $('#aboutImage').attr('src', '/front/assets/images/about_innovation_thumbnail.jpg');
  });

  // header support
  $('.supportLink .menu_item_has_child').eq(0).hover(function () {
    $('#supportImage').attr('src', '/front/assets/images/support_downloads_thumbnail.jpg');
  });
  $('.supportLink .menu_item_has_child').eq(1).hover(function () {
    $('#supportImage').attr('src', '/front/assets/images/support_videos_thumbnail.jpg');
  });
  $('.supportLink .menu_item_has_child').eq(2).hover(function () {
    $('#supportImage').attr('src', '/front/assets/images/support_FAQ_thumbnail.jpg');
  });
  $('.supportLink .menu_item_has_child').eq(3).hover(function () {
    $('#supportImage').attr('src', '/front/assets/images/support_warranty_thumbnail.jpg');
  });

  // header connect
  $('.connectLink .menu_item_has_child').eq(0).hover(function () {
    $('#connectImage').attr('src', '/front/assets/images/connect_connect_thumbnail.jpg');
  });
  $('.connectLink .menu_item_has_child').eq(1).hover(function () {
    $('#connectImage').attr('src', '/front/assets/images/connect_partner_thumbnail.jpg');
  });

  // header information
  $('.informationLink .menu_item_has_child').eq(0).hover(function () {
    $('#informationImage').attr('src', '/front/assets/images/information_news_thumbnail.jpg');
  });
  $('.informationLink .menu_item_has_child').eq(1).hover(function () {
    $('#informationImage').attr('src', '/front/assets/images/information_career_thumbnail.jpg');
  });

  // header product
  $('.productLink .menu_item_has_child').eq(0).hover(function () {
    $('#productContent #trpContent').hide();
    $('#productContent #tektroContent').show();
  });
  $('.productLink .menu_item_has_child').eq(1).hover(function () {
    $('#productContent #tektroContent').hide();
    $('#productContent #trpContent').show();
  });


  // header show more btn
  $(".moreBox").slice(0, 3).show();
    if($(".listBox").length < 6){
      $("#loadMore").hide();
    }

    if ($(".listBox:hidden").length != 0) {
      $("#loadMore").show();
    }   
    $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".moreBox:hidden").slice(0, 6).fadeIn();
      if ($(".moreBox:hidden").length == 0) {
        $("#loadMore").fadeOut('slow');
      }
  });

  // accordian
    $(document).mouseup(function(e) {
      
      var _con = $('.accordion-button');
      if (!_con.is(e.target) && _con.has(e.target).length === 0 ) {
          $('.accordion-button[aria-expanded="true"]').addClass('collapsed');
          $('.accordion-collapse.collapse').removeClass('show');
      }
  });
  
})

/* ---------------------------------------------------------------------- */
/*  Cookie Section
/* ---------------------------------------------------------------------- */

$(document).ready(function () {
  cookiesPolicyBar();
  $('#cookie-disagree').click(function(){
    $('#cookieAcceptBar').fadeOut();
});

  $('#cookie-selection-trigger').click(function(){
    $('#cookie-selection').slideToggle();
    if($(this).text() !== '回上一頁'){
      $(this).text('回上一頁');
      $('#cookie-agree').hide();
      $('#cookie-agree-selected').show();
    }else{
      $(this).text('設定 cookie');
      $('#cookie-agree-selected').hide();
      $('#cookie-agree').show();
    }
    
  })
});

function cookiesPolicyBar() {
  if ($.cookie('tektro') != "active"){ $('#cookieAcceptBar').show(); }else{$('#cookieAcceptBar').hide();}
    $('#cookie-agree, #cookie-agree-selected').on('click', function () {
        $.cookie('tektro', 'active', { expires: 7 }); // cookie will expire in 7 day
        $('#cookieAcceptBar').fadeOut();
  });
}

