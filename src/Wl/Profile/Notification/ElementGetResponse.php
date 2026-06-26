<?php

namespace WlSdk\Wl\Profile\Notification;

/**
 * Response from GET
 */
class ElementGetResponse
{
    /**
     * Date of push notification sending.
     *
     * @var string|null
     */
    public ?string $dtl_send = null;

    /**
     * Push notification message.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    /**
     * Push notification title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->dtl_send = isset($data['dtl_send']) ? (string)$data['dtl_send'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
