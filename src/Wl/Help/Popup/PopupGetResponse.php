<?php

namespace WlSdk\Wl\Help\Popup;

/**
 * Response from GET
 */
class PopupGetResponse
{
    /**
     * Whether "Call Us" button should be hidden in the help popup.
     *
     * @var bool|null
     */
    public ?bool $hide_call_us = null;

    /**
     * Whether "Email Us" button should be hidden in the help popup.
     *
     * @var bool|null
     */
    public ?bool $hide_email_us = null;

    /**
     * Whether "Forum" button should be hidden in the help popup.
     *
     * @var bool|null
     */
    public ?bool $hide_forum = null;

    /**
     * Whether "My Requests" button should be hidden in the help popup.
     *
     * @var bool|null
     */
    public ?bool $hide_my_requests = null;

    /**
     * Articles target ID.
     * Constant from {@link \WlSdk\Wl\Help\Popup\ArticleTargetSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Help\Popup\ArticleTargetSid
     */
    public ?int $id_article_target = null;

    public function __construct(array $data)
    {
        $this->hide_call_us = isset($data['hide_call_us']) ? (bool)$data['hide_call_us'] : null;
        $this->hide_email_us = isset($data['hide_email_us']) ? (bool)$data['hide_email_us'] : null;
        $this->hide_forum = isset($data['hide_forum']) ? (bool)$data['hide_forum'] : null;
        $this->hide_my_requests = isset($data['hide_my_requests']) ? (bool)$data['hide_my_requests'] : null;
        $this->id_article_target = isset($data['id_article_target']) ? (int)$data['id_article_target'] : null;
    }
}
