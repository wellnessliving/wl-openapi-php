<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostResponseClientRestrictWarning
{
    /**
     * The user-facing warning message.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
