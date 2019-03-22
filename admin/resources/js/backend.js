$(function(){
  'use strict';
    // dashboard
    $('.latest .toggle-info').click(function(){
        $(this).toggleClass('selected').parent().next().fadeToggle(100);
        
        if($(this).hasClass('selected')){
            $(this).html('<i class="fa fa-plus fa-lg"></i>');
        }
        else{
            $(this).html('<i class="fa fa-minus fa-lg"></i>');
        }
    });
    // login 
    $('.admin-home h1 span').click(function(){
        $(this).addClass('selected').siblings().removeClass('selected');
        $('.admin-home form').hide();
        $( '.' + $(this).data('class')).fadeIn(100);
    });
    // conver password field  to text on hover 
    
    var PassFaild = $('.password');
    $('.show-pass').hover(function(){
        $('.show-pass').css("cursor","pointer");
        PassFaild.attr('type', 'text');
        
    }, function(){
        PassFaild.attr('type', 'password');
    });
//    //  Trigger the selectbox
//    $("select").selectBoxIt({
//        autoWidth: false
//    });
    // confirmation msg
  $('.confirm').click(function(){
        return confirm('Are you sure?');
    });
  // hide place holder
  $('[placeholder]').focus(function(){
    $(this).attr('data-text', $(this).attr('placeholder'));
    $(this).attr('placeholder','');
}).blur(function(){
    $(this).attr('placeholder', $(this).attr('data-text'));
});
  // conver password field  to text on hover 
    
    var PassFaild = $('.password');
    $('.show-pass').hover(function(){
        $('.show-pass').css("cursor","pointer");
        PassFaild.attr('type', 'text');
        
    }, function(){
        PassFaild.attr('type', 'password');
    });
    
    // confirmation msg
    $('.confirm').click(function(){
        return confirm('Are you sure?');
    });
    // add asterisk on required  field 
    $('input').each(function (){
        if($(this).attr('required')==='required'){
            $(this).after('<span class="asterisk">*</span>');
        }
    });
    
    // category show 
    $('.cat h3').click(function(){
        $(this).next('.full-view').fadeToggle(250);
    });
    
    $('.option span').click(function(){
        $(this).addClass("active").siblings('span').removeClass('active');
        
       if($(this).data('view')==='full'){
           $('.cat .full-view').fadeIn(200);
       }
        else {
                $('.cat .full-view').fadeOut(200);
        }
                            
     });
    
    
    
    
    
});