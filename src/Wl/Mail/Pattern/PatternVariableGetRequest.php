<?php

namespace WlSdk\Wl\Mail\Pattern;

class PatternVariableGetRequest
{
    /**
     * ID of the notification.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * SID of the mail form.
     *
     * @var int|null
     * @see \WlSdk\RsMailFormSid
     */
    public ?int $id_mail_form = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'id_mail_form' => $this->id_mail_form,
            ],
            static fn ($v) => $v !== null
        );
    }
}
