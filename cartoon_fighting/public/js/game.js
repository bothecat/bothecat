setInterval(name, 7000);

function name() {
    var damage = parseFloat($("#p2_damage span").html());
    var opponent_health = parseFloat($("#p2_health span").html());
    var attack = Math.floor(Math.random() * 2) + 1;
    if(attack === 2) {
        opponent_health = (opponent_health - damage) - 50;
        $("#p1_health span").html(opponent_health);
        if($("#p1_health span").html() < 0) {
            $("#p1_health span").html(0);
            $.ajax({
                type: 'POST',
                url: 'http://bothecat/cartoon_fighting/game/winnerSet',
                data: {
                    winner : 'computer'
                },
                success: success
            });
            function success() {
                window.location.replace("http://bothecat/cartoon_fighting/game/gameOver");
            }    
        }
    } else {
        opponent_health = (opponent_health - damage) - 40;
        $("#p1_health span").html(opponent_health);
        if($("#p1_health span").html() < 0) {
            $("#p1_health span").html(0);
            $.ajax({
                type: 'POST',
                url: 'http://bothecat/cartoon_fighting/game/winnerSet',
                data: {
                    winner : 'computer'
                },
                success: function() {
                    window.location.replace("http://bothecat/cartoon_fighting/game/gameOver");
                }  
            });
            
        }
    }
}

function punch() {
    var damage = parseFloat($("#p1_damage span").html());
    var opponent_health = parseFloat($("#p2_health span").html());
    opponent_health = (opponent_health - damage) - 10;
    $("#p2_health span").html(opponent_health);
    if($("#p2_health span").html() < 0) {
        $("#p2_health span").html(0);
        $.ajax({
            type: 'POST',
            url: 'http://bothecat/cartoon_fighting/game/winnerSet',
            data: {
                winner : 'player'
            },
            success: function() {
                window.location.replace("http://bothecat/cartoon_fighting/game/gameOver");
            }  
        }); 
    }
}

function kick() {
    var damage = parseFloat($("#p1_damage span").html());
    var opponent_health = parseFloat($("#p2_health span").html());
    opponent_health = (opponent_health - damage) - 50;
    $("#p2_health span").html(opponent_health);
    if($("#p2_health span").html() < 0) {
        $("#p2_health span").html(0);
        $.ajax({
            type: 'POST',
            url: 'http://bothecat/cartoon_fighting/game/winnerSet',
            data: {
                winner : 'player'
            },
            success: function() {
                window.location.replace("http://bothecat/cartoon_fighting/game/gameOver");
            }  
        });
    }
}