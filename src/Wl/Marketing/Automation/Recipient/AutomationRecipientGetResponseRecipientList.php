<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

class AutomationRecipientGetResponseRecipientList
{
    /**
     * HTML representation of the recipient for client side.
     *
     * @var string|null
     */
    public ?string $html_client = null;

    /**
     * Lead-stage sort position. Used by JS to sort by the Lead Stage column.
     *    See AutomationRecipientManager::getRecipientList() `@return` for the value scheme.
     *
     * @var int|null
     */
    public ?int $i_lead_sort = null;

    /**
     * Status sort position. Used by JS to sort by the Status column.
     *
     * @var int|null
     */
    public ?int $i_status_sort = null;

    /**
     * Current-step sort position. Used by JS to sort by the Current Step column.
     *
     * @var int|null
     */
    public ?int $i_step_sort = null;

    /**
     * Recipient status. One of {@link \WlSdk\Wl\Marketing\Automation\Recipient\RecipientStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\Recipient\RecipientStatusSid
     */
    public ?int $id_status = null;

    /**
     * Whether the recipient was added manually. `true` if added manually, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_manual = null;

    /**
     * Start date in UTC MySQL datetime format. Used by JS to sort by the Start date column.
     *
     * @var string|null
     */
    public ?string $s_start_sort = null;

    /**
     * Recipient status badge class.
     *
     * @var string|null
     */
    public ?string $text_badge_class = null;

    /**
     * Client's current lead stage display text. Empty string if the client has no lead record.
     *
     * @var string|null
     */
    public ?string $text_lead_stage = null;

    /**
     * CSS badge class for the lead stage badge. Empty string if the client has no lead record.
     *
     * @var string|null
     */
    public ?string $text_lead_stage_class = null;

    /**
     * Local date and time when the recipient was added to the automation.
     *
     * @var string|null
     */
    public ?string $text_start = null;

    /**
     * Current step display text. Shows 'Step N: Content' for in-progress and excluded recipients,
     *    'Finished automation' for finished recipients, or '-' for legacy data.
     *
     * @var string|null
     */
    public ?string $text_step = null;

    /**
     * Tooltip text for the step column. Contains the message body for SMS and push notification steps.
     *    Empty string for other step types.
     *
     * @var string|null
     */
    public ?string $text_step_tooltip = null;

    /**
     * Recipient status title.
     *
     * @var string|null
     */
    public ?string $text_status = null;

    /**
     * CSS class of the recipient status.
     *
     * @var string|null
     */
    public ?string $text_status_class = null;

    /**
     * User ID. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->html_client = isset($data['html_client']) ? (string)$data['html_client'] : null;
        $this->i_lead_sort = isset($data['i_lead_sort']) ? (int)$data['i_lead_sort'] : null;
        $this->i_status_sort = isset($data['i_status_sort']) ? (int)$data['i_status_sort'] : null;
        $this->i_step_sort = isset($data['i_step_sort']) ? (int)$data['i_step_sort'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->is_manual = isset($data['is_manual']) ? (bool)$data['is_manual'] : null;
        $this->s_start_sort = isset($data['s_start_sort']) ? (string)$data['s_start_sort'] : null;
        $this->text_badge_class = isset($data['text_badge_class']) ? (string)$data['text_badge_class'] : null;
        $this->text_lead_stage = isset($data['text_lead_stage']) ? (string)$data['text_lead_stage'] : null;
        $this->text_lead_stage_class = isset($data['text_lead_stage_class']) ? (string)$data['text_lead_stage_class'] : null;
        $this->text_start = isset($data['text_start']) ? (string)$data['text_start'] : null;
        $this->text_step = isset($data['text_step']) ? (string)$data['text_step'] : null;
        $this->text_step_tooltip = isset($data['text_step_tooltip']) ? (string)$data['text_step_tooltip'] : null;
        $this->text_status = isset($data['text_status']) ? (string)$data['text_status'] : null;
        $this->text_status_class = isset($data['text_status_class']) ? (string)$data['text_status_class'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
