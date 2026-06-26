<?php

namespace WlSdk\Wl\Help\Popup\Email;

class EmailFormPostRequest
{
    /**
     * The attached files to send with the email.
     * Each element corresponds to one attached file and has the following structure.
     *
     * @var array[]|null
     */
    public ?array $a_attach = null;

    /**
     * Business key. It will be `null` if not yet set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The description of the issue, the body of the email.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    /**
     * The subject of the email.
     *
     * @var string|null
     */
    public ?string $s_subject = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_attach' => $this->a_attach,
            'k_business' => $this->k_business,
            's_description' => $this->s_description,
            's_subject' => $this->s_subject,
            ],
            static fn ($v) => $v !== null
        );
    }
}
