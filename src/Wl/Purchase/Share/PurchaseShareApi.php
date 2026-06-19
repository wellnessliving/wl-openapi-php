<?php
namespace WlSdk\Wl\Purchase\Share;

use WlSdk\WlSdkClient;

/**
 * Records the purchase share action and returns the social network sharing URL.
 */
class PurchaseShareApi
{
    /**
     * The social network. One of the [ASocialSid](#/components/schemas/ASocialSid) constants.
     *
     * @var int|null
     */
    public ?int $id_social = null;

    /**
     * The key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Records the purchase share action and returns the social network sharing URL.
     *
     * Validates that the caller owns the purchase, prevents duplicate share actions, saves the share record,
     * and returns the social network URL for sharing.
     *
     * @return PurchaseShareApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PurchaseShareApiPostResponse
    {
        return new PurchaseShareApiPostResponse($this->client->request('/Wl/Purchase/Share/PurchaseShare.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_social' => $this->id_social,
            'k_purchase' => $this->k_purchase,
            ],
            static fn($v) => $v !== null
        );
    }
}
