<?php
namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponseCard
{
    /**
     * The card or account number.
     *
     * @var string|null
     */
    public ?string $text_card_number = null;

    /**
     * The card system name from {@link \WlSdk\ACardSystemSid}.
     *
     * @var string|null
     */
    public ?string $text_card_system = null;

    /**
     * The payment account title. This will be 'Account number' for ACH, 'Card' for all other cases.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->text_card_number = isset($data['text_card_number']) ? (string)$data['text_card_number'] : null;
        $this->text_card_system = isset($data['text_card_system']) ? (string)$data['text_card_system'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
