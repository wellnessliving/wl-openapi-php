<?php
namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Checks whether the user can complete booking wizard without additional steps.
 */
class InfoCanCompleteApi
{
    /**
     * A list of sessions of an event that can be booked together.
     * 
     * This is the same as `a_session_select_post`, but limited by query string
     * length and might fail if the user is booking more than 50 sessions at once.
     * Therefore, using the POST method is preferable.
     *
     * @var array[]|null
     */
    public ?array $a_session_select = null;

    /**
     * The date and time of the session that the user is booking, returned in MySQL format and in GMT.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * Key of the business in which the booking is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period ID that the user started to book.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The unique booking process key.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * The key of a user who is making the booking.
     * Empty if user is a guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_session_select_post = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether the user can complete booking wizard without additional steps.
     *
     * Copies the GET session selection into the POST field and delegates to `post()`.
     * Prefer the POST variant when the session list may be large, as the query string has length limitations.
     *
     * @deprecated
     *
     * @return InfoCanCompleteApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): InfoCanCompleteApiGetResponse
    {
        return new InfoCanCompleteApiGetResponse($this->client->request('/Wl/Book/Process/Info/InfoCanComplete.json', $this->params(), 'GET'));
    }

    /**
     * Checks whether the user can complete booking wizard without additional steps.
     *
     * Performs a dry-run booking attempt for the given class period, date, and session selection to determine
     * whether the client can finalize the booking directly from the info step without proceeding to the payment
     * or purchase-option steps.
     *
     * @return InfoCanCompleteApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): InfoCanCompleteApiPostResponse
    {
        return new InfoCanCompleteApiPostResponse($this->client->request('/Wl/Book/Process/Info/InfoCanComplete.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_session_select' => $this->a_session_select,
            'dt_date_gmt' => $this->dt_date_gmt,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_id' => $this->s_id,
            'uid' => $this->uid,
            'a_session_select_post' => $this->a_session_select_post,
            ],
            static fn($v) => $v !== null
        );
    }
}
