<?php

namespace WlSdk\Wl\Profile\Overview;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class SendMail
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
     * @return SendMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SendMailPostRequest $request): SendMailPostResponse
    {
        return new SendMailPostResponse($this->client->request('/Wl/Profile/Overview/SendMail.json', $request->params(), 'POST'));
    }
}
