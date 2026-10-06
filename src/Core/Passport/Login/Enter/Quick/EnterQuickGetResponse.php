<?php

namespace WlSdk\Core\Passport\Login\Enter\Quick;

/**
 * Response from GET
 */
class EnterQuickGetResponse
{
    /**
     * Protected link to sign in.
     *
     * @var string|null
     */
    public ?string $url_enter = null;

    public function __construct(array $data)
    {
        $this->url_enter = isset($data['url_enter']) ? (string)$data['url_enter'] : null;
    }
}
