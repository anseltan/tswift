<?php
class Song {
    private $albumName;
    private $songName;
    private $ytLinkA; // All songs part of album
    private $ytLinkB; // SPECIFIC SONG
    private $spotifyLink;

    public function __construct($aAlbumName, $aYtLinkA, $aSongName, $aYtLinkB, $aSpotifyLink) {
        $this->albumName = $aAlbumName;
        $this->songName = $aSongName;
        $this->ytLinkA = $aYtLinkA;
        $this->ytLinkB = $aYtLinkB;
        $this->spotifyLink = $aSpotifyLink;
    }

    public function getAlbumName() {
        return $this->albumName;
    }

    public function getSongName() {
        return $this->songName;
    }

    public function getYtLinkA() {
        return $this->ytLinkA;
    }

    public function getYtLinkB() {
        return $this->ytLinkB;
    }

    public function getSpotifyLink() {
        return $this->spotifyLink;
    }
}
?>