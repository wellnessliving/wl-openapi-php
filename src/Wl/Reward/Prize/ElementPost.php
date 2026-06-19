<?php
namespace WlSdk\Wl\Reward\Prize;

use WlSdk\WlSdkClient;

/**
 * Redeems selected prize.
 */
class ElementPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
