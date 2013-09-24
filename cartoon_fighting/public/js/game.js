//setInterval(name, 7000);

function name() {
    var damage = $("#p2_damage span").html();
    var attack = Math.floor(Math.random() * 2) + 1;
    var power = $("#p2_power span").html();
    var opponent_health = $("#p1_health span").html();
    if(attack == 2) {
        opponent_health = (opponent_health - damage);
        $("#p1_health span").html(opponent_health);
    } else {
        opponent_health = (opponent_health - damage);
        $("#p1_health span").html(opponent_health);
    }
    //alert(damage);
}

function punch() {
    var damage = $("#p1_damage span").html();
    var power = $("#p1_power span").html();
    var opponent_health = $("#p2_health span").html();
    
    opponent_health = (opponent_health - damage);
    $("#p2_health span").html(opponent_health);
}

function kick() {
    var damage = $("#p1_damage span").html();
    var power = $("#p1_power span").html();
    var opponent_health = $("#p2_health span").html();
    
    opponent_health = (opponent_health - damage);
    $("#p2_health span").html(opponent_health);
}