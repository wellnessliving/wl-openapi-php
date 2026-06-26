<?php

namespace WlSdk\Wl\Business\Partner\Contest;

use WlSdk\WlSdkClient;

/**
 * Update a contest.
 */
class PartnerContest
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Update a contest.
     *
     * @return PartnerContestPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PartnerContestPostRequest $request): PartnerContestPostResponse
    {
        return new PartnerContestPostResponse($this->client->request('/Wl/Business/Partner/Contest/PartnerContest.json', $request->params(), 'POST'));
    }
}
