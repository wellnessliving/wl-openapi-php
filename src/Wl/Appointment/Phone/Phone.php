<?php

namespace WlSdk\Wl\Appointment\Phone;

use WlSdk\WlSdkClient;

/**
 * Returns the number of the visit or the default number for a future booking.
 */
class Phone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the number of the visit or the default number for a future booking.
     *
     * The number of a visit is available to a WellnessLiving admin with the privilege `rs.appointment.edit`,
     * to a non-staff user who is the client of the visit or who booked it, and to an active staff member only for
     * their own appointment and with the privilege to schedule future appointments. Former staff have no access.
     * The default number for a future booking is available to a user with the {@link
     * \WlSdk\Wl\Privilege\PrivilegeSid}
     * privilege for the client. The number is returned in the international E.164 format.
     *
     * @return PhoneGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PhoneGetRequest $request): PhoneGetResponse
    {
        return new PhoneGetResponse($this->client->request('/Wl/Appointment/Phone/Phone.json', $request->params(), 'GET'));
    }

    /**
     * Changes the number of the visit.
     *
     * The same users have access as for reading the number of a visit. Only staff may change the number after
     * the appointment has started. Returns the saved number in the international E.164 format.
     *
     * @return PhonePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PhonePutRequest $request): PhonePutResponse
    {
        return new PhonePutResponse($this->client->request('/Wl/Appointment/Phone/Phone.json', $request->params(), 'PUT'));
    }
}
