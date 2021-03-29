<?php

/**
 * 
 * @author Tibor Csik <csulok0000@gmail.com>
 */

namespace Csulok0000\ProtectedMenu;

use Csulok0000\ProtectedMenu\MenuItem;

class Menu {
    
    /**
     * 
     * @var MenuItem
     */
    public $items = [];
    
    /**
     * 
     * @param MenuItem[] $items
     */
    public function __construct(array $items = []) {
        $this->items = $items;
    }
}
