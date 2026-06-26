<?php

namespace WlSdk\Wl\Lead;

use WlSdk\WlSdkClient;

/**
 * Creates or edits a custom source lead.
 */
class LeadPage
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or edits a custom source lead.
     *
     * @return LeadPagePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadPagePostRequest $request): LeadPagePostResponse
    {
        return new LeadPagePostResponse($this->client->request('/Wl/Lead/LeadPage.json', $request->params(), 'POST'));
    }
}
