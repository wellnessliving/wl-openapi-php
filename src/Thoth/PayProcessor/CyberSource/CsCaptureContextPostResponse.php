<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

/**
 * Response from POST
 */
class CsCaptureContextPostResponse
{
    /**
     * Microform Integration JavaScript library integrity property value.
     *
     * `null` until generated.
     *
     * @var string|null
     */
    public ?string $s_client_library_integrity = null;

    /**
     * Contents of the key.
     *
     * `null` until generated.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * ID of the key.
     *
     * `null` until generated.
     *
     * @var string|null
     */
    public ?string $s_key_id = null;

    /**
     * Microform Integration JavaScript library url.
     *
     * `null` until generated.
     *
     * @var string|null
     */
    public ?string $url_client_library = null;

    public function __construct(array $data)
    {
        $this->s_client_library_integrity = isset($data['s_client_library_integrity']) ? (string)$data['s_client_library_integrity'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->s_key_id = isset($data['s_key_id']) ? (string)$data['s_key_id'] : null;
        $this->url_client_library = isset($data['url_client_library']) ? (string)$data['url_client_library'] : null;
    }
}
