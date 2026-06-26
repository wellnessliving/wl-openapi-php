<?php

namespace WlSdk\Wl\Profile\Attach;

/**
 * Response from GET
 */
class ProfileAttachGetResponse
{
    /**
     * List of attaches.
     *
     * @var array[]|null
     */
    public ?array $a_attach = null;

    public function __construct(array $data)
    {
        $this->a_attach = isset($data['a_attach']) ? (array)$data['a_attach'] : null;
    }
}
