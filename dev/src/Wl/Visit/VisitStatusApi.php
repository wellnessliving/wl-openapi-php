<?php
namespace WlSdk\Wl\Visit;

use WlSdk\WlSdkClient;

/**
 * Gets visit status.
 */
class VisitStatusApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The time zone key.
     * 
     * `null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The staff decision to charge (or not charge) a penalty when a client meets late cancel/no-show requirements.
     * 
     * If `true`, a late cancel fee should be charged. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_charge_fee = null;

    /**
     * The email pattern key.
     * If `null`, the live email pattern shouldn't be used.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    /**
     * The reason the visit was canceled.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    /**
     * The source of the visit or the visit change.
     * One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     * If you're unsure about the value to use, keep the default value.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The status of the visit.
     * One of the [VisitSid](#/components/schemas/Wl.Visit.VisitSid) constants.
     *
     * @var int|null
     */
    public ?int $id_visit = null;

    /**
     * The status of the visit from which the transition is made. One of the
     * [VisitSid](#/components/schemas/Wl.Visit.VisitSid) constants.
     * 
     * If the visit status is passed, it will be used to check with the actual status in the database.
     * If `null`, the visit hasn't yet passed.
     * 
     * If the status of this parameter is out of date, the API call will refresh it.
     *
     * @var int|null
     */
    public ?int $id_visit_from = null;

    /**
     * Whether to send email notification.
     * 
     * `true` - email notification will be sent.
     * `false` - email notification will not be sent.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether to send push notification.
     * 
     * `true` - push notification will be sent.
     * `false` - push notification will not be sent.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether to send sms notification.
     * 
     * `true` - sms notification will be sent.
     * `false` - sms notification will not be sent.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets visit status.
     *
     * Returns full details for the specified visit, including date, duration, staff, location,
     * virtual service join URL, assigned resources, downloadable calendar data, and whether
     * the visit can still be cancelled. Handles class, appointment, and gym visit types. Used
     * to render the visit detail view and action buttons in the client portal.
     *
     * @return VisitStatusApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): VisitStatusApiGetResponse
    {
        return new VisitStatusApiGetResponse($this->client->request('/Wl/Visit/VisitStatus.json', $this->params(), 'GET'));
    }

    /**
     * Changes visit status.
     *
     * Applies a status transition to the specified visit (for example, check-in, no-show, or
     * cancellation). Supports optimistic concurrency via an expected-from status, optional
     * late-cancel fee charging, and client notification flags. Requires backend access or
     * appropriate staff privileges.
     *
     * @return VisitStatusApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): VisitStatusApiPostResponse
    {
        return new VisitStatusApiPostResponse($this->client->request('/Wl/Visit/VisitStatus.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_timezone' => $this->k_timezone,
            'k_visit' => $this->k_visit,
            'is_charge_fee' => $this->is_charge_fee,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'text_reason' => $this->text_reason,
            'id_mode' => $this->id_mode,
            'id_visit' => $this->id_visit,
            'id_visit_from' => $this->id_visit_from,
            'is_mail' => $this->is_mail,
            'is_push' => $this->is_push,
            'is_sms' => $this->is_sms,
            ],
            static fn($v) => $v !== null
        );
    }
}
