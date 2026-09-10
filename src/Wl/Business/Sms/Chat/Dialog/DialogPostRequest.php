<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

class DialogPostRequest
{
    /**
     * The business key this SMS chat is connected to.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user this SMS chat is related to.
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
