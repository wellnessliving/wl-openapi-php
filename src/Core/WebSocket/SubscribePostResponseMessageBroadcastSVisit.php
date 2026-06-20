<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastSVisit
{
    /**
     * Date/time of end.
     *
     * @var string|null
     */
    public ?string $dtl_end = null;

    /**
     * Date/time of start.
     *
     * @var string|null
     */
    public ?string $dtl_start = null;

    /**
     * `true` if book was canceled; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_cancel = null;

    /**
     * Book key.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * Address of location.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Title of location.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Description of event.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Title of event.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * URL of virtual service. Empty if the visit is not virtual.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->dtl_end = isset($data['dtl_end']) ? (string)$data['dtl_end'] : null;
        $this->dtl_start = isset($data['dtl_start']) ? (string)$data['dtl_start'] : null;
        $this->is_cancel = isset($data['is_cancel']) ? (bool)$data['is_cancel'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
