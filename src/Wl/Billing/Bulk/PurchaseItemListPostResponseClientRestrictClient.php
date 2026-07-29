<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostResponseClientRestrictClient
{
    /**
     * The client login type title.
     *
     * @var string|null
     */
    public ?string $text_login_type = null;

    /**
     * The client email address. Empty string if the client has no email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Comma-separated titles of the member groups the client belongs to.
     *
     * @var string|null
     */
    public ?string $text_member_group = null;

    /**
     * The client full name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * The client user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->text_login_type = isset($data['text_login_type']) ? (string)$data['text_login_type'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_member_group = isset($data['text_member_group']) ? (string)$data['text_member_group'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
