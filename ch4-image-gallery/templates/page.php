    <?php
    /**
     * Created by PhpStorm.
     * User: MD. Fakhruddin Gazzali
     * Date: 14-Nov-18
     * Time: 11:28 AM
     */
    return  "<!DOCTYPE html> 
             <html>
             <head>
             <title>$pageData->title</title> 
             <meta http-equiv='Content-Type' content='test/html; charset=utf-8'/>
             <meta name='viewport' content='width=device-width, initial-scale=1'>
             $pageData->css
             </head>
             <body>
             $pageData->content
             $pageData->scriptElements
             </body>
             </html>";
