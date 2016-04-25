# LinkedIn Sr.

LinkedIn Sr. was created with the intent of helping seniors find retirement communities to live in. This document will help you install the LinkedIn Sr. project on your server. 

Project Member pawprints: 
djd5gd
slbyb9
djbbq3
jdsdm2
mjg5kc
ehpppf

Please check our Wiki for more information: https://github.com/Sticky-Keys/FinalProject/wiki

##Installation Guide

###Github
First, you need to fork this repository. There is a button on the upper right corner of the page that you will click. You will then clone the repo to your local git. This is done by copying the url of your forked repository, and running the command "git clone <copy URL here>" in your terminal (if you are on a Mac or using Linux) or in your command prompt shell (for Windows users). It is advised that once you clone the the forked repository, you create an editable branch. This way, you will have a backup copy of the repo if the changes you make to the editable branch break everything. 

###Deployment
This project is a web application, so by nature it should be depolyed to a web server. We used a Microsoft Azure cloudapp server, and installed a LAMP stack on the server to run the project. We recommend that you use a server that you are comfortable with configuring. The Microsoft Azure server that we built comes with documentation on how to configure the server. These instructions are found on this Github repo entitled ServerConfig. This documentation shows and explains how to create a Microsoft Azure Linux based server, and how to install the LAMP stack on the server. 

You will also need a MySQL database server. You can create on using Microsoft Azure, as well. Once you have created this on Azure, you will need to store your credentials to access the database in the future. These credentials can be viewed from the settings page within your database tab located on your dashboard in your Azure account. 

Once you have created and configured your server, you will need to put the project on the server. To do this, you can use an sftp application to transfer the project from your local machine to your server. We used FileZilla, which is free for download. Once you are logged into your server on FileZilla, you can drag and drop the project into your public_html folder on the server (if you used our instructions on creating and configuring your server). 

###Edits and Changes
After you make changes to your branch, you will need to add the changes with the "git add -A" command, and then, commit the changes with the command "git commit 'm <message goes here in quotes>". Then, you will "git push origin master" to push to the repo to your forked repository. It is important to note that if you do not connect your github and your server, pushing changes to github will not update the project on the server. To do that, you will need to use FileZilla (or some other sftp app) to transfer the updated project to the server. 
