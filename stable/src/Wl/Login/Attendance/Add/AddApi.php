<?php
namespace WlSdk\Wl\Login\Attendance\Add;

use WlSdk\WlSdkClient;

/**
 * Gets information about ability of user to pay for given session in any ways.
 */
class AddApi
{
    /**
     * The start date and time of the class in GMT and MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date_global = null;

    /**
     * Key of the business in which the request must be processed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The client user key.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    /**
     * Defines whether only single session can be booked for block event.
     * 
     * `true` Only current session of the block event will be booked in a case if staff event has appropriate
     * setting to do this action.
     *   In this case this session will be considered as session out of event block.
     * `false` all available event sessions will be booked.
     *   In this case session will be considered as part of event block.
     *
     * @var bool|null
     */
    public ?bool $is_event_single = null;

    /**
     * Determines how the payment was handled for the session.
     * One of the [AddOptionSid](#/components/schemas/Wl.Login.Attendance.AddOptionSid) constants.
     *
     * @var int|null
     */
    public ?int $id_add_option = null;

    /**
     * Determines how the session was booked.
     * One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     * We recommend using the `WEB_BACKEND` value.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The key of the user's promotion to be used for booking.
     * If empty, use any suitable user's promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of a session pass that can be used for a single session payment.
     * If no such payment is available, `0` will be returned.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about ability of user to pay for given session in any ways.
     *
     * Returns available Purchase Options and session passes that can be used to pay for the specified class
     * session,
     * along with the session price, the client's account balance, and whether the session is free.
     *
     * @return AddApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AddApiGetResponse
    {
        return new AddApiGetResponse($this->client->request('/Wl/Login/Attendance/Add/Add.json', $this->params(), 'GET'));
    }

    /**
     * Adds client to attendance list.
     *
     * Books the specified client into the given class session using the chosen payment option (debit, Purchase
     * Option,
     * session pass, or unpaid), and returns the resulting visit key, visit status, and a store URL if payment is
     * still
     * required.
     *
     * @return AddApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AddApiPostResponse
    {
        return new AddApiPostResponse($this->client->request('/Wl/Login/Attendance/Add/Add.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date_global' => $this->dt_date_global,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid_client' => $this->uid_client,
            'is_event_single' => $this->is_event_single,
            'id_add_option' => $this->id_add_option,
            'id_mode' => $this->id_mode,
            'k_login_promotion' => $this->k_login_promotion,
            'k_session_pass' => $this->k_session_pass,
            ],
            static fn($v) => $v !== null
        );
    }
}
