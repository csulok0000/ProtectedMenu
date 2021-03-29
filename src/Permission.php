<?php

/**
 * 
 * @author Tibor Csik <csulok0000@gmail.com>
 */

namespace Csulok0000\ProtectedMenu;

use Csulok0000\ProtectedMenu\AbstractPermission;

class Permission extends AbstractPermission {
    
    /**
     * 
     * @param mixed $id
     * @param string $name
     */
    public function __construct(mixed $id, string $name) {
        parent::__construct($id, $name, 'permission');
    }
}
