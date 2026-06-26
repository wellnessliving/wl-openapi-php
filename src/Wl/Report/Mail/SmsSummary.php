<?php

namespace WlSdk\Wl\Report\Mail;

use WlSdk\WlSdkClient;

/**
 * Calculates available amount of messages.
 */
class SmsSummary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates available amount of messages.
     *
     * @return SmsSummaryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SmsSummaryGetRequest $request): SmsSummaryGetResponse
    {
        return new SmsSummaryGetResponse($this->client->request('/Wl/Report/Mail/SmsSummary.json', $request->params(), 'GET'));
    }
}
