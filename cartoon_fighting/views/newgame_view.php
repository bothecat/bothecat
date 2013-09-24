<div class="container">
    <div class="left newgame">
        
        <div class="fighter_select">
            <h1>Select a Fighter</h1>
            <?php foreach(self::$fighters as $item):?>
                <div class="fighter">
                   <div class="image">
                        <a onclick="select('<?php echo $item['id']?>')" href="#!"><img src="<?php echo IMAGE . '/' . $item['image'];?>"></a>
                    </div>
                    <div class="name">
                        <p><?php echo $item['name']?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="selected_fighter">
            <div class="player_1">
                <div class="lsfighter">
                    <img src="<?php echo IMAGE . '/empty.jpeg';?>">
                </div>
                <div class="info">
                    <h3 class="lfighter_name"></h3> 
                    <p class="features" id="p1_power">Power: <span>0</span></p>
                    <p class="features" id="p1_health">Health: <span>0</span></p>
                    <p class="features" id="p1_damage">Damage: <span>0</span></p>
                    <p id="p1_id"></p>
                </div>
            </div>
            <div class="selected_fighter_menu">
                <div id="game_start_preloader"></div>
                <div id="game_begins_block"><p>Game Begins</p></div>
                <a onclick="selectToOpponent()" href="#<?php //echo APP . '/game';?>" id="game_start_btn">
                    Select a fighter to the opponent and start game
                </a>
                <br />
                <br />
                <a href="<?php echo APP . '/';?>" id="exit_btn">Exit</a>
            </div>
            <div class="player_2">
                <div class="rsfighter">
                    <img src="<?php echo IMAGE . '/empty.jpeg';?>">
                </div>
                <div class="info">
                    <h3 class="rfighter_name"></h3> 
                    <p class="features" id="p2_power">Power: <span>0</span></p>
                    <p class="features" id="p2_health">Health: <span>0</span></p>
                    <p class="features" id="p2_damage">Damage: <span>0</span></p>
                    <p id="p2_id"></p>
                </div>
            </div>
        </div>
        <div id="game_start_preloader"></div>
    </div>
    <?php require_once VIEWS . '/rightb_view.php';?>
</div>