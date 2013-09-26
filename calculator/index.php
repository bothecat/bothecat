<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='http://bothecat/calculator/css/styles.css' type='text/css'>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script src='http://bothecat/calculator/js/calculator.js'></script>
    </head>
    <body>
        <div class='container'>
            <div class='header temp'><h1>Calculator | BoTheCat</h1></div>
            <div class='result_block temp'>
                <h2>0</h2>
            </div>
            <div class='control_panel temp'>
                <input type='text' id='a' class='form'> 
                <input type='text' id='b' class='form'> 
                <div class='controls temp'>
                    <labe>Plus: </labe><input type='radio' name='group' id='plus'>
                    <labe>Multiply: </labe><input type='radio' name='group' id='multiply'>
                    <labe>Divide: </labe><input type='radio' name='group' id='divide'>
                    <labe>Minus: </labe><input type='radio' name='group' id='minus'>
                </div>
                <button class='equals' onclick='calculator()'>=</button>
            </div>
        </div>
    </body>
</html>