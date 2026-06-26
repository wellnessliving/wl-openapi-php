<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

use WlSdk\WlSdkClient;

/**
 * Gets customization form HTML content.
 */
class MailPatternLive
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets customization form HTML content.
     *
     * @return MailPatternLiveGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MailPatternLiveGetRequest $request): MailPatternLiveGetResponse
    {
        return new MailPatternLiveGetResponse($this->client->request('/Wl/Login/Promotion/Cancel/MailPatternLive.json', $request->params(), 'GET'));
    }

    /**
     * Creates live template.
     *
     * @return MailPatternLivePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MailPatternLivePostRequest $request): MailPatternLivePostResponse
    {
        return new MailPatternLivePostResponse($this->client->request('/Wl/Login/Promotion/Cancel/MailPatternLive.json', $request->params(), 'POST'));
    }
}
