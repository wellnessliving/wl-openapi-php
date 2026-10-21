<?php

namespace WlSdk\Wl\Pay\Form\Surcharge;

use WlSdk\WlSdkClient;

/**
 * Previews whether a surcharge is allowed for a card.
 */
class SurchargeTender
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Previews whether a surcharge is allowed for a card.
     *
     * Called while the client is typing a card number, or has selected a saved card, so the browser can show the
     * correct total and lock the surcharge switch before the card is actually charged (SAL-1314 step 10).
     *
     * @return SurchargeTenderGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SurchargeTenderGetRequest $request): SurchargeTenderGetResponse
    {
        return new SurchargeTenderGetResponse($this->client->request('/Wl/Pay/Form/Surcharge/SurchargeTender.json', $request->params(), 'GET'));
    }
}
