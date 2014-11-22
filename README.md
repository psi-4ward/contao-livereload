# Contao CSS Livereload

Livereload the CSS in the Browser whenever a file changes.

* **Supports the Contao Combiner !**
* Supports LessCSS
* Supports SASS (Compass)

## How it works

1. You have to run the contao-livereload-server on the Machine holding the Stylesheet files.
2. You have to install the contao-livereload extension and enable it in your user-profile
3. Whenever you load a Contao page in your Browser a AJAX call tells the livereload-server which (uncombined) stylesheets youre working with.  

## Client installation
Use Composer!<br>
*Or copy all files to system/modules/contao-livereload and update the database*

## Server installation
1. You need NodeJS and NPM installed! [Google knows how](https://www.google.com/?q=How+to+install+nodejs)
2. Run `sudo npm -g install contao-livereload` <br>
   *You can use one server installation for every contao project*

## Using Contao-Livereload

1. Run the `contao-livereload` file from any contao root directory
2. Activate the feature in your Backend-User Profile (`contao/main.php?do=login`)
2. Open any contao frontend page 
3. Start editing your CSS/LESS
4. Enjoy the magic

## Tipps

* Add watchers to trigger the livereload for files not directly referenced in Contao.
 Useful if you have `@import` in your less files: <br>
 `contao-livereload -w files/layout/**/*.less`
* You can run the Contao-Livereload-Server on your webserver, be sure to configure the
  correct Host in your backend profile. If you have problems check the server firewall.

## Server usage
```
Usage: contao-livereload -d path -w "files/layout/**/*.less"

Examples:
  contao-livereload -d ContaoProject -w files/layout/**/*.less -w files/layout/**/*.css    


Options:
  -d  Contao directory path, default is the current working directory
  -w  Add file watchers, you can use globbing
  --lr-port   Port of the livereload server                                    [default: 35729]
  --req-port  Port listen on for Contao requests                               [default: 35720]
  -h  Help
```

### example output
```
psi@psi:~webroot/isotopedemo$ contao-livereload -w "files/layout/*.less" -w "files/base.css"
[gulp] Using gulpfile ~/webroot/contao-livereload/gulpfile.js
[gulp] Starting 'default'...
[19:21:57] Assume Contao root directory in /home/psi/webroot/isotopedemo
[gulp] Finished 'default' after 87 ms
[19:21:57] Live reload server listening on: 35729
[19:21:57] Contao Handler listening on: 35720
[19:21:57] Waiting for Contao requests ...
[19:22:07] Received contao live-reload request 
[19:22:07] Watching for livereload system/modules/isotope/assets/css/isotope.min.css
[19:22:07] Watching for livereload assets/css/8900add6f135.css
[19:22:07] Watching for combining files/layout/*.less
[19:22:07] Watching for combining files/base.css
[19:22:07] Watching for combining assets/contao/css/layout.css
[19:22:07] Watching for combining assets/contao/css/responsive.css
[19:22:07] Watching for combining assets/contao/css/grid.css
[19:22:07] Watching for combining assets/contao/css/reset.css
[19:22:07] Watching for combining files/font-awesome-4.0.3/css/font-awesome.min.css
[19:22:07] Watching for combining files/contaodemo/contaodemo.css
[19:22:07] Watching for combining files/isotopedemo/isotopedemo.css
[19:23:48] files/isotopedemo/isotopedemo.css was changed
[19:23:48] 8900add6f135.css was reloaded.
```

License: http://www.gnu.org/licenses/lgpl-3.0.html LGPL <br>
Author: Christoph Wiechert [4ward.media](http://www.4wardmedia.de)
