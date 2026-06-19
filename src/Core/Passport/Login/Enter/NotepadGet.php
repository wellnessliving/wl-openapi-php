<?php
namespace WlSdk\Core\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Generates notepad for user sign in form.
 */
class NotepadGet
{
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
     * @return NotepadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NotepadGetRequest $request): NotepadGetResponse
    {
        return new NotepadGetResponse($this->client->request('/Core/Passport/Login/Enter/Notepad.json', $request->params(), 'GET'));
    }
}
