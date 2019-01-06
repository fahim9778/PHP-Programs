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
             <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
             <title>$pageData->title</title> 
             <meta http-equiv='Content-Type' content='test/html; charset=utf-8'/>
             <meta name='viewport' content='width=device-width, initial-scale=1'>
             $pageData->css
             </head>
             <body>
             $pageData->scriptElements
             $pageData->content
             $pageData->footer
             </body>
             </html>";
