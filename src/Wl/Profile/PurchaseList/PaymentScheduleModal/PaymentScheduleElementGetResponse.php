<?php

namespace WlSdk\Wl\Profile\PurchaseList\PaymentScheduleModal;

/**
 * Response from GET
 */
class PaymentScheduleElementGetResponse
{
    /**
     * Information about On Hold schedule item in future.
     *
     * @var array|null
     */
    public ?array $a_onhold_future = null;

    /**
     * Information about On Hold schedule item in past.
     *
     * @var array|null
     */
    public ?array $a_onhold_past = null;

    /**
     * Schedule item information.
     *
     * @var array|null
     */
    public ?array $a_schedule = null;

    /**
     * Note message about promotion cancelled due to sent to collections.
     *
     * @var string|null
     */
    public ?string $text_collected_note = null;

    public function __construct(array $data)
    {
        $this->a_onhold_future = isset($data['a_onhold_future']) ? (array)$data['a_onhold_future'] : null;
        $this->a_onhold_past = isset($data['a_onhold_past']) ? (array)$data['a_onhold_past'] : null;
        $this->a_schedule = isset($data['a_schedule']) ? (array)$data['a_schedule'] : null;
        $this->text_collected_note = isset($data['text_collected_note']) ? (string)$data['text_collected_note'] : null;
    }
}
