<?php
namespace WlSdk\Core\Passport\User\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if email address exists.
 */
class EmailExistApi
{
    /**
     * The email address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if email address exists.
     *
     * Used in registration and "forgot password" flows to give immediate feedback before the user submits
     * the full form. Returns `true` if a user account with the given email already exists, so the frontend
     * can prompt to sign in instead of registering.
     *
     * @return EmailExistApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): EmailExistApiGetResponse
    {
        return new EmailExistApiGetResponse($this->client->request('/Core/Passport/User/Email/EmailExist.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_email' => $this->text_email,
            ],
            static fn($v) => $v !== null
        );
    }
}
