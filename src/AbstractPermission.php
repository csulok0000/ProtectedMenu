<?php

/**
 * 
 * @author Tibor Csik <csulok0000@gmail.com>
 */

namespace Csulok0000\ProtectedMenu;

use Csulok0000\ProtectedMenu\PermissionInterface;

abstract class AbstractPermission implements PermissionInterface {
    
    /**
     * 
     * @var mixed
     */
    private mixed $id;
    
    /**
     * 
     * @var string
     */
    private string $name;
    
    /**
     * 
     * @var string
     */
    private string $type;
    
    /**
     * 
     * @param mixed $id
     * @param string $name
     * @param string $type
     */
    public function __construct(mixed $id, string $name, string $type) {
        $this->id   = $id;
        $this->name = $name;
        $this->type = $type;
    }
    
    /**
     * 
     * @return mixed
     */
    public function getId(): mixed {
        return $this->id;
    }
    
    /**
     * 
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
    
    /**
     * 
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }
}
