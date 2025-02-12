<?php
class Song{
    public string $title;
    public string $artist;
    public int $noOfplays = 0;
    public function __construct(string $title,string $artist){
        $this->title = $title;
        $this->artist = $artist;
        $noOfplays++;
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
    function getSongCount(array $songs){
        return count($songs);
    }
}
////////////////////////////////////////
class Employee{
    private string $name;
    private int $id;
    public function __construct(string $name, int $id){
        $this->name = $name;
        $this->id = $id;
    }
    function getBounus(){
        return $name;
    }
}

class Doctor extends Employee {
    private string $Specialty;
    private array $patients;
    public function __construct(string $Specialty,string $patients){
        parent::__construct($name, $id);
        $this->Specialty = $Specialty;
        $this->patients = $patients;
    } 
    function assignPatient(string $patient){
        $this->patients[] = $patient;
    }
}