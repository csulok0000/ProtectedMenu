<?php

/**
 * 
 * @author Tibor Csik <csulok0000@gmail.com>
 */

namespace Csulok0000\ProtectedMenu;

interface PermissionInterface {
    
    /**
     * 
     * @return mixed
     */
    public function getId(): mixed;
    
    /**
     * 
     * @return string
     */
    public function getName(): string;
    
    /**
     * 
     * @return string
     */
    public function getType(): string;
}
