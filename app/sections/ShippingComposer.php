<?php

use Shipping\ShippingCategory;

class ShippingComposer {

    /**
     * @param ShippingCategory $categories
     */
    public function __construct(ShippingCategory $categories)
    {
        $this->categories = $categories;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with('categories', $this->categories->all());
    }

} 