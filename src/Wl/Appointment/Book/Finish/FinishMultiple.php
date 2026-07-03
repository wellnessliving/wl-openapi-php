<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Completes the appointment booking for one or more providers, optionally creating a new client.
 */
class FinishMultiple
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Completes the appointment booking for one or more providers, optionally creating a new client.
     *
     * Accepts booking details for one or more providers in
     * [FinishMultipleApi](/Wl/Appointment/Book/Finish/FinishMultiple.json),
     *  processes payment using the selected Purchase Option, creates appointment records, and sends
     *  booking confirmation notifications. A new client account can be created by supplying user
     *  details in [FinishMultipleApi](/Wl/Appointment/Book/Finish/FinishMultiple.json) when no UID is provided.
     *
     * @return FinishMultiplePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FinishMultiplePostRequest $request): FinishMultiplePostResponse
    {
        return new FinishMultiplePostResponse($this->client->request('/Wl/Appointment/Book/Finish/FinishMultiple.json', $request->params(), 'POST'));
    }
}
