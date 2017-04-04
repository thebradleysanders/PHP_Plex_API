# PHP_Plex_API

This is written PHP. It includes the following functions:
* getPlayers()  - Agents available (and some of their configuration)
* getSessions() - This will retrieve the "Now Playing" Information of the PMS.
* getMedia()    - Contains all of the sections on the PMS. This acts as a directory and you are able to "walk" through it.
* getAccount()  - Get Plex.TV account information
* getServers()  - Get the local List of servers
* getHistory()  - Retrieves a listing of all history views
* getSystem() - General plex system information
* getOnDeck() - Show ondeck list
* getPrefs() - Gets the server preferences




## Example
```
include("plex.php");
$plex = new plexApi("localhost","PLEX_TOKEN");
$serverListXML =  $plex->getServers();
```



