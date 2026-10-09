<?php

namespace WlSdk\Wl\Visit\Billing\Code;

/**
 * Response from GET
 */
class VisitBillingCodeAssignGetResponse
{
    /**
     * Billing codes applied to the visit, the custom codes first, each type sorted by the code value.
     *
     * A staff member who can not assign billing codes gets the custom codes only: the diagnostic codes are a part
     * of
     * the medical record of the client. The codes are changed by posting {@link
     * \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeAssign}.
     *
     * @var VisitBillingCodeAssignGetResponseCode[]|null
     */
    public ?array $a_code = null;

    /**
     * History of the changes of the billing codes of the visit, the latest change first: a record per added or
     * removed
     * code.
     *
     * Empty for a staff member who can not assign billing codes.
     *
     * @var VisitBillingCodeAssignGetResponseHistory[]|null
     */
    public ?array $a_history = null;

    public function __construct(array $data)
    {
        $this->a_code = isset($data['a_code']) ? array_map(static fn ($item) => new VisitBillingCodeAssignGetResponseCode((array)$item), (array)$data['a_code']) : null;
        $this->a_history = isset($data['a_history']) ? array_map(static fn ($item) => new VisitBillingCodeAssignGetResponseHistory((array)$item), (array)$data['a_history']) : null;
    }
}
