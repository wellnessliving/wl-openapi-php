<?php
namespace WlSdk\Wl\Login\Agree;

use WlSdk\WlSdkClient;

/**
 * Saves the user's agreement to the online waiver.
 */
class AgreePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the user's agreement to the online waiver.
     *
     * Accepts the user's base64-encoded signature image and an optional electronic-signature consent flag,
     * validates
     * both, records the agreement date and signature in the database, and sends a waiver confirmation
     * notification.
     *
     * @return AgreePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AgreePostRequest $request): AgreePostResponse
    {
        return new AgreePostResponse($this->client->request('/Wl/Login/Agree/Agree.json', $request->params(), 'POST'));
    }
}
