<?php

namespace WlSdk\Wl\Appointment\Book\Block;

use WlSdk\WlSdkClient;

/**
 * Lists the add-ons that can be chosen for an appointment.
 */
class AddonList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lists the add-ons that can be chosen for an appointment.
     *
     * An add-on is listed if it is linked to the appointment and its service is active and allows to be an add-on.
     * The
     * list is empty if the appointment does not allow add-ons. An add-on that is booked by staff only is not
     * listed for
     * a client. The list does not look at the age, the type and the group of the client: an add-on that the client
     * is
     * not eligible for is found later, when the client is known. The regular price of an add-on is given only if
     * it is
     * struck through, that is, Show Discount is on, the price of the add-on is fixed and Extra cost is lower.
     *
     * @return AddonListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddonListGetRequest $request): AddonListGetResponse
    {
        return new AddonListGetResponse($this->client->request('/Wl/Appointment/Book/Block/AddonList.json', $request->params(), 'GET'));
    }
}
