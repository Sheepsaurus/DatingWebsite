<html>
    <head>
        <!-- Responsive Link -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!-- CSS Link -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <!-- Bootstrap Link -->
    </head>

    <body>
        <div class="background">
            <div class="menuBar">
                <div class="nav">
                    <ul class="menuItems">
                        <li>Menu 1</li>
                        <li>Menu 2</li>
                        <li>Menu 3</li>
                        <li>Menu 4</li>
                    </ul>
                </div>
            </div>
            <div>
                <?php FillPageWithLines() ?>
            </div>
        </div>
    </body>
</html>

<?php 
    function FillPageWithLines () {
        for($i = 0; $i < 1000; $i++) {
            echo "<br>";
        }
    }; 
?>