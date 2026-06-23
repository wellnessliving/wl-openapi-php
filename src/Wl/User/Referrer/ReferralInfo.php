<?php

namespace WlSdk\Wl\User\Referrer;

use WlSdk\WlSdkClient;

/**
 * Returns referral count, total referral points, and shareable referral link for the given user.
 */
class ReferralInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns referral count, total referral points, and shareable referral link for the given user.
     *
     * Computes result fields for the referrer identified:
     *  - number of invited referrals;
     *  - reward points earned for referral registrations;
     *  - the shareable invite link with the referrer's encrypted user key.
     *
     * @return ReferralInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReferralInfoGetRequest $request): ReferralInfoGetResponse
    {
        return new ReferralInfoGetResponse($this->client->request('/Wl/User/Referrer/ReferralInfo.json', $request->params(), 'GET'));
    }
}
