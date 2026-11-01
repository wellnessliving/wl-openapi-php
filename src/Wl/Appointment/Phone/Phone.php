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
     * The number of a visit is shown like the phone of the client:
     * to the client of the visit, to the user who booked it, to a WellnessLiving admin with the privilege
     * `rs.appointment.edit` and to staff of the business with the {@link \WlSdk\Wl\Privilege\PrivilegeSid}
     * privilege.
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
     * The number may be changed by the client of the visit and by the user who booked it, also if they are staff
     * of the
     * business (active or former), by a WellnessLiving admin with the privilege `rs.appointment.edit`, and by any
     * other
     * active staff member only for their own appointment and with the privilege to schedule future appointments.
     * The number of a cancelled visit may not be changed. After the appointment has started, only a WellnessLiving
     * admin and staff who may change the number as staff may change it; the client and the user who booked may
     * not.
     * The pencil to change the number in the client profile is shown by the same rule.
     * Returns the saved number in the international E.164 format.
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
