<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

/**
 * Response from POST
 */
class NuveiOpenOrderPostResponse
{
    /**
     * Key of payment transaction that was created.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Payment amount.
     *
     * `null` in case when not initialized yet. A subclass under the SAL-1314 rule
     * (SurchargeCardTypeRule) may correct this to exclude a surcharge the
     * caller was not allowed to post, so a stale client that still posts one gets the corrected total back (D7)
     * instead of a rejected request.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Surcharge amount.
     *
     * `null` in case when not initialized yet, empty string or null for zero surcharge amount. See
     * AbstractTransactionStartupApi::$m_amount about a subclass correcting this value (SAL-1314).
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * The order ID provided by Nuvei.
     *
     * `null` in case of errors.
     *
     * @var string|null
     */
    public ?string $s_nuvei_order = null;

    /**
     * The session identifier to be used by the request that processes the newly opened order.
     *
     * `null` in case of errors.
     *
     * @var string|null
     */
    public ?string $s_nuvei_session = null;

    /**
     * Error message.
     *
     * `null` in case response has not received yet or request is not failed.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->s_nuvei_order = isset($data['s_nuvei_order']) ? (string)$data['s_nuvei_order'] : null;
        $this->s_nuvei_session = isset($data['s_nuvei_session']) ? (string)$data['s_nuvei_session'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
