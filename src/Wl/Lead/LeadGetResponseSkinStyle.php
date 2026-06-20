<?php

namespace WlSdk\Wl\Lead;

class LeadGetResponseSkinStyle
{
    /**
     * Compiled CSS style block string.
     *
     * @var string|null
     */
    public ?string $s_style = null;

    /**
     * Name of the skin value this style block belongs to.
     *
     * @var string|null
     */
    public ?string $s_value_name = null;

    public function __construct(array $data)
    {
        $this->s_style = isset($data['s_style']) ? (string)$data['s_style'] : null;
        $this->s_value_name = isset($data['s_value_name']) ? (string)$data['s_value_name'] : null;
    }
}
