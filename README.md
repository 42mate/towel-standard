Towel Standard
==============

This the standar folder structure for any Towel project

Install
=======
Start by installing composer oin any prefered folder

````$ curl -s https://getcomposer.org/installer | php`````

After that, run composer to create Towel project's folder structure.

```$ php composer.phar create-project --no-interaction 42mate/towel-standard /path/to/towel-project-folder dev-master```

After that you'll have a fully operational Towel instance to start coding your application.

Contributors
============

If want to contribute to Towel's core you'll need to do a few extra steps (no worries, they're not much).

After downloading towel-standard:

1 - Edit composer.json located at the root folder.

   1.1 - Delete the line: "42mate/towel": "xxx" (and the previous "," if "42mate/towel": "xxxx" was the last item in the "require" section)
   
   1.2 - Add: "Towel": "vendor/42mate/towel/src" in the "psr-0" section

2 - Go to /path/to/towel-project-folder and run php composer.phar update, let composer do its magic.

3 - Fork Towel repository with your git account.

4 - Go to /path/to/towel-project-folder/vendor and run it 

    ```git clone git@github.com:YourUserName/towel.git 42mate/towel```
    
    After cloning Towel core, you only need to setup your favourite http server to serve pages from Towel's application.

5 - Start your contributions!
