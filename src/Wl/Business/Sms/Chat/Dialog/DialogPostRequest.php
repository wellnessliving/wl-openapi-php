<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

class DialogPostRequest
{
    /**
     * Key of the business this sms chat is connected to. Primary key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user sms chat is related to. Primary key from PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * `true` if chat should be hidden on the list of chats.
     * `false` - otherwise.
     * `null` - do not change current status.
     *
     * @var bool|null
     */
    public ?bool $is_archive = null;

    /**
     * `true` if chat should be muted and all new messages should not fire notifications to staff members.
     * `false` - otherwise.
     * `null` - do not change current status.
     *
     * @var bool|null
     */
    public ?bool $is_mute = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_archive' => $this->is_archive,
            'is_mute' => $this->is_mute,
            ],
            static fn ($v) => $v !== null
        );
    }
}
