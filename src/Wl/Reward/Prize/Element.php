<?php
namespace WlSdk\Wl\Reward\Prize;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about redeemable prize item.
 */
class Element
{
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
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Reward/Prize/Element.json', $request->params(), 'GET'));
    }

    /**
     * Redeems selected prize.
     *
     * Deducts the required points from the user's reward balance and records the redemption, returning the key
     * of the created login prize record.
     *
     * @return ElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ElementPostRequest $request): ElementPostResponse
    {
        return new ElementPostResponse($this->client->request('/Wl/Reward/Prize/Element.json', $request->params(), 'POST'));
    }
}
