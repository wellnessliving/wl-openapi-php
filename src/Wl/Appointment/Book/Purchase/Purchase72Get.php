<?php
namespace WlSdk\Wl\Appointment\Book\Purchase;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about available purchase options.
 */
class Purchase72Get
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
     * Extends `get()` to also support rescheduling an existing appointment by
     *  accepting an optional appointment key. When a key is provided, the existing appointment is
     *  validated and its current Purchase Option usage is taken into account when calculating
     *  eligibility for available options.
     *
     * @return Purchase72GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Purchase72GetRequest $request): Purchase72GetResponse
    {
        return new Purchase72GetResponse($this->client->request('/Wl/Appointment/Book/Purchase/Purchase72.json', $request->params(), 'GET'));
    }
}
