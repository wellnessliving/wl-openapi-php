<?php

namespace WlSdk\Wl\Appointment\Book\Promote;

use WlSdk\WlSdkClient;

/**
 * Promotes a waitlisted visit to an active list for an appointment or asset.
 */
class AppointmentBookPromote
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Promotes a waitlisted visit to an active list for an appointment or asset.
     *
     * Validates that the caller has access to the business and location, that the specified visit
     *  is for an appointment book, and that its scheduled book slot is still available, then
     *  promotes the visit from the wait list. Updates
     *  {@link \WlSdk\Wl\Appointment\Book\Promote\AppointmentBookPromotePostResponse::$is_wait_confirm} with
     * whether the promoted visit is still
     *  awaiting client confirmation.
     *
     * @return AppointmentBookPromotePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AppointmentBookPromotePostRequest $request): AppointmentBookPromotePostResponse
    {
        return new AppointmentBookPromotePostResponse($this->client->request('/Wl/Appointment/Book/Promote/AppointmentBookPromote.json', $request->params(), 'POST'));
    }
}
