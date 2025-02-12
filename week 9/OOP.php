<?php
class Song{
    public string $title;
    public string $artist;
    public function __construct(string $title,string $artist){
        $this->title = $title;
        $this->artist = $artist;
    }
}


class PlayList{
    public array $songs=[];
    function addNewSong(Song $song){
        $this->songs[] = $song;
    }
    function playSong(){
        foreach ($this->songs as $song) {
            echo "The current song is: " . $song->title . " and the artist is: " . $song->artist . PHP_EOL;
        }
    }
}
$song1= new Song("s1","x1");
$song2= new Song("s2","x2");  
$song3= new Song("s3","x3");
$playlist = new PlayList();
$playlist->addNewSong($song1);
$playlist->addNewSong($song2);
$playlist->addNewSong($song3);
$playlist->playSong();