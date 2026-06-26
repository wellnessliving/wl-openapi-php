<?php

namespace WlSdk\Wl\Field\Config;

/**
 * Response from POST
 */
class FieldPostResponse
{
    /**
     * Field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    public function __construct(array $data)
    {
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
    }
}
