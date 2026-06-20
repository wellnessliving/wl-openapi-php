<?php

namespace WlSdk\Wl\Login\Add;

class MailUseOkPostResponseErrorList
{
    /**
     * The error message.
     *
     * @var string|null
     */
    public ?string $html_message = null;

    /**
     * The name of the field missing information.
     * Given in the format `k_field.name`.
     *
     * @var string|null
     */
    public ?string $s_field = null;

    public function __construct(array $data)
    {
        $this->html_message = isset($data['html_message']) ? (string)$data['html_message'] : null;
        $this->s_field = isset($data['s_field']) ? (string)$data['s_field'] : null;
    }
}
