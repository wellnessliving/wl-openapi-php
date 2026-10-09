<?php

namespace WlSdk\Wl\Billing\Code;

/**
 * Response from GET
 */
class BillingCodeListGetResponse
{
    /**
     * Billing codes of the business.
     *
     * Contains the custom codes of the business and the system codes of the ICD-10-CM reference library, which are
     * shared by all businesses. The system codes are returned only if the business has turned on ICD diagnostic
     * codes .
     *
     * Removed codes are not returned - they are not offered for selection anymore, they only stay on the receipts
     * and invoices they have already been applied to.
     *
     * The custom codes go first, then the system codes, each type sorted by the code value. Filtering of the list
     * is a
     * matter of the page that shows it.
     *
     * @var BillingCodeListGetResponseCode[]|null
     */
    public ?array $a_code = null;

    public function __construct(array $data)
    {
        $this->a_code = isset($data['a_code']) ? array_map(static fn ($item) => new BillingCodeListGetResponseCode((array)$item), (array)$data['a_code']) : null;
    }
}
