<?php

namespace WlSdk\Wl\Search\Template\Menu;

class MenuGetResponseSearchList
{
    /**
     * Whether this template is used as default template.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Template key. Primary key in the SearchTemplateSql table.
     *
     * @var string|null
     */
    public ?string $k_search_template = null;

    /**
     * Search template title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->k_search_template = isset($data['k_search_template']) ? (string)$data['k_search_template'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
