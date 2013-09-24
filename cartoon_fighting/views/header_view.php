<!DOCTYPE html>
<html>
    <head>
        <title><?php echo self::$data['title'];?></title>
        <meta charset="UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amarante' rel='stylesheet' type='text/css'>
        <?php 
            foreach(self::$head_files as $item):
                echo $item;
            endforeach;
        ?>
    </head>
    <body>