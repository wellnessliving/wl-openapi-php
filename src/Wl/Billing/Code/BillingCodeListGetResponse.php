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
     * Contains the custom codes of the business for now. The system codes of the ICD-10-CM reference library are
     * to
     * be returned here too, and a row is then to tell the two types apart.
     *
     * Removed codes are not returned - they are not offered for selection anymore, they only stay on the receipts
     * and invoices they have already been applied to.
     *
     * The list is not sorted - sorting and filtering of the list is a matter of the page that shows it.
     *
     * <dl>
     *   <dt>array `a_service`</dt>
     *   <dd>List of services the code is applied to by default.
     *
     *   <dt>string `k_code`</dt>
     *   <dd>Key of the code. </dd>
     *
     *   <dt>string `text_code`</dt>
     *   <dd>Code value, as it is printed on receipts and invoices.</dd>
     *
     *   <dt>string `text_description`</dt>
     *   <dd>Description of the code the business typed in.</dd>
     * </dl>
     *
     * @var array[]|null
     */
    public ?array $a_code = null;

    public function __construct(array $data)
    {
        $this->a_code = isset($data['a_code']) ? (array)$data['a_code'] : null;
    }
}
