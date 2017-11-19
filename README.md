# BlizzCMS

Welcome to a new website for World of warcraft
This page is compatible with all game versions.

## [DEMO](https://demo.project-blizzcms.site/)

* If you find bugs please report them in the [issues](https://github.com/fixcore/BlizzCMS/issues) section.
* If you need support about the database please see the [wiki](https://github.com/fixcore/BlizzCMS/wiki) section
* If you want to be more informed about the changes and interact with me, access our [Discord channel](https://discord.gg/WGGGVgX).
* If you want to contribute you can fork, make your changes and send me pull request
* If you want to help me monetarily please write me in Discord **Vipo#6404**
* If you have any advice or concerns, please visit our Discord channel [#general_en](https://discord.gg/WGGGVgX)


### Components

| Name | Url | Version |
| ------ | ------ | ------ |
| Codeigniter | [https://github.com/bcit-ci/CodeIgniter4] | v4 |
| Semantic-UI | [https://semantic-ui.com] | v2.2 |

### How to install

* If you want in the future to easily apply my changes follow the next steps

> Install Git extensions

* In the git console write the following data

> git clone https://github.com/fixcore/BlizzCMS.git
* The generated folder is already the web page. When you see new changes you must open the git console, go to the path of the folder and write:

> git pull
* You will not lose the files configured by your account, only the new changes will be applied

## Configuration

> application/config/config.php.dist **rename** to config.php

> application/config/database.php.dist **rename** to database.php

* In the file config.php change the line 26
> $config['base_url'] = 'http://project-blizzcms.site/';

* In the file database.php change the necessary data for the correct connection to your database.

## Warning

> This system uses .htaccess, your machine must have the necessary extensions to read it.