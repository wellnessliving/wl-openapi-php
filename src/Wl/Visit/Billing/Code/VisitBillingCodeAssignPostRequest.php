<?php

namespace WlSdk\Wl\Visit\Billing\Code;

class VisitBillingCodeAssignPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Values of all billing codes the visit must have, as they are printed on receipts and invoices.
     *
     * The list replaces the codes of the visit as a whole: a code that is not in the list is removed from the
     * visit.
     * A value may be a code of the billing code list of the business, an ICD-10-CM diagnostic code if the business
     * has turned them on, or a temporary code for this visit only. A temporary code requires the access to create
     * temporary codes. The case of a value does not matter. The codes the visit has are returned in
     * {@link \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeAssignGetResponse::$a_code}.
     *
     * @var string[]|null
     */
    public ?array $a_text_code = null;

    /**
     * Reason of the change, for example when the codes are changed after the receipt has been sent to the client.
     *
     * Empty string if no reason is given.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    /**
     * Signature of the staff member who applies the codes.
     *
     * Required and stored only if the business requires a signature when billing codes are saved. Empty string if
     * no
     * signature is given.
     *
     * @var string|null
     */
    public ?string $text_signature = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'a_text_code' => $this->a_text_code,
            'text_reason' => $this->text_reason,
            'text_signature' => $this->text_signature,
            ],
            static fn ($v) => $v !== null
        );
    }
}
