<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast26
{
    /**
     * Card type ID.
     * 
     * Not `null` when
     * [PaymentStatusChannel::$id_payment_status](#/components/schemas/Core.WebSocket.ChannelBroadcast)
     * is equal [CSResponseSid::APPROVED](#/components/schemas/Thoth.PayProcessor.Nuvei.Code.CSResponseSid).
     *
     * @var int|null
     */
    public ?int $id_card_system = null;

    /**
     * Card type ID.
     * 
     * `null` If were unable to determine the card type. See `id_card_type`.
     *
     * @var int|null
     */
    public ?int $id_card_type = null;

    /**
     * Transaction exception ID.
     * 
     * `null` if no errors occurred.
     *
     * @var int|null
     */
    public ?int $id_pay_exception = null;

    /**
     * Payment status.
     * 
     * `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $id_payment_status = null;

    /**
     * Tip amount entered by the customer at the terminal.
     * 
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * Last four digits of the card number.
     * 
     * Not `null` when
     * [PaymentStatusChannel::$id_payment_status](#/components/schemas/Core.WebSocket.ChannelBroadcast)
     * is equal [CSResponseSid::APPROVED](#/components/schemas/Thoth.PayProcessor.Nuvei.Code.CSResponseSid).
     *
     * @var string|null
     */
    public ?string $s_last4 = null;

    /**
     * Cardholder name.
     * 
     * Not `null` when
     * [PaymentStatusChannel::$id_payment_status](#/components/schemas/Core.WebSocket.ChannelBroadcast)
     * is equal [CSResponseSid::APPROVED](#/components/schemas/Thoth.PayProcessor.Nuvei.Code.CSResponseSid).
     *
     * @var string|null
     */
    public ?string $text_card_holder = null;

    /**
     * Text message to notify the client.
     * 
     * `null` until initialized.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->id_card_system = isset($data['id_card_system']) ? (int)$data['id_card_system'] : null;
        $this->id_card_type = isset($data['id_card_type']) ? (int)$data['id_card_type'] : null;
        $this->id_pay_exception = isset($data['id_pay_exception']) ? (int)$data['id_pay_exception'] : null;
        $this->id_payment_status = isset($data['id_payment_status']) ? (int)$data['id_payment_status'] : null;
        $this->m_tip = isset($data['m_tip']) ? (string)$data['m_tip'] : null;
        $this->s_last4 = isset($data['s_last4']) ? (string)$data['s_last4'] : null;
        $this->text_card_holder = isset($data['text_card_holder']) ? (string)$data['text_card_holder'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
