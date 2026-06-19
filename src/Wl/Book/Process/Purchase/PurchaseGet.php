<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns available purchase options, existing client promotions, session passes, and prizes for the specified
 * session.
 *
 * @deprecated
 */
class PurchaseGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns available purchase options, existing client promotions, session passes, and prizes for the specified session.
     *
     * Loads all purchase options that can be used to book the specified class period for the given user, including
     * existing login promotions with remaining session counts, new purchasable options, reward prizes, and login
     * prizes.
     * Returns pricing, image, program category, and availability data for each option.
     *
     * @return PurchaseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseGetRequest $request): PurchaseGetResponse
    {
        return new PurchaseGetResponse($this->client->request('/Wl/Book/Process/Purchase/Purchase.json', $request->params(), 'GET'));
    }
}
