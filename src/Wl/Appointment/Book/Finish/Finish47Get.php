<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Loads data to prepare client side to complete booking.
 */
class Finish47Get
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Loads data to prepare client side to complete booking.
     *
     * Returns notification settings (email, push, SMS) for the appointment creation confirmation
     *  so the client side can display the appropriate notification options before finalizing the booking.
     *
     * @return Finish47GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Finish47GetRequest $request): Finish47GetResponse
    {
        return new Finish47GetResponse($this->client->request('/Wl/Appointment/Book/Finish/Finish47.json', $request->params(), 'GET'));
    }
}
