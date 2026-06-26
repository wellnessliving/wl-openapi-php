<?php

namespace WlSdk\Wl\Report\Mail;

use WlSdk\WlSdkClient;

/**
 * Calculates summary information about mail campaign.
 */
class PostcardSummary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates summary information about mail campaign.
     *
     * @return PostcardSummaryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PostcardSummaryGetRequest $request): PostcardSummaryGetResponse
    {
        return new PostcardSummaryGetResponse($this->client->request('/Wl/Report/Mail/PostcardSummary.json', $request->params(), 'GET'));
    }
}
