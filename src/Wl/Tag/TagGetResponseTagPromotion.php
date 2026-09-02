<?php

namespace WlSdk\Wl\Tag;

class TagGetResponseTagPromotion
{
    /**
     * The promotion key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Whether the tag is the primary revenue category for the promotion.
     *
     * @var bool|null
     */
    public ?bool $is_primary = null;

    /**
     * The promotion title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->is_primary = isset($data['is_primary']) ? (bool)$data['is_primary'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
