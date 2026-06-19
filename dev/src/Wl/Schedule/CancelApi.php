<?php
namespace WlSdk\Wl\Schedule;

use WlSdk\WlSdkClient;

/**
 * Cancels session for the client.
 */
class CancelApi
{
    /**
     * The date of the session in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * This will be `true` if the API is being used from the back end. Otherwise, this will be `false`.
     * Here, the back end refers to either a staff member or admin from the side of the business.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` is late cancel, `false` reservation is not late cancel.
     * This is required to enable late cancel even if the user is staff.
     *
     * @var bool|null
     */
    public ?bool $is_late_cancel = null;

    /**
     * The appointment key.
     * This will be `null` if not set yet or if a class or event is canceled.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of the business within which the action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     * This will be `null` if not set yet or if an appointment is canceled.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels session for the client.
     *
     * Cancels the specified appointment or class period for the given user. Staff and admin users
     * may cancel on behalf of any client; regular clients may only cancel their own bookings if
     * the visit is still in a cancellable state. Clears cached schedule data after a successful
     * class period cancellation.
     *
     * @return CancelApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CancelApiGetResponse
    {
        return new CancelApiGetResponse($this->client->request('/Wl/Schedule/Cancel.json', $this->params(), 'GET'));
    }

    /**
     * Cancels session for the client.
This method is an alias for partners using the API or SDK.
     *
     * Identical in behavior to `get()`; exists as a POST alias for partner
     * integrations that cannot issue GET requests.
     *
     * @return CancelApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): CancelApiPostResponse
    {
        return new CancelApiPostResponse($this->client->request('/Wl/Schedule/Cancel.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'is_backend' => $this->is_backend,
            'is_late_cancel' => $this->is_late_cancel,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
