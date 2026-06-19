<?php
namespace WlSdk\Wl\Business\Claim;

/**
 * Response from POST
 */
class BusinessClaimPostResponse
{
    /**
     * Location microsite URL.
     *
     * @var string|null
     */
    public ?string $url_microsite = null;

    public function __construct(array $data)
    {
        $this->url_microsite = isset($data['url_microsite']) ? (string)$data['url_microsite'] : null;
    }
}
