<?php

namespace WlSdk\Wl\Sms\Filter;

class ListPostRequest
{
    /**
     * The ID of the region. One of FilterMessage::REGION
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * List of keywords to block. The keywords are seperated by newlines.
     *
     * @var string|null
     */
    public ?string $text_keyword_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_locale' => $this->id_locale,
            'text_keyword_list' => $this->text_keyword_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
