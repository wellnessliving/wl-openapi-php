<?php

namespace WlSdk\Wl\Html\Menu;

/**
 * Response from GET
 */
class MenuGetResponse
{
    /**
     * Menu list or an empty array if the menu for the specified unit could not be loaded
     * or user does not have enough privileges.
     *
     * @var array|null
     */
    public ?array $a_menu = null;

    public function __construct(array $data)
    {
        $this->a_menu = isset($data['a_menu']) ? (array)$data['a_menu'] : null;
    }
}
