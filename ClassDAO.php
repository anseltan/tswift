<?php
    require_once("Class.php");
    class SongDAO{

        private $SongsDB;

        public function __construct(){
            $this->SongsDB = [];
            $this->SongsDB[] = new Song ("Fearless", "https://www.youtube.com/watch?v=Ob-p6VI4eKA","You Belong With Me", "https://www.youtube.com/embed/YW85gN3MXW0", "https://open.spotify.com/track/1qrpoAMXodY6895hGKoUpA?si=708f2e37e4fd42cf");
            $this->SongsDB[] = new Song ("Fearless", "https://www.youtube.com/watch?v=Ob-p6VI4eKA","Love Story", "https://www.youtube.com/embed/etywYG4ZSvg", "https://open.spotify.com/track/3CeCwYWvdfXbZLXFhBrbnf?si=9758c7025c5f4fb9");
            $this->SongsDB[] = new Song ("Fearless", "https://www.youtube.com/watch?v=Ob-p6VI4eKA","Forever and Always", "https://www.youtube.com/embed/37D78_goNG0", "https://open.spotify.com/track/1msEuwSBneBKpVCZQcFTsU?si=398c9e6cf3354598");
            $this->SongsDB[] = new Song ("Fearless", "https://www.youtube.com/watch?v=Ob-p6VI4eKA","Teardrops On My Guitar", "https://www.youtube.com/embed/Vh2y-yBT92A", "https://open.spotify.com/track/1hxLyjC9D9Jpw6EAPKqWv4?si=00181461312e43d9");

            $this->SongsDB[] = new Song ("1989", "https://www.youtube.com/watch?v=P5JLMp08GC0&pp=ygUUMTk4OSBmdWxsIHdvcmxkIHRvdXI%3D", "How You Get The Girl", "https://www.youtube.com/embed/yzlvH6a92Tw", "https://open.spotify.com/track/0fM9dEhUFV4MHDuJgrcfOv?si=7e2144ef8b764410");
            $this->SongsDB[] = new Song ("1989", "https://www.youtube.com/watch?v=P5JLMp08GC0&pp=ygUUMTk4OSBmdWxsIHdvcmxkIHRvdXI%3D", "I Wish You Would", "https://www.youtube.com/embed/_RJm7hWTbDo", "https://open.spotify.com/track/5gRYrtvyVyaCRvLt56OfuV?si=311b9a9102824e53");
            $this->SongsDB[] = new Song ("1989", "https://www.youtube.com/watch?v=P5JLMp08GC0&pp=ygUUMTk4OSBmdWxsIHdvcmxkIHRvdXI%3D", "All You Had To Do Was Stay", "https://www.youtube.com/embed/yxX-vLQvrHo", "https://open.spotify.com/track/4NNolUeL5m2ju7kf8pdg6H?si=b1a3a3070c824a6c");
            $this->SongsDB[] = new Song ("1989", "https://www.youtube.com/watch?v=P5JLMp08GC0&pp=ygUUMTk4OSBmdWxsIHdvcmxkIHRvdXI%3D", "New Romantics", "https://www.youtube.com/embed/s6te0pW5oBQ", "https://open.spotify.com/track/0qAIiGFKLdV1xpNlEhjpq8?si=6d966dc034374aa3");
            $this->SongsDB[] = new Song ("1989", "https://www.youtube.com/watch?v=P5JLMp08GC0&pp=ygUUMTk4OSBmdWxsIHdvcmxkIHRvdXI%3D", "Welcome To New York", "https://www.youtube.com/embed/z8qlaOy9SP8", "https://open.spotify.com/track/10nqz67NQWWa7XPq7ycihi?si=4550b0395bdc4c01");
            $this->SongsDB[] = new Song ("1989", "https://www.youtube.com/watch?v=P5JLMp08GC0&pp=ygUUMTk4OSBmdWxsIHdvcmxkIHRvdXI%3D", "Out Of The Woods", "https://www.youtube.com/embed/uTs6GcImbMI", "https://open.spotify.com/track/7EpVQjqtKygiwJIASxMWNg?si=bb90110ea1344b0b");
            $this->SongsDB[] = new Song ("1989", "https://www.youtube.com/watch?v=P5JLMp08GC0&pp=ygUUMTk4OSBmdWxsIHdvcmxkIHRvdXI%3D", "Style", "https://www.youtube.com/embed/4OL-Hv8K_7k", "https://open.spotify.com/track/0ug5NqcwcFR2xrfTkc7k8e?si=27e83ea64822480b");

            $this->SongsDB[] = new Song ("Red", "https://www.youtube.com/watch?v=UcFIw85wGiI", "Red", "https://www.youtube.com/embed/0Xfxg-D0OA4", "https://open.spotify.com/track/78c485atQVK19038U2RUld?si=33a6c63cc90f4e4e");
            $this->SongsDB[] = new Song ("Red", "https://www.youtube.com/watch?v=UcFIw85wGiI", "Message in a Bottle", "https://www.youtube.com/embed/94dEEW4IAiI", "https://open.spotify.com/track/3z6XUommYDWPHeFhmhhT6j?si=3fc41767ab08487f");
            $this->SongsDB[] = new Song ("Red", "https://www.youtube.com/watch?v=UcFIw85wGiI", "Stay Stay Stay", "https://www.youtube.com/embed/BVt4jGHNPTw", "https://open.spotify.com/track/7eQj6r5PIdYKEIZjucBMcq?si=b67dbf3374f04c88");
            $this->SongsDB[] = new Song ("Red", "https://www.youtube.com/watch?v=UcFIw85wGiI", "22", "https://www.youtube.com/embed/ksJnIs6FbKQ", "https://open.spotify.com/track/3yII7UwgLF6K5zW3xad3MP?si=650b439701fd4420");
            $this->SongsDB[] = new Song ("Red", "https://www.youtube.com/watch?v=UcFIw85wGiI", "I Knew You Were Trouble", "https://www.youtube.com/embed/bO7g1vEZQiI", "https://open.spotify.com/track/6tNSmBKSjFV1366ASuULfZ?si=7cb71a5e4cce4e17");
            $this->SongsDB[] = new Song ("Red", "https://www.youtube.com/watch?v=UcFIw85wGiI", "We Are Never Ever Getting Back Together", "https://www.youtube.com/embed/6bVsg1Ik-GQ", "https://open.spotify.com/track/31CdkzHnMbvJuKZvtCQfR6?si=f8fe46248cd84407");

            $this->SongsDB[] = new Song ("Reputation", "https://www.youtube.com/watch?v=2QJaf6qq8jQ&list=PLBk4xPhag-gT__wpprfT-7kTz7Wvl7oLF", "Getaway Car", "https://www.youtube.com/embed/EW1ncv-jZNk", "https://open.spotify.com/track/0VE4kBnHJUgtMf0dy6DRmW?si=1e6ba552b9584de0");
            $this->SongsDB[] = new Song ("Reputation", "https://www.youtube.com/watch?v=2QJaf6qq8jQ&list=PLBk4xPhag-gT__wpprfT-7kTz7Wvl7oLF", "King Of My Heart", "https://www.youtube.com/embed/dgCnmMrAHiM", "https://open.spotify.com/track/7HuBDWi18s4aJM8UFnNheH?si=b3bc9cc3915c46be");
            $this->SongsDB[] = new Song ("Reputation", "https://www.youtube.com/watch?v=2QJaf6qq8jQ&list=PLBk4xPhag-gT__wpprfT-7kTz7Wvl7oLF", "Call It What You Want", "https://www.youtube.com/embed/QD4ZLNli3rg", "https://open.spotify.com/track/1GwMQaZz6Au3QLDbjbMdme?si=c277536767c4422c");

            $this->SongsDB[] = new Song ("Speak Now", "https://www.youtube.com/watch?v=4-TZLMisluk", "Story Of Us", "https://www.youtube.com/embed/1m90VegAZSY", "https://open.spotify.com/track/19tHCfzUSoy5HkpxcmbA0A?si=2687fc91a0084f4c");
            $this->SongsDB[] = new Song ("Speak Now", "https://www.youtube.com/watch?v=4-TZLMisluk", "Mean", "https://www.youtube.com/embed/IOW0V6KGbDs", "https://open.spotify.com/track/6yM6QsnTCTVOkKEvg3hGlo?si=5a6d109455e045e1");
            $this->SongsDB[] = new Song ("Speak Now", "https://www.youtube.com/watch?v=4-TZLMisluk", "Mine", "https://www.youtube.com/embed/iO4EHVdw6SY", "https://open.spotify.com/track/67Io3gxHwfbUreBf114c0u?si=e3d20ec3d7f144a8");
            $this->SongsDB[] = new Song ("Speak Now", "https://www.youtube.com/watch?v=4-TZLMisluk", "Better Than Revenge", "https://www.youtube.com/embed/fVe0nxVRfWE", "https://open.spotify.com/track/55mh9j2aB7xZ1Oh463gK8k?si=c3b3ee737cba4ef6");
            $this->SongsDB[] = new Song ("Speak Now", "https://www.youtube.com/watch?v=4-TZLMisluk", "Speak Now", "https://www.youtube.com/embed/telORaAvJls", "https://open.spotify.com/track/2PBghI9zJkQEWBzMSMo2Ki?si=4a654546cf5b40d1");
            $this->SongsDB[] = new Song ("Speak Now", "https://www.youtube.com/watch?v=4-TZLMisluk", "Fearless", "https://www.youtube.com/embed/MDxyDQfMfbY", "https://open.spotify.com/track/77sMIMlNaSURUAXq5coCxE?si=86c8fa1f2d894ba1");
            $this->SongsDB[] = new Song ("Speak Now", "https://www.youtube.com/watch?v=4-TZLMisluk", "Long Live", "https://www.youtube.com/embed/mPU65n10BUk", "https://open.spotify.com/track/7BFc7ffruhZ4Hecnqf5xju?si=6d0561681d174708");

        }

        public function retrieveAll(){
            return $this->SongsDB;
        }

        public function retrieveByAlbumName($albumName){
            $songs = [];
            foreach ($this->SongsDB as $song){
                if ($song->getAlbumName() == $albumName){
                    $songs[] = $song;
                }
            }
            return $songs;
        }
    }
?>