# Asana Alfred extension
Extension to post Asana tasks from the [Alfred](http://www.alfredapp.com/) command line. Powered by a php script that sends emails to Asana. 

![](https://img.skitch.com/20120605-qeq1dsutqsr2fmpief68uxk46g.png)

## Installation
Download the extension as a package and customize the settings in Alfred. If you only want to post to your personal task list you're done. If you want to be able to post to different or multiple projects read on.

### Multiple projects
1. Open asana.php in your favorite editor
2. Change the array on line 13 and add keywords and the id's of the projects (see below how to find the id's)

You can now post to the projects you specified by starting the command with the keyword you specified, just follow with the task and you're set.

### Usage
    php asana.php [Email Address] [Task]

For example:

    php asana.php dennis@springest.com "Create README for AsanaThis"


### How to find the ID of a project
1. Go to Asana and view any task in the project
2. Look at the URL, it should look like `http://app.asana.com/0/FirstNumber/SecondNumber`
3. The FirstNumber is the ID number of the project
