<?php

namespace WlSdk\Social\Google\Plus;

class LoginPostRequest
{
    /**
     * The application id.
     *
     * When application not passed, credential loaded from the application, which makes the request,
     * used {@link \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract} for load the credential.
     * For set credential need used {@link \WlSdk\Core\Request\Api\Application\Credential\Credential} and set
     * {@link \WlSdk\Core\Request\Api\Application\Credential\Credential} to {@link
     * \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract}.
     *
     * When application passed, the credential loaded by application id.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * The Google server authorization code.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    public function params(): array
    {
        return array_filter(
            [
            's_application' => $this->s_application,
            's_code' => $this->s_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
