Towel Standard
==============

This the standar folder structure for any Towel project

Install
=======
Start by installing composer oin any prefered folder

```` $ curl -s https://getcomposer.org/installer | php````

After that, run composer to create Towel project's folder structure.

``` php composer.phar create-project --no-interaction 42mate/towel-standard /path/to/towel-project-folder dev-master```

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
    
6 - After cloning Towel core, you only need to setup your favourite http server to serve pages from Towel's application.

7 - Start your contributions!

Manual Installation for Contributors
====================================

Go to Github with your github account.

Fork the Towel Standard repository (click on the "Fork" button)

After the "forking action" has completed, clone your fork locally

```git clone git@github.com:USERNAME/towel-standard.git```

Add the upstream repository as a remote (for update your fork).

```
   cd towel-standard
   git remote add upstream git://github.com/42mate/towel-standard.git
```

Run composer update to install all dependencies.

## Contributions to towel core ##

Delete towel core from vendors and Clone your fork of towel core.

```
   cd towel-standard
   rm -rf vendors/42mate/towel
   cd vendors/42mate/towel
   git clone git@github.com:USERNAME/towel.git
   cd towel
   git remote add upstream git://github.com/42mate/towel.git
```

## Update your fork ##

To update your fork with the main repo do the following

```
 cd towel-standard
 git checkout master
 git fetch upstream
 git merge upstream/master
```

Do your changes and then commit and push your changes

```
 git commit .... your params ...
 git push origin master
```

After that create a new pull request in your fork page in github and we are going
to receive that request to merge your changes in the main repo.
