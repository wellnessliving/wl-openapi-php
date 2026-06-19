<?php
namespace WlSdk\Core\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Generates notepad for user sign in form.
 */
class NotepadApi
{
    /**
     * User login.
     * 
     * If specified, additional information about user may be returned such as datacenter of the user.
     * 
     * This value is only considered when
     * [AmazonRegionSid::currentId()](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) is not empty,
     * and [AmazonRegionSid::isRegionFixed()](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) returns
     * `false`.
     * In this case, regional cookie may be set, and the request may be forwarded internally to a different
     * datacenter.
     * 
     * `null` if additional information is not needed.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * The session type to store the notepad in.
     * 
     * This will be an empty string for a temporary session. Otherwise, you can use `system` for a system session.
     *
     * @var string|null
     */
    public ?string $s_type = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates notepad for user sign in form.
     *
     * Generates a cryptographic nonce (one-time random string) and stores it in the session so that the
     * client can hash the user's password with it before sending it to
     * [EnterApi](/Core/Passport/Login/Enter/Enter.json). This prevents
     * replay attacks and avoids transmitting passwords in plain text.
     *
     * @return NotepadApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): NotepadApiGetResponse
    {
        return new NotepadApiGetResponse($this->client->request('/Core/Passport/Login/Enter/Notepad.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            's_login' => $this->s_login,
            's_type' => $this->s_type,
            ],
            static fn($v) => $v !== null
        );
    }
}
