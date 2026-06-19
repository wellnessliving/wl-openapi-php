<?php
namespace WlSdk\Wl\Member\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns active clients holding at least one active Purchase Option from the specified list.
 */
class MemberByPromotionGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns active clients holding at least one active Purchase Option from the specified list.
     *
     * Accepts a comma-separated list of Purchase Option keys, validates them against the business, and returns
     * all active clients who hold at least one non-expired, non-limited Purchase Option from that list.
     * Clients to which the currently signed-in user has no profile access are excluded from the result.
     *
     * @return MemberByPromotionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MemberByPromotionGetRequest $request): MemberByPromotionGetResponse
    {
        return new MemberByPromotionGetResponse($this->client->request('/Wl/Member/Purchase/MemberByPromotion.json', $request->params(), 'GET'));
    }
}
