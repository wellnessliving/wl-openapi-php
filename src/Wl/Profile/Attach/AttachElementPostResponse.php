<?php

namespace WlSdk\Wl\Profile\Attach;

/**
 * Response from POST
 */
class AttachElementPostResponse
{
    /**
     * Attachment key.
     *
     * @var string|null
     */
    public ?string $k_attach = null;

    public function __construct(array $data)
    {
        $this->k_attach = isset($data['k_attach']) ? (string)$data['k_attach'] : null;
    }
}
