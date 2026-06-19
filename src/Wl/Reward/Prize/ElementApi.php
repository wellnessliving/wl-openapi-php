<?php
namespace WlSdk\Wl\Reward\Prize;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about redeemable prize item.
 */
class ElementApi
{
    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of redeemable prize.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

    /**
     * User to retrieve information about.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about redeemable prize item.
     *
     * Returns the point cost and description for the specified redeemable prize in the given business.
     *
     * @return ElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ElementApiGetResponse
    {
        return new ElementApiGetResponse($this->client->request('/Wl/Reward/Prize/Element.json', $this->params(), 'GET'));
    }

    /**
     * Redeems selected prize.
     *
     * Deducts the required points from the user's reward balance and records the redemption, returning the key
     * of the created login prize record.
     *
     * @return ElementApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ElementApiPostResponse
    {
        return new ElementApiPostResponse($this->client->request('/Wl/Reward/Prize/Element.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reward_prize' => $this->k_reward_prize,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
