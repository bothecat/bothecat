<div class="container">
    <div class="left game">
        
        <div class="players_bar">
            <div class="selected_fighter">
                <div class="player_1">
                    <div class="lsfighter">
                        <img src="<?php echo IMAGE . '/' . self::$fighters['player_1']['image'];?>">
                    </div>
                    <div class="info">
                        <h3 class="features_health" id="p1_health">Health: <span><?php echo self::$fighters['player_1']['health'];?></span>/<?php echo self::$fighters['player_1']['health'];?></h3>
                        <p class="features" id="p1_power">Power: <span><?php echo self::$fighters['player_1']['power'];?></span></p>
                        <p class="features" id="p1_health">Health: <span><?php echo self::$fighters['player_1']['health'];?></span></p>
                        <p class="features" id="p1_damage">Damage: <span><?php echo self::$fighters['player_1']['damage'];?></span></p>
                    </div>
                </div>
                <div class="selected_fighter_menu">
                    <a href="<?php echo APP . '/game/exitGame';?>">Exit</a>
                </div>
                <div class="player_2">
                    <div class="rsfighter">
                        <img src="<?php echo IMAGE . '/' . self::$fighters['player_2']['image'];?>">
                    </div>
                    <div class="info">
                        <h3 class="features_health" id="p2_health">Health: <span><?php echo self::$fighters['player_2']['health'];?></span>/<?php echo self::$fighters['player_2']['health'];?></h3>
                        <p class="features" id="p2_power">Power: <span><?php echo self::$fighters['player_2']['power'];?></span></p>
                        <p class="features" id="p2_health">Health: <span><?php echo self::$fighters['player_2']['health'];?></span></p>
                        <p class="features" id="p2_damage">Damage: <span><?php echo self::$fighters['player_2']['damage'];?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="fight_history"></div>
        <div class="controller">
            <button class="ctrl_btn" onclick="punch()">Punch</button>
            <button class="ctrl_btn" onclick="kick()">Kick</button>
        </div>
    </div>
    <?php require_once VIEWS . '/rightb_view.php';?>
</div>