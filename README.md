php logBook
=============

This is a extremely small php class to ignore the headache of dealing with multiple logs for various parts of your app.

How To Use
-------

This script is almost too simple to have this section, but just to be complete.

I recommend an 'include_once', in every file that you want to use this script in.

Create an object of the class

    $log1 = new logBook('filename.log');

And then whenever you want to enter a new log into THAT log:

    $log1->addLog("Enter your comment here");

It will automatically add a new line to the end so that you don't have to worry about it. Another example:

    $log1->addLog(var_export($response, true));
    
That will take an array or an object and export it so you can see what is in it at that point in your cycle.


Location
-------

You can change the location of your log in two ways.

1. In the constructor it gives you the option to provide a file name. It will append that filename to the log path.
2. Sub-Class this class and overwrite the protected variable $this->logPath with the new path for your logs.

LICENSE
-------

Copyright 2012 Edward Hinkle. Released under MIT License