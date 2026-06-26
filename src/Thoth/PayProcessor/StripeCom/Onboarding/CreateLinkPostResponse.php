<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Onboarding;

/**
 * Response from POST
 */
class CreateLinkPostResponse
{
    /**
     * URL to redirect user to Stripe dashboard to upload documents.
     *
     * @var string|null
     */
    public ?string $url_account = null;

    public function __construct(array $data)
    {
        $this->url_account = isset($data['url_account']) ? (string)$data['url_account'] : null;
    }
}
