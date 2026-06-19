<?php
namespace WlSdk\Wl\Appointment\Edit;

use WlSdk\WlSdkClient;

/**
 * Return data about appointment's add-ons.
 */
class AddonUpdateApi
{
    /**
     * List of user keys to get add-ons for. Not empty only when getting add-ons for new appointment
     * (`k_appointment` is null). User key '-1' means walk-in, user key '0' means new user
     * (user will be created together with appointment).
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The business key. This will be an empty string if not set yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     * Not empty only when getting add-ons for new appointment (`k_appointment` is null).
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Service key.
     * Not empty only when getting add-ons for new appointment (`k_appointment` is null).
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $a_addon = null;

    /**
     * Determines whether the appointment duration needs to be updated.
     *
     * @var bool|null
     */
    public ?bool $is_duration_update = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Return data about appointment's add-ons.
     *
     * Returns the current list of add-ons attached to the specified appointment along with the full
     *  catalog of available add-ons for the service. The caller must have view access to the appointment.
     *
     * @return AddonUpdateApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AddonUpdateApiGetResponse
    {
        return new AddonUpdateApiGetResponse($this->client->request('/Wl/Appointment/Edit/AddonUpdate.json', $this->params(), 'GET'));
    }

    /**
     * Replaces the add-ons for the appointment with the provided list, optionally updating the appointment duration.
     *
     * Removes all existing add-ons from the appointment and attaches the provided set in their place.
     *  When add-ons with a duration are included, the appointment end time is recalculated accordingly.
     *  The operation runs inside a database transaction to ensure consistency.
     *
     * @return AddonUpdateApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): AddonUpdateApiPutResponse
    {
        return new AddonUpdateApiPutResponse($this->client->request('/Wl/Appointment/Edit/AddonUpdate.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'a_addon' => $this->a_addon,
            'is_duration_update' => $this->is_duration_update,
            ],
            static fn($v) => $v !== null
        );
    }
}
