<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Loads data to prepare client side to complete booking.
 *
 * @deprecated
 */
class FinishGet
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
     * @return FinishGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FinishGetRequest $request): FinishGetResponse
    {
        return new FinishGetResponse($this->client->request('/Wl/Appointment/Book/Finish/Finish.json', $request->params(), 'GET'));
    }
}
