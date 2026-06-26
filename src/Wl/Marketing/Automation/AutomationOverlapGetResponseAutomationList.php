<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationOverlapGetResponseAutomationList
{
    /**
     * List of actions for the automation.
     *
     * @var array|null
     */
    public ?array $a_menu = null;

    /**
     * Max date all clients were added to automation.
     *
     * @var string|null
     */
    public ?string $dtu_add_max_all = null;

    /**
     * Max date a client was added to automation with "Finished" status.
     *
     * @var string|null
     */
    public ?string $dtu_add_max_finish = null;

    /**
     * Max date a client was added to automation with "In progress" status.
     *
     * @var string|null
     */
    public ?string $dtu_add_max_progress = null;

    /**
     * Min date all clients were added to automation.
     *
     * @var string|null
     */
    public ?string $dtu_add_min_all = null;

    /**
     * Min date a client was added to automation with "Finished" status.
     *
     * @var string|null
     */
    public ?string $dtu_add_min_finish = null;

    /**
     * Min date a client was added to automation with "In progress" status.
     *
     * @var string|null
     */
    public ?string $dtu_add_min_progress = null;

    /**
     * Creation date and time in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * Date and time of the last edit in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_edit = null;

    /**
     * Number of emails in the automation.
     *
     * @var int|null
     */
    public ?int $i_email_count = null;

    /**
     * Total number of recipients in the automation.
     *
     * @var int|null
     */
    public ?int $i_recipient_all = null;

    /**
     * Number of recipients with "Finished" status in the automation.
     *
     * @var int|null
     */
    public ?int $i_recipient_finish = null;

    /**
     * Number of recipients with "In Progress" status in the automation.
     *
     * @var int|null
     */
    public ?int $i_recipient_progress = null;

    /**
     * Number of SMS messages in the automation.
     *
     * @var int|null
     */
    public ?int $i_sms_count = null;

    /**
     * Number of push notifications in the automation.
     *
     * @var int|null
     */
    public ?int $i_push_count = null;

    /**
     * Whether the automation is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Automation key. Primary key in AutomationSql.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Folder key. Empty string for the default folder.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    /**
     * ID of the HTML element that contains the action menu.
     *
     * @var string|null
     */
    public ?string $s_menu_id = null;

    /**
     * Automation description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Automation name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Text about the last modification of the automation.
     *
     * @var string|null
     */
    public ?string $html_last_modified = null;

    /**
     * Date and time of the last modification, formatted for display.
     *
     * @var string|null
     */
    public ?string $text_modified_date = null;

    /**
     * Textual representation of the automation status.
     *
     * @var string|null
     */
    public ?string $text_status = null;

    /**
     * CSS class for the automation status.
     *
     * @var string|null
     */
    public ?string $text_status_class = null;

    /**
     * Folder name.
     *
     * @var string|null
     */
    public ?string $text_folder_title = null;

    /**
     * User key of the creator. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_create = null;

    /**
     * User key of the last editor. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_edit = null;

    public function __construct(array $data)
    {
        $this->a_menu = isset($data['a_menu']) ? (array)$data['a_menu'] : null;
        $this->dtu_add_max_all = isset($data['dtu_add_max_all']) ? (string)$data['dtu_add_max_all'] : null;
        $this->dtu_add_max_finish = isset($data['dtu_add_max_finish']) ? (string)$data['dtu_add_max_finish'] : null;
        $this->dtu_add_max_progress = isset($data['dtu_add_max_progress']) ? (string)$data['dtu_add_max_progress'] : null;
        $this->dtu_add_min_all = isset($data['dtu_add_min_all']) ? (string)$data['dtu_add_min_all'] : null;
        $this->dtu_add_min_finish = isset($data['dtu_add_min_finish']) ? (string)$data['dtu_add_min_finish'] : null;
        $this->dtu_add_min_progress = isset($data['dtu_add_min_progress']) ? (string)$data['dtu_add_min_progress'] : null;
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->dtu_edit = isset($data['dtu_edit']) ? (string)$data['dtu_edit'] : null;
        $this->i_email_count = isset($data['i_email_count']) ? (int)$data['i_email_count'] : null;
        $this->i_recipient_all = isset($data['i_recipient_all']) ? (int)$data['i_recipient_all'] : null;
        $this->i_recipient_finish = isset($data['i_recipient_finish']) ? (int)$data['i_recipient_finish'] : null;
        $this->i_recipient_progress = isset($data['i_recipient_progress']) ? (int)$data['i_recipient_progress'] : null;
        $this->i_sms_count = isset($data['i_sms_count']) ? (int)$data['i_sms_count'] : null;
        $this->i_push_count = isset($data['i_push_count']) ? (int)$data['i_push_count'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->k_automation = isset($data['k_automation']) ? (string)$data['k_automation'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_folder = isset($data['k_folder']) ? (string)$data['k_folder'] : null;
        $this->s_menu_id = isset($data['s_menu_id']) ? (string)$data['s_menu_id'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->html_last_modified = isset($data['html_last_modified']) ? (string)$data['html_last_modified'] : null;
        $this->text_modified_date = isset($data['text_modified_date']) ? (string)$data['text_modified_date'] : null;
        $this->text_status = isset($data['text_status']) ? (string)$data['text_status'] : null;
        $this->text_status_class = isset($data['text_status_class']) ? (string)$data['text_status_class'] : null;
        $this->text_folder_title = isset($data['text_folder_title']) ? (string)$data['text_folder_title'] : null;
        $this->uid_create = isset($data['uid_create']) ? (string)$data['uid_create'] : null;
        $this->uid_edit = isset($data['uid_edit']) ? (string)$data['uid_edit'] : null;
    }
}
