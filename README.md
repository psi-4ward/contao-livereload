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
4. Run the `bin/contao-livereload` file from any contao root directory <br>
   f.i. `~/htdocs/musicacademy/ $ ../contao-livereload-server/bin/contao-livereload`
5. Open any contao frontend page 
6. Start editing your CSS
7. Enjoy the magic

PS: I added an alias to my bashrc to run contao-livereload from everywhere
``` 
echo alias ctolr=~/htdocs/contao-livereload-server/bin/contao-livereload >> ~/.bashrc 
```
You can also use a simlink in your bin directory.

License: http://www.gnu.org/licenses/lgpl-3.0.html LGPL <br>
Author: [4ward.media](http://www.4wardmedia.de)