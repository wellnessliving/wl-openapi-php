<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

/**
 * Response from GET
 */
class DialogGetResponse
{
    /**
     * `true` if chat can be marked as archive.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_archive = null;

    /**
     * `true` if conversation can be marked as pinned.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_pin = null;

    /**
     * `true` if the last message in the chat is from client and chat can be marked read.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_read = null;

    /**
     * `true` if the last message in the chat is from client and chat can be marked unread.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_unread = null;

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

    public function __construct(array $data)
    {
        $this->can_archive = isset($data['can_archive']) ? (bool)$data['can_archive'] : null;
        $this->can_pin = isset($data['can_pin']) ? (bool)$data['can_pin'] : null;
        $this->can_read = isset($data['can_read']) ? (bool)$data['can_read'] : null;
        $this->can_unread = isset($data['can_unread']) ? (bool)$data['can_unread'] : null;
        $this->is_archive = isset($data['is_archive']) ? (bool)$data['is_archive'] : null;
        $this->is_mute = isset($data['is_mute']) ? (bool)$data['is_mute'] : null;
    }
}
