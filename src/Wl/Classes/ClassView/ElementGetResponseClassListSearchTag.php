<?php

namespace WlSdk\Wl\Classes\ClassView;

class ElementGetResponseClassListSearchTag
{
    /**
     * Search tag key.
     *
     * @var string|null
     */
    public ?string $k_search_tag = null;

    /**
     * Name of the tag.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_search_tag = isset($data['k_search_tag']) ? (string)$data['k_search_tag'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
