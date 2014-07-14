<?php namespace Admin\Menu;

class HeaderItem {

    /**
     * @var array
     */
    protected static $randoms = array();

    protected $unique;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var ChildItem[]
     */
    protected $children = array();

    /**
     * @param $title
     * @param $icon
     * @param $children
     */
    public function __construct($title, $icon, $children)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->children = $children;
    }

    /**
     * @param $items
     * @return array
     */
    public static function makeAll($items)
    {
        $headerItems = array();

        foreach($items as $item) {

            $item['icon'] = isset($item['icon']) ? $item['icon'] : 'dashboard';

            $headerItems[] = new static($item['title'], $item['icon'], ChildItem::makeAll($item['items']));
        }

        return $headerItems;
    }

    /**
     * Generate a random number unique to this header item.
     */
    public function unique()
    {
        if($this->unique) return $this->unique;

        do {

            $random = rand(0, 1000);

        }while(in_array($random, static::$randoms));

        return $this->unique = $random;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        foreach($this->children() as $child)
        {
            if($child->isActive()) return true;
        }

        return false;
    }

    /**
     * @return ChildItem[]
     */
    public function children()
    {
        return $this->children;
    }

} 