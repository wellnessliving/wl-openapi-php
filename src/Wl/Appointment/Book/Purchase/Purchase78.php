<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about available purchase options.
 */
class Purchase78
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
     * Extends `get()` to price an appointment that is booked as an add-on of another appointment.
     * The price of such an appointment is Extra cost that the add-on has for its parent appointment. The regular
     * price of
     * the add-on is given as the old price if the add-on shows its discount and Extra cost is lower than the
     * regular price.
     * An add-on is a service only, and it can not require a deposit.
     *
     * @return Purchase78GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Purchase78GetRequest $request): Purchase78GetResponse
    {
        return new Purchase78GetResponse($this->client->request('/Wl/Appointment/Book/Purchase/Purchase78.json', $request->params(), 'GET'));
    }
}
