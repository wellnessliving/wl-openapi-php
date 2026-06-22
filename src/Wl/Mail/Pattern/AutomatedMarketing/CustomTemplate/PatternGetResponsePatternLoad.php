<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

class PatternGetResponsePatternLoad
{
    /**
     * Is email enabled.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Is push notification enabled.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Is SMS enabled.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * ID of the notification. One of {@link \WlSdk\RsMailSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Mail pattern key.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    /**
     * Data of the last template save in human-readable format.
     *
     * @var string|null
     */
    public ?string $text_date_edit = null;

    /**
     * HTML content of the email.
     *
     * @var string|null
     */
    public ?string $text_html = null;

    /**
     * JSON content of the email for Unlayer editor.
     *
     * @var string|null
     */
    public ?string $text_json = null;

    /**
     * &gt;Preview text of the email.
     *
     * @var string|null
     */
    public ?string $text_preview = null;

    /**
     * Content of the push notification.
     *
     * @var string|null
     */
    public ?string $text_push = null;

    /**
     * Content of the SMS.
     *
     * @var string|null
     */
    public ?string $text_sms = null;

    /**
     * Template description.
     *
     * @var string|null
     */
    public ?string $text_template_description = null;

    /**
     * Template title.
     *
     * @var string|null
     */
    public ?string $text_template_title = null;

    /**
     * Text content of the email.
     *
     * @var string|null
     */
    public ?string $text_text = null;

    /**
     * Time in seconds of the last template save.
     *
     * @var int|null
     */
    public ?int $tl_last_save = null;

    public function __construct(array $data)
    {
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
        $this->id_mail = isset($data['id_mail']) ? (int)$data['id_mail'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_mail_pattern = isset($data['k_mail_pattern']) ? (string)$data['k_mail_pattern'] : null;
        $this->text_date_edit = isset($data['text_date_edit']) ? (string)$data['text_date_edit'] : null;
        $this->text_html = isset($data['text_html']) ? (string)$data['text_html'] : null;
        $this->text_json = isset($data['text_json']) ? (string)$data['text_json'] : null;
        $this->text_preview = isset($data['text_preview']) ? (string)$data['text_preview'] : null;
        $this->text_push = isset($data['text_push']) ? (string)$data['text_push'] : null;
        $this->text_sms = isset($data['text_sms']) ? (string)$data['text_sms'] : null;
        $this->text_template_description = isset($data['text_template_description']) ? (string)$data['text_template_description'] : null;
        $this->text_template_title = isset($data['text_template_title']) ? (string)$data['text_template_title'] : null;
        $this->text_text = isset($data['text_text']) ? (string)$data['text_text'] : null;
        $this->tl_last_save = isset($data['tl_last_save']) ? (int)$data['tl_last_save'] : null;
    }
}
