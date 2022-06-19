console.log('i am ranjan mondal');
$('.chat_icon').click(function(event) {
   $('.chatbot_box').removeClass('d-none');
    $('.chat_icon').addClass('d-none');
    
    });
$(document).ready(function() {

    questionFirst=$('[data-question]:first').attr('data-question');
    $('#chatlist ul').append('<li class="admin_message">'+questionFirst+'</li>');
    $('[data-question]:first').appendTo('.admin_message');



    $('#send').click(function(event) {
        questionval=$('.message-box [data-question]').val();
        $('#chatlist ul').append('<li class="client_message">'+questionval+'</li>');
        $('[data-question]:first').appendTo('.message-box');
       $('.message-box').appendTo('.submit_info'); 

       if($('.admin-client-message-wrap').children().length !=0){
       questionFirst=$('[data-question]:first').attr('data-question');
       $('#chatlist ul').append('<li class="admin_message">'+questionFirst+'</li>');
       $('[data-question]:first').appendTo('.message-box');
    //    $('.message-box').innerHTML ='ranjan';




    
       }







    });











});



    // questionFirst=$('[data-question]:first').attr('data-question');
    // $('#chatlist ul').append('<li class="admin_message">'+questionFirst+'</li>');
    // $('[data-question]:first').appendTo('.message-box');