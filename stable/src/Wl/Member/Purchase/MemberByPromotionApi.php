<?php
namespace WlSdk\Wl\Member\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns active clients holding at least one active Purchase Option from the specified list.
 */
class MemberByPromotionApi
{
    /**
     * The key of the business for which to get a list of clients.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The comma-separated list of the Purchase Option keys.
     * Only active clients with at least one active Purchase Option from this list will be returned.
     * 
     * For example: '324,123,11,556'
     *
     * @var string|null
     */
    public ?string $s_promotion_keys = null;

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
     * @return MemberByPromotionApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): MemberByPromotionApiGetResponse
    {
        return new MemberByPromotionApiGetResponse($this->client->request('/Wl/Member/Purchase/MemberByPromotion.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_promotion_keys' => $this->s_promotion_keys,
            ],
            static fn($v) => $v !== null
        );
    }
}
