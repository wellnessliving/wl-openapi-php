<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

class TriggerListGetResponsePrebuiltList
{
    /**
     * List of steps in the pre-built automation flow.
     *
     * @var array[]|null
     */
    public ?array $a_step = null;

    /**
     * ID of the mail in {@link \WlSdk\RsMailSid}, `null` if no mail is associated with the pre-built flow.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Pre-built automation key. Primary key in AutomationSql table.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Folder key of the pre-built automation. Primary key in AutomationFolderSql table.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    /**
     * ID of the trigger in {@link \WlSdk\Wl\Marketing\Automation\TriggerSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\TriggerSid
     */
    public ?int $id_trigger = null;

    /**
     * Whether the pre-built automation flow has 'New' label.
     *
     * @var bool|null
     */
    public ?bool $is_new = null;

    /**
     * Description of the pre-built automation flow.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Title of the folder of the pre-built automation flow.
     *
     * @var string|null
     */
    public ?string $text_folder = null;

    /**
     * Title of the pre-built automation flow.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * URL of the image preview of the pre-built automation flow.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_step = isset($data['a_step']) ? (array)$data['a_step'] : null;
        $this->id_mail = isset($data['id_mail']) ? (int)$data['id_mail'] : null;
        $this->k_automation = isset($data['k_automation']) ? (string)$data['k_automation'] : null;
        $this->k_folder = isset($data['k_folder']) ? (string)$data['k_folder'] : null;
        $this->id_trigger = isset($data['id_trigger']) ? (int)$data['id_trigger'] : null;
        $this->is_new = isset($data['is_new']) ? (bool)$data['is_new'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_folder = isset($data['text_folder']) ? (string)$data['text_folder'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
