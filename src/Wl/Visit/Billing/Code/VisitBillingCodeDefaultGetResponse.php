<?php

namespace WlSdk\Wl\Visit\Billing\Code;

/**
 * Response from GET
 */
class VisitBillingCodeDefaultGetResponse
{
    /**
     * Codes applied by default to the service of the visit, sorted by the code value. Empty if the visit has no
     * service, for example if it is not an appointment.
     *
     * @var VisitBillingCodeDefaultGetResponseCodeService[]|null
     */
    public ?array $a_code_service = null;

    /**
     * Default code of the staff member of the visit: a list of one code, or an empty list if the staff member has
     * no
     * default code.
     *
     * @var VisitBillingCodeDefaultGetResponseCodeStaff[]|null
     */
    public ?array $a_code_staff = null;

    /**
     * Codes most used for the visits of the client, the most used first.
     *
     * Only the codes the current staff member can apply again are returned: a custom code that is still in the
     * billing
     * code list, a diagnostic code while the business has them turned on, and a temporary code only if the staff
     * member can add temporary codes.
     *
     * @var VisitBillingCodeDefaultGetResponseCodeTop[]|null
     */
    public ?array $a_code_top = null;

    public function __construct(array $data)
    {
        $this->a_code_service = isset($data['a_code_service']) ? array_map(static fn ($item) => new VisitBillingCodeDefaultGetResponseCodeService((array)$item), (array)$data['a_code_service']) : null;
        $this->a_code_staff = isset($data['a_code_staff']) ? array_map(static fn ($item) => new VisitBillingCodeDefaultGetResponseCodeStaff((array)$item), (array)$data['a_code_staff']) : null;
        $this->a_code_top = isset($data['a_code_top']) ? array_map(static fn ($item) => new VisitBillingCodeDefaultGetResponseCodeTop((array)$item), (array)$data['a_code_top']) : null;
    }
}
