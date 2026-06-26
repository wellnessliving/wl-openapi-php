<?php

namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class CatalogProductCheckGetResponse
{
    /**
     * Whether more products can be loaded.
     *
     * @var bool|null
     */
    public ?bool $is_client_selected = null;

    /**
     * Message to show in a popup.
     *
     * @var string|null
     */
    public ?string $s_message = null;

    public function __construct(array $data)
    {
        $this->is_client_selected = isset($data['is_client_selected']) ? (bool)$data['is_client_selected'] : null;
        $this->s_message = isset($data['s_message']) ? (string)$data['s_message'] : null;
    }
}
