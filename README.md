# howatkins
To run this program you should only have to do a 
"php artisan serve" and go to 'http://localhost:8000/' to view the app. (This is assuming you have sqlite installed and the php5-sqlite driver installed). If you do not want to use sqlite and prefer to use mysql our app is set up for that as well, all you need to do is modify the config file to have the default as mysql and then run a 'php artisan migrate' then a 'php artisan serve'. 
