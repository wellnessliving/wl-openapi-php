<?php

namespace WlSdk\Wl\Profile\Purchase;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class Mail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * @return MailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MailPostRequest $request): MailPostResponse
    {
        return new MailPostResponse($this->client->request('/Wl/Profile/Purchase/Mail.json', $request->params(), 'POST'));
    }
}
