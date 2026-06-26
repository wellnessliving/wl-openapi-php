<?php

namespace WlSdk\Wl\Contact\Member\History\Report\Filter;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Contact/Member/History/Report/Filter/NameFilterOption.json
 */
class NameFilterOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Contact/Member/History/Report/Filter/NameFilterOption.json.
     *
     * @return NameFilterOptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NameFilterOptionGetRequest $request): NameFilterOptionGetResponse
    {
        return new NameFilterOptionGetResponse($this->client->request('/Wl/Contact/Member/History/Report/Filter/NameFilterOption.json', $request->params(), 'GET'));
    }
}
