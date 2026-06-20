<?php

namespace WlSdk\Wl\Lead;

class LeadGetResponseFieldListItem
{
    /**
     * The option ID.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * The option title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
