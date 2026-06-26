<?php

namespace WlSdk\Wl\Business\Promote\Explorer;

/**
 * Response from POST
 */
class PromoteExplorerPostResponse
{
    /**
     * Explorer URL for the specified business/location.
     *
     * @var string|null
     */
    public ?string $url_explorer = null;

    public function __construct(array $data)
    {
        $this->url_explorer = isset($data['url_explorer']) ? (string)$data['url_explorer'] : null;
    }
}
