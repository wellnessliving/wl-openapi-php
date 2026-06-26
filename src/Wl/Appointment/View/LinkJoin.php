<?php

namespace WlSdk\Wl\Appointment\View;

use WlSdk\WlSdkClient;

/**
 * Changes url join for virtual appointment.
 */
class LinkJoin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes url join for virtual appointment.
     *
     * @return LinkJoinPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LinkJoinPostRequest $request): LinkJoinPostResponse
    {
        return new LinkJoinPostResponse($this->client->request('/Wl/Appointment/View/LinkJoin.json', $request->params(), 'POST'));
    }
}
