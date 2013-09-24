function select(id) {
    var id = id;
    $.ajax({
        type: 'POST',
        url: 'http://bothecat/cartoon_fighting/fighter/getInform',
        dataType: 'JSON',
        data: {
            fighter : true,
            id : id
        },
        success: function(data) {
            //fighterChange(data);
            $(".lfighter_name").html(data.name);
            $(".lsfighter").html("<img src='http://bothecat/cartoon_fighting/public/images/" + data.image + "'>")
            $("#p1_power span").html(data.power);
            $("#p1_health span").html(data.health);
            $("#p1_damage span").html(data.damage);
            $("#p1_id").html(data.id);
        }
    });
    
    function fighterChange(data) {
        $('.lsfighter img src').append(data.image);
        $('.lsfighter').append(data.name);
    }
}

function startGame() {
    var p1_id = $("#p1_id").html();
    var p2_id = $("#p2_id").html();
    if(p1_id != '' && p2_id != '') {
        $("#game_start_btn").hide();
        $("#exit_btn").hide();
        $("#game_start_preloader").show();
        $("#game_begins_block").show();
        $.post(
            'http://bothecat/cartoon_fighting/fighter/setFighters',
            {
                set_fighters : true,
                p1_id : p1_id,
                p2_id : p2_id
            },
            success,
            'json'
        );
        function success(data) {
            if(data.error != 0) alert('Error');
            else window.location.replace("http://bothecat/cartoon_fighting/game/start");
        }
    } else {
        alert('Select a fighter to start');
    }    
}

function selectToOpponent() {
    var p1_id = $("#p1_id").html();
    if(p1_id != '') {
        $.get(
            'http://bothecat/cartoon_fighting/fighter/selectToOpponent',
            function(data) {
                $(".rfighter_name").html(data.name);
                $(".rsfighter").html("<img src='http://bothecat/cartoon_fighting/public/images/" + data.image + "'>")
                $("#p2_power span").html(data.power);
                $("#p2_health span").html(data.health);
                $("#p2_damage span").html(data.damage);
                $("#p2_id").html(data.id);
                startGame();
            },
            'json'
        );
    } else {
        alert('You did not select fighter');
    }       
}