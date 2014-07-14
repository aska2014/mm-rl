<?php namespace Admin\Menu;

use Illuminate\Support\Facades\Request;

class ChildItem {

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $title;

    /**
     * @param $title
     * @param $url
     */
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * @param $items
     * @return array
     */
    public static function makeAll($items)
    {
        $childItems = array();

        foreach($items as $title => $url) {

            $childItems[] = new static($title, '/admin/'.trim($url, '/'));
        }

        return $childItems;
    }

    /**
     * @return mixed
     */
    public function isActive()
    {
        return Request::is(trim($this->url, '/'));
    }
}