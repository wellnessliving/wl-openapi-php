<?php
namespace WlSdk\Wl\Login\Attendance\Add;

/**
 * Response from GET
 */
class AddGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_login_promotion = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_session_pass = null;

    /**
     * If `true`, the session is free with no methods of payment. If `false`, the session can be paid for.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

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

    /**
     * Account balance.
     *
     * @var string|null
     */
    public ?string $m_account = null;

    /**
     * The price of the session, including any taxes and discounts.
     * 
     * If `null`, the price of the session hasn't been loaded yet.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The user's account balance if they were charged the `m_price` amount.
     *
     * @var string|null
     */
    public ?string $m_rest = null;

    public function __construct(array $data)
    {
        $this->a_login_promotion = isset($data['a_login_promotion']) ? (array)$data['a_login_promotion'] : null;
        $this->a_session_pass = isset($data['a_session_pass']) ? (array)$data['a_session_pass'] : null;
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->m_account = isset($data['m_account']) ? (string)$data['m_account'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_rest = isset($data['m_rest']) ? (string)$data['m_rest'] : null;
    }
}
