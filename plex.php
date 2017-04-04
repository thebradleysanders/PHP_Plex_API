<?php 

class plexApi {
	public $plexServer = "localhost";
	public $plexToken = "";
	
	
	public function __construct ($plexServer, $plexToken) {
		
		if(trim($plexServer)==""){
			throw new Exception("Plex Server Not Specified");
		}
		
		if(trim($plexToken)==""){
			throw new Exception("Plex Token Not Specified");
		}
		
		$this->plexServer = $plexServer;
		$this->plexToken  = $plexToken;
	  }
	
	public function getData($link, $get){
		$Data = file_get_contents('http://'.$this->plexServer.':32400'.$link.'?X-Plex-Token='.$this->plexToken.'');
		return $Data;	
	}
	
	/* Agents available (and some of their configuration) */
	public function getPlayers(){
		$link="/system/agents";
		$get="";
		return $this->getData($link, $get);
	}
	
	/* This will retrieve the "Now Playing" Information of the PMS. */
	public function getSessions(){
		$link="/status/sessions";
		$get="";
		return $this->getData($link, $get);		
	}
	
	/* Contains all of the sections on the PMS. This acts as a directory and you are able to "walk" through it. */
	public function getMedia(){
		$link="/library/sections";
		$get="";
		return $this->getData($link, $get);		
	}
	
	/* Get Plex.TV account information */
	public function getAccount(){
		$link="/myplex/account";
		$get="";
		return $this->getData($link, $get);	
	}
	
	/* get the local List of servers */
	public function getServers(){
		$link="/servers";
		$get="";
		return $this->getData($link, $get);
	}
	
	/* Retrieves a listing of all history views */
	public function getHistory(){
		$link="/status/sessions/history/all";
		$get="";
		return $this->getData($link, $get);
	}
	
	/* create image url from thumb */
	public function getImage($name){
		return "http://".$this->plexServer.":32400".$name."?X-Plex-Token=".$this->plexToken;
	}
}