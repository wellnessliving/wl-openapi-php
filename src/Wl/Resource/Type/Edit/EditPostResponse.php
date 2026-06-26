<?php

namespace WlSdk\Wl\Resource\Type\Edit;

/**
 * Response from POST
 */
class EditPostResponse
{
    /**
     * ID of asset category. Primary key in RsResourceTypeSql table.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * URL to edit asset category layout.
     *
     * @var string|null
     */
    public ?string $url_layout = null;

    /**
     * URL to create new asset of asset category.
     *
     * @var string|null
     */
    public ?string $url_resource_create = null;

    public function __construct(array $data)
    {
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->url_layout = isset($data['url_layout']) ? (string)$data['url_layout'] : null;
        $this->url_resource_create = isset($data['url_resource_create']) ? (string)$data['url_resource_create'] : null;
    }
}
