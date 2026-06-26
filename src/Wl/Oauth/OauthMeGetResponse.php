<?php

namespace WlSdk\Wl\Oauth;

/**
 * Response from GET
 */
class OauthMeGetResponse
{
    /**
     * Email of the current user.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Name of the current user.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function __construct(array $data)
    {
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
    }
}
