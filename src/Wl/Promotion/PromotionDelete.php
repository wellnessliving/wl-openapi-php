<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Soft-deletes the specified promotion if it has no associated sales.
 */
class PromotionDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Soft-deletes the specified promotion if it has no associated sales.
     *
     * Validates staff privileges and checks that the promotion has not been sold before marking it as removed.
     *
     * @return PromotionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PromotionDeleteRequest $request): PromotionDeleteResponse
    {
        return new PromotionDeleteResponse($this->client->request('/Wl/Promotion/Promotion.json', $request->params(), 'DELETE'));
    }
}
