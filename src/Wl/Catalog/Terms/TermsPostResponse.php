<?php

namespace WlSdk\Wl\Catalog\Terms;

/**
 * Response from POST
 */
class TermsPostResponse
{
    /**
     * Link to the catalog list. Set only if the cart became empty after
     * {@link \WlSdk\Wl\Catalog\Terms\TermsActionSid}, an empty string otherwise.
     *
     * @var string|null
     */
    public ?string $url_list = null;

    public function __construct(array $data)
    {
        $this->url_list = isset($data['url_list']) ? (string)$data['url_list'] : null;
    }
}
