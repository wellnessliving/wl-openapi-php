<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Completes the appointment booking and processes payment for the client.
 *
 * @deprecated
 */
class FinishPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Completes the appointment booking and processes payment for the client.
     *
     * Delegates to `post()` to handle a single appointment booking, mapping
     *  the legacy single-provider request fields to the multi-provider format. Creates an appointment
     *  record, applies the selected Purchase Option, and sends the booking confirmation notification.
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
