# Contao CSS Livereload

Livereload the CSS in the Browser whenever a file changes.

* **Supports the Contao Combiner !**
* Supports LessCSS
* Supports SASS (planned)

## How it works

1. You have to run the contao-livereload-server on the Machine holding the Stylesheet files.
2. You have to install the contao-livereload extension and enable it in your user-profile
3. Whenever you load a Contao page in your Browser a AJAX call tells the livereload-server which (uncombined) stylesheets youre working with.  

## Client installation
Use Compoeser!<br>
*Or copy all files to system/modules/contao-livereload and update the database*

## Server installation
1. You need NodeJS and NPM installed! [Google knows how](https://www.google.com/?q=How+to+install+nodejs)
2. Download the [Contao-Liveupdate-Server](https://github.com/psi-4ward/contao-livereload-server/archive/master.zip)
3. Run `npm install` in the server directory

## Using Contao-Livereload

1. Run the `bin/contao-livereload` file from any contao root directory <br>
   f.i. `~/htdocs/musicacademy/ $ ../contao-livereload-server/bin/contao-livereload`
2. Open any contao frontend page 
3. Start editing your CSS
4. Enjoy the magic

## Tipps

* Add an alias to my bashrc to run contao-livereload from everywhere<br>
  `echo alias ctolr=~/htdocs/contao-livereload-server/bin/contao-livereload >> ~/.bashrc`
* You can also use a simlink in your bin directory.
* Its GulpJS based, so you can run it without my helper bash script

```bash
psi@psi:~webroot/contao-livereload$ gulp
Usage: gulp -u mycontaosite -w "files/layout/*.less"

Options:
  -d  Contao directory  [required]
  -w  Add more watcher
  
psi@psi:~webroot/contao-livereload$ gulp -d ../isotopedemo -w "files/layout/*.less" -w "files/base.css"
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
Author: [4ward.media](http://www.4wardmedia.de)