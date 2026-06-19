<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Loads data to prepare client side to complete booking.
 */
class Finish
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
     * @deprecated Use {@link Wl\Appointment\Book\Finish\Finish47Api} instead.
     *
     * @return FinishGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FinishGetRequest $request): FinishGetResponse
    {
        return new FinishGetResponse($this->client->request('/Wl/Appointment/Book/Finish/Finish.json', $request->params(), 'GET'));
    }

    /**
     * Completes the appointment booking and processes payment for the client.
     *
     * Delegates to `post()` to handle a single appointment booking, mapping
     *  the legacy single-provider request fields to the multi-provider format. Creates an appointment
     *  record, applies the selected Purchase Option, and sends the booking confirmation notification.
     *
     * @deprecated Use {@link Wl\Appointment\Book\Finish\Finish47Api} instead.
     *
     * @return FinishPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FinishPostRequest $request): FinishPostResponse
    {
        return new FinishPostResponse($this->client->request('/Wl/Appointment/Book/Finish/Finish.json', $request->params(), 'POST'));
    }
}
