<?php
namespace WlSdk\Wl\Purchase\Share;

/**
 * Response from POST
 */
class PurchaseSharePostResponse
{
    /**
     * The URL to the sharing page.
     *
     * @var string|null
     */
    public ?string $url_share = null;

    public function __construct(array $data)
    {
        $this->url_share = isset($data['url_share']) ? (string)$data['url_share'] : null;
    }
}
