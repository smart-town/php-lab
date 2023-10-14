<!DOCTYPE html>
<html lang="zh-Hans">
    <head>
        <title>php-learn</title>
    </head>
    <body>
        <p>
        <?php
        echo "Hello, PHP Script"
        ?>
        </p>
        <p><?php 
        $os_info = php_uname();
        echo "操作系统:" . $os_info . "<br/>" 
            . sys_get_temp_dir()
        ?>
        </p>
        <?php
        echo "<div style='padding: 5px 1em; border: 1px solid skyblue; width:80%;margin: 0 auto;'>" . $_SERVER["HTTP_USER_AGENT"] . "</div>"
        ?>
        <form action="action.php" method="post">
            <p>name: <input type="text" name="name"/> </p>
            <p>age: <input type="text" name="age"/> </p>
            <p><input type="submit"/></p>
        </form>
        <p><?php phpinfo() ?>
        </p>
    </body>
</html>