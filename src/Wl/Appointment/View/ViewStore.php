<?php

namespace WlSdk\Wl\Appointment\View;

use WlSdk\WlSdkClient;

/**
 * Loads information about amounts that must be paid for an appointment.
 */
class ViewStore
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Loads information about amounts that must be paid for an appointment.
     *
     * Checks that the caller may view the appointment - either the client who booked it, or a staff member
     *  with the corresponding privilege - and that the appointment belongs to the specified business. Fills
     *  `a_item` with the price of the service or resource (or its default promotion, if one applies),
     *  a deposit item when only a deposit is charged, and a paid and an unpaid item for every add-on product
     *  of the appointment.
     *
     * @return ViewStoreGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ViewStoreGetRequest $request): ViewStoreGetResponse
    {
        return new ViewStoreGetResponse($this->client->request('/Wl/Appointment/View/ViewStore.json', $request->params(), 'GET'));
    }
}
