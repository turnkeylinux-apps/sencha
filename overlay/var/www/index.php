<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Script-Type" content="text/javascript">

        <title>TurnKey Sencha</title>
        
        <link rel="stylesheet" href="css/ui.tabs.css" type="text/css" media="print, projection, screen"/>
        <link rel="stylesheet" href="css/base.css" type="text/css"/>

        <script src="js/jquery-1.2.6.js" type="text/javascript"></script>
        <script src="js/ui.core.js" type="text/javascript"></script>
        <script src="js/ui.tabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('#container-1 > ul').tabs({ fx: { opacity: 'toggle'} });
            });
        </script>
    </head>

    <body>
        <h1>TurnKey Sencha</h1>
        
        <div id="container-1">
            <ul>
                <li><a href="#cp"><span>Control Panel</span></a></li>
                <li><a href="#start"><span>Getting Started</span></a></li>
            </ul>

            <div id="cp">
                <div class="fragment-content">
                    <div>
                        <a href="https://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12320"><img
                        src="images/shell.png"/>Web Shell</a>
                    </div>
                    <div>
                        <a href="https://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12321"><img
                        src="images/webmin.png"/>Webmin</a>
                    </div>
                    <div>
                        <a href="https://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12322"><img
                        src="images/phpmyadmin.png"/>PHPMyAdmin</a>
                    </div>
                    <div></div>
                    <div></div>

                    <h2>Resources and references</h2>
                    <ul>
                        <li>Sencha Touch <a href="http://docs.sencha.com/touch/">documentation</a> and <a href="/sencha">local examples</a>
                        <li><a href="http://www.sencha.com">Official Sencha website</a></li>
                        <li><a href="http://www.turnkeylinux.org/sencha">TurnKey Sencha release notes</a></li>
                    </ul>
                </div>
            </div>

            <div id="start">
                <div class="fragment-content">
                    <h2>Generating your first app</h2>
                    <p>Read the <a href="http://docs.sencha.com/touch/">Sencha getting started guide and watch the movie</a>.</p>
                    <p>To generate your first app as explained in the
                    guide, the correct path is:</p>
<pre>cd /var/www/sencha
sencha generate app GS ../GS</pre>
                    <p>You can then browse to your app here: <a href="http://<?php print $_SERVER{'HTTP_HOST'}; ?>/GS">http://<?php print $_SERVER{'HTTP_HOST'}; ?>/GS</a></p>
                    <h2>MySQL and PHP included</h2>
                    <p>Most likely (but not always) you'll need a
                    backend for your app, so the TurnKey Sencha
                    appliance includes the popular MySQL database and
                    support for the PHP scripting language to get your
                    started fast.</p>
                    <p>If you prefer a different stack, you could either
                    manually install your preference, or use another
                    pre-configured <a
                    href="http://www.turnkeylinux.org">TurnKey Linux
                    </a> appliance for the backend.</p>
                </div>
            </div>
        </div>
    </body>
</html>
