Sencha - Framework for Mobile HTML5 webapps
===========================================

`Sencha Touch`_ is a high-performance HTML5 mobile application framework
that is the cornerstone of the Sencha HTML5 platform.  Built for
enabling world-class user experiences, it's the only framework that
enables developers to build fast and impressive apps that work on iOS,
Android, BlackBerry, Kindle Fire, and more.

This appliance includes all the standard features in `TurnKey Core`_,
and on top of that:

- Sencha configurations:
   
   - Installed from upstream source code to /var/www/senchasdk
   - Includes Sencha Touch and SenchaCMD.
   - Includes compass for css sass (optimization, convenience).
   - Includes TurnKey Web Control panel with links to useful references,
     and relevant path information (convenience).

- SSL support out of the box.
- `PHPMyAdmin`_ administration frontend for MySQL (listening on port
  12322 - uses SSL).
- Postfix MTA (bound to localhost) to allow sending of email (e.g.,
  password recovery).
- Webmin modules for configuring Apache2, PHP, MySQL and Postfix.

Credentials *(passwords set at first boot)*
-------------------------------------------

-  Webmin, SSH, MySQL, phpMyAdmin: username **root**


.. _Sencha Touch: http://www.sencha.com/
.. _TurnKey Core: http://www.turnkeylinux.org/core
.. _PHPMyAdmin: http://www.phpmyadmin.net
