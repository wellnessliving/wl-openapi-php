<?php

namespace WlSdk\Core\Sid;

class CoreSidGetResponseList
{
    /**
     * String ID.
     *
     * @var int|null
     */
    public ?int $sid = null;

    /**
     * Title of the ID.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->sid = isset($data['sid']) ? (int)$data['sid'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
