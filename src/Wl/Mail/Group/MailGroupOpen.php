<?php

namespace WlSdk\Wl\Mail\Group;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Group/MailGroupOpen.json
 */
class MailGroupOpen
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Mail/Group/MailGroupOpen.json.
     *
     * @return MailGroupOpenPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MailGroupOpenPostRequest $request): MailGroupOpenPostResponse
    {
        return new MailGroupOpenPostResponse($this->client->request('/Wl/Mail/Group/MailGroupOpen.json', $request->params(), 'POST'));
    }
}
