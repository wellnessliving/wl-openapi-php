<?php

namespace WlSdk\Wl\Appointment\Book\Block;

use WlSdk\WlSdkClient;

/**
 * Finds the selected add-ons that the client is not eligible for.
 */
class Eligible
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds the selected add-ons that the client is not eligible for.
     *
     * Each add-on is checked under the restrictions of its own, independent of the appointment: the age of the
     * client,
     * the type and the group of the client, and the sale online. The client or the staff member who books for him
     * removes only these add-ons from the booking, after telling the booker. The appointment and the other add-ons
     * stay. A guest is not checked, because nothing is known about him before he signs in.
     *
     * @return EligibleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EligibleGetRequest $request): EligibleGetResponse
    {
        return new EligibleGetResponse($this->client->request('/Wl/Appointment/Book/Block/Eligible.json', $request->params(), 'GET'));
    }
}
