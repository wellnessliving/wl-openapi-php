<?php

namespace WlSdk\Wl\Import\Application;

class AttachmentPostRequest
{
    /**
     * List of attachment for member.
     *
     * @var string|null
     */
    public ?string $a_attachment_list = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Member id.
     *
     * @var string|null
     */
    public ?string $s_member_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_attachment_list' => $this->a_attachment_list,
            'k_business' => $this->k_business,
            's_member_id' => $this->s_member_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
