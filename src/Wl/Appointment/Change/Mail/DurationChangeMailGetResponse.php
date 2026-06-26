<?php

namespace WlSdk\Wl\Appointment\Change\Mail;

/**
 * Response from GET
 */
class DurationChangeMailGetResponse
{
    /**
     * Html template that can be used to change mail template.
     *
     * @var string|null
     */
    public ?string $html_mail_editor = null;

    public function __construct(array $data)
    {
        $this->html_mail_editor = isset($data['html_mail_editor']) ? (string)$data['html_mail_editor'] : null;
    }
}
