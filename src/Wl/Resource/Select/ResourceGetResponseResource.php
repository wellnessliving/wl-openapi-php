<?php

namespace WlSdk\Wl\Resource\Select;

class ResourceGetResponseResource
{
    /**
     * Whether resource is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Resource identifier, primary key in RsResourceSql.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Resource name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
