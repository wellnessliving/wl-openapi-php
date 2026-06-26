<?php

namespace WlSdk\Wl\Search\Template\Menu;

/**
 * Response from GET
 */
class MenuGetResponse
{
    /**
     * List of saved search templates.
     *
     * @var MenuGetResponseSearchList|null
     */
    public ?MenuGetResponseSearchList $a_search_list = null;

    /**
     * Whether the menu is opened.
     *
     * @var bool|null
     */
    public ?bool $is_open = null;

    public function __construct(array $data)
    {
        $this->a_search_list = isset($data['a_search_list']) ? new MenuGetResponseSearchList((array)$data['a_search_list']) : null;
        $this->is_open = isset($data['is_open']) ? (bool)$data['is_open'] : null;
    }
}
