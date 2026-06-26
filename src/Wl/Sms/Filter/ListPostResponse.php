<?php

namespace WlSdk\Wl\Sms\Filter;

/**
 * Response from POST
 */
class ListPostResponse
{
    /**
     * List of keywords to block. The keywords are seperated by newlines.
     *
     * @var string|null
     */
    public ?string $text_keyword_list = null;

    public function __construct(array $data)
    {
        $this->text_keyword_list = isset($data['text_keyword_list']) ? (string)$data['text_keyword_list'] : null;
    }
}
