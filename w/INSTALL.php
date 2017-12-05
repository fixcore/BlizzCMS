---
Installing MediaWiki
---

Starting with MediaWiki 1.2.0, it's possible to install and configure the wiki
"in-place", as long as you have the necessary prerequisites available.

Required software:
* Web server with PHP 5.3.2 or higher.
* A SQL server, the following types are supported
** MySQL 5.0.2 or higher
** PostgreSQL 8.3 or higher
** SQLite 3.3.7 or higher
** Oracle 9.0.1 or higher

MediaWiki is developed and tested mainly on Unix/Linux platforms, but should
work on Windows as well.

If your PHP is configured as a CGI plug-in rather than an Apache module you may
experience problems, as this configuration is not well tested. safe_mode is also
not tested and unlikely to work.

Support for rendering mathematical formulas requires installing the Math extension,
see http://www.mediawiki.org/wiki/Extension:Math

Don't forget to check the RELEASE-NOTES file...


Additional documentation is available online, which may include more detailed
notes on particular operating systems and workarounds for difficult hosting
environments:

http://www.mediawiki.org/wiki/Manual:Installation_guide


******************* WARNING *******************

REMEMBER: ALWAYS BACK UP YOUR DATABASE BEFORE
ATTEMPTING TO INSTALL OR UPGRADE!!!

******************* WARNING *******************

----
In-place web install
----

Decompress the MediaWiki installation archive either on your server, or on your
local machine and upload the directory tree. Rename it from "mediawiki-1.x.x" to
something nice, like "wiki", since it will be appearing in your URL,
ie. /wiki/index.php/Article.

  +--------------------------------------------------------------------------+
  |  Note: If you plan to use a fancy URL-rewriting scheme to prettify your  |
  |  URLs, such as http://www.example.com/wiki/Article, you should put the   |
  |  files in a *different* directory from the virtual path where page names |
  |  will appear. It is common in this case to use w as the folder name and  |
  |  /wiki/ as the virtual article path where your articles pretend to be.   |
  |                                                                          |
  |    See: http://www.mediawiki.org/wiki/Manual:Short_URL                   |
  +--------------------------------------------------------------------------+

Hop into your browser and surf into the wiki directory. It'll direct you into
the config script. Fill out the form... remember you're probably not on an
encrypted connection.
Gaaah! :)

If all goes well, you should soon be told that it's set up your wiki database
and generated a configuration file. There is now a copy of "LocalSettings.php"
available to download from the installer. Download this now, there is not a
way (yet) to get it after you exit the installer. Place it in the main wiki
directory, and the wiki should now be working.

Once the wiki is set up, you should remove the mw-config directory (though it will
refuse to config again if the wiki is set up).

----

Don't forget that this is free software under development! Chances are good
there's a crucial step that hasn't made it into the documentation. You should
probably sign up for the MediaWiki developers' mailing list; you can ask for
help (please provide enough information to work with, and preferably be aware of
what you're doing!) and keep track of major changes to the software, including
performance improvements and security patches.

http://lists.wikimedia.org/mailman/listinfo/mediawiki-announce (low traffic)

http://lists.wikimedia.org/mailman/listinfo/mediawiki-l (site admin support)

http://lists.wikimedia.org/mailman/listinfo/wikitech-l (development)
