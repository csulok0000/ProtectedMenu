<?php

/**
 * 
 * @author Tibor Csik <csulok0000@gmail.com>
 */

namespace Csulok0000\ProtectedMenu;

class MenuItem {
    
    /**
     * 
     * @var string
     */
    public string $title;
    
    /**
     * 
     * @var string
     */
    public string $url;
    
    /**
     * 
     * @var string
     */
    public string $icon;
    
    /**
     * 
     * @var MenuItem[]
     */
    public array $items = []; 
    
    /**
     * 
     * @var PermissionInterface[]
     */
    public array $permissions = [];
    
    /**
     * 
     * @param string $title
     * @param string $url
     * @param string $icon
     * @param array $permissions
     * @param array $items
     */
    public function __construct(string $title, string $url = '', string $icon = '', array $permissions = [], array $items = []) {
        $this->title        = $title;
        $this->url          = $url;
        $this->icon         = $icon;
        $this->permissions  = $permissions;
        $this->items        = $items;
    }
}
