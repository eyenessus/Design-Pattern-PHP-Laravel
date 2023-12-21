<?php
interface MediaPlayer{
    public function play();
}
interface MediaPlayerAdvanced {
    public function playMP4();
    public function playVLC();
}


class AudioPlayer implements MediaPlayer{
    public function play(){
        echo 'tocando musica mp3';
    }
}

class VlcPlayer implements MediaPlayerAdvanced{
    public function playMP4(){
      //  echo 'tocando musica mp4';
    }
    public function playVLC(){
        echo 'tocando musica vlc';
    }
}
class MP4player implements MediaPlayerAdvanced{
    public function playMP4(){
        echo 'tocando musica mp4';
    }
    public function playVLC(){
      //  echo 'tocando musica vlc';
    }
}



class MediaPlayerAdapter implements MediaPlayer{
    protected $mediaPlayer;
    public function __construct($midia){
        $this->mediaPlayer = $midia;
    }
    public function play(){
        $this->mediaPlayer->playMP4();
    }
}