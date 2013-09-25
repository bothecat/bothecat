$(function() {
   
    $('.loading').show().append('<p>Loading....</p>');
   
    $.get(
        'http://bothecat/guestbook/?page=getData',
        function(data) {
            $('.loading').hide()
            for(var i = 0; i < data.length; i++) {
                $('.content').append(
                        "<div class='message'><p><strong>" + data[i].name + "</strong> <span>" + data[i].date +"</span>\n\
                        </p><p>" + data[i].message + "</p></div>"
                );
            }
        },
        'json'
    );
        
    $('#message_submit_btn').click(function() {
        var name = $('#user_name').val();
        var message = $('#message_text_form').val();
        if(name === '' || message === '') {
            alert('Error!');
        } else {
            $.post(
                'http://bothecat/guestbook/?page=insert',
                {
                    name : name,
                    message : message
                },
                function(data) {
                    $('.content').prepend(
                        "<div class='message'><p><strong>" + data.name + "</strong> <span>" + data.date +"</span>\n\
                        </p><p>" + data.message + "</p></div>"
                );
                },
                'json'
            );
            $('#user_name').val('');
            $('#message_text_form').val('');
        }
    });
    
});