<?php
namespace WlSdk\Wl\Appointment\Book\Purchase;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about available purchase options.
 */
class Purchase
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of information about available purchase options.
     *
     * Returns all Purchase Options (memberships, packages, passes) the given client can use to pay for
     *  the specified appointment at the given location, including pricing details and eligibility status.
     *  Also returns options that can be purchased on the spot during booking.
     *
     * @deprecated Use {@link Wl\Appointment\Book\Purchase\Purchase72Api} instead.
     *
     * @return PurchaseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseGetRequest $request): PurchaseGetResponse
    {
        return new PurchaseGetResponse($this->client->request('/Wl/Appointment/Book/Purchase/Purchase.json', $request->params(), 'GET'));
    }
}
