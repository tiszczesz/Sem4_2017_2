<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Strona testowa</title>
        <link href="egz2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <div id="baner">
                  <a href="egz2.php"><h1>STRONA TESTOWA</h1></a>
            </div>
            <div id="lewy">
                <?php
                session_start();
                print_r($_SESSION);
                echo "ID sesji: ". session_id();
                ?>
                Podstrona 2
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                </p>
                <form method="post">
                    <input type="hidden" name="sesja" value="end"/>
                    <input type="submit" value="Koniec sesji">
                </form>
                <?php
                if(isset($_POST['sesja'])){
                    session_destroy();
                    echo "Sesja zakończona";
                }
                ?>
            </div>
            <div id="prawy">
                <h3>MENU:</h3>
                <ul>
                    <li><a href="egz2.php">Pierwsza strona</a></li>
                    <li><a href="podStr2.php">Druga strona</a></li>
                    <li><a href="podStr3.php">Trzecia strona</a></li>
                </ul>
                
            </div>
            <div id="stopka">Wykonane Adam Nowak 2017</div>
        </div>
        <script type="text/javascript" src="strona_testowa.js"></script>
    </body>
</html>
