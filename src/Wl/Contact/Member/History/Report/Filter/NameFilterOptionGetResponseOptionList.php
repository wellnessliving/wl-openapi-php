<?php

namespace WlSdk\Wl\Contact\Member\History\Report\Filter;

class NameFilterOptionGetResponseOptionList
{
    /**
     * Display title for the option.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Value key for the option.
     *
     * @var string|null
     */
    public ?string $text_value = null;

    public function __construct(array $data)
    {
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_value = isset($data['text_value']) ? (string)$data['text_value'] : null;
    }
}
