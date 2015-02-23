
        <!--Below is the code that sets up php code on my index.php page--> 
        <?php
            require_once(__DIR__ . "/controller/login-verify.php");
            //Below is the line of code that links/shows my file to my header 
            //page
            require_once (__DIR__ . "/view/header.php");
            
                if(authenticateUser()) {          
                //Below is the line of code that shows my navigatioin page
                require_once (__DIR__ . "/view/navigation.php");
                }
            //Below is the line of code that links my file to my create-db.php 
            //page
            require_once(__DIR__ . "/controller/create-db.php");
            //Below is the line of code that links/shows my file to my footer 
            //page
            require_once (__DIR__ . "/view/footer.php");
            //Below is the line of code that links/shows my file to my read 
            // posts page
            require_once (__DIR__ . "/controller/read-posts.php")
        ?>
