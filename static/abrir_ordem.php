<?php
                    
    $casa0 = trim($_POST['casa0']);
    $casa1 = trim($_POST['casa1']);
    $calcu = trim($_POST['calcu']);

    
    echo '
            <script type="text/javascript">
                const screenWidth = window.screen.width;
                const screenHeight = window.screen.height;
            
                const windowWidth = Math.floor(screenWidth / 3);
                const windowHeight = screenHeight;
            
                const window1 = window.open("'.$casa0.'", "_blank", "width=" + windowWidth + ",height=" + windowHeight + ",left=0,top=0");
                const window2 = window.open("'.$casa1.'", "_blank", "width=" + windowWidth + ",height=" + windowHeight + ",left=" + windowWidth + ",top=0");
                const window3 = window.open("'.$calcu.'", "_blank", "width=" + windowWidth + ",height=" + windowHeight + ",left=" + (2 * windowWidth) + ",top=0");
            
                // Mova as janelas para as posições corretas
                window1.moveTo(0, 0);
                window2.moveTo(windowWidth, 0);
                window3.moveTo(2 * windowWidth, 0);
            
                self.close();
            </script>
        ';

?> 