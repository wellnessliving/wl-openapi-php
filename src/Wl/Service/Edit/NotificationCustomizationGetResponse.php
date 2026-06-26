<?php

namespace WlSdk\Wl\Service\Edit;

/**
 * Response from GET
 */
class NotificationCustomizationGetResponse
{
    /**
     * Mail pattern form.
     *
     * @var string|null
     */
    public ?string $html_form = null;

    /**
     * If mail is enabled or not in the loaded live mail pattern.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * If push is enabled or not in the loaded live mail pattern.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * If sms is enabled or not in the loaded live mail pattern.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    public function __construct(array $data)
    {
        $this->html_form = isset($data['html_form']) ? (string)$data['html_form'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
    }
}
