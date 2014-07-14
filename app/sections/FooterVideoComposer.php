<?php

class FooterVideoComposer {

    public function __construct(Video\Youtube $videos)
    {
        $this->videos = $videos;
    }


    public function compose($view)
    {
        $view->footerVideo = $this->videos->position('footer')->first();
    }

} 