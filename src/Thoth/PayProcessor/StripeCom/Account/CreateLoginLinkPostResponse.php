<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Account;

/**
 * Response from POST
 */
class CreateLoginLinkPostResponse
{
    /**
     * URL to the Express Dashboard login page.
     *
     * @var string|null
     */
    public ?string $url_login = null;

    public function __construct(array $data)
    {
        $this->url_login = isset($data['url_login']) ? (string)$data['url_login'] : null;
    }
}
