<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

/**
 * Response from GET
 */
class AutomationRecipientStatusGetResponse
{
    /**
     * Statuses of the member group recipients in the automation flow.
     *
     * Keys are recipient UIDs, values are statuses from {@link
     * \WlSdk\Wl\Marketing\Automation\Recipient\RecipientStatusSid} constants.
     * Only users that have a record in the automation are included.
     * `null` if the request is filtered by an individual user instead of a member group.
     *
     * @var int[]|null
     */
    public ?array $a_group_status = null;

    /**
     * Status of a recipient in an automation flow.
     * One of {@link \WlSdk\Wl\Marketing\Automation\Recipient\RecipientStatusSid} constants.
     *
     * `null` if the recipient is not found in the flow.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\Recipient\RecipientStatusSid
     */
    public ?int $id_status = null;

    public function __construct(array $data)
    {
        $this->a_group_status = isset($data['a_group_status']) ? (array)$data['a_group_status'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
    }
}
