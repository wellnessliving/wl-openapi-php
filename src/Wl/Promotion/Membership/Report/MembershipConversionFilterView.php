<?php

namespace WlSdk\Wl\Promotion\Membership\Report;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Promotion/Membership/Report/MembershipConversionFilterView.json
 */
class MembershipConversionFilterView
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Promotion/Membership/Report/MembershipConversionFilterView.json.
     *
     * @return MembershipConversionFilterViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MembershipConversionFilterViewGetRequest $request): MembershipConversionFilterViewGetResponse
    {
        return new MembershipConversionFilterViewGetResponse($this->client->request('/Wl/Promotion/Membership/Report/MembershipConversionFilterView.json', $request->params(), 'GET'));
    }
}
