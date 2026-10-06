<?php

namespace WlSdk\Wl\Quiz;

class QuizListGetResponseListConfig
{
    /**
     * Whether numbering is shown for elements that support numbering.
     *
     * @var bool|null
     */
    public ?bool $show_numbering = null;

    public function __construct(array $data)
    {
        $this->show_numbering = isset($data['show_numbering']) ? (bool)$data['show_numbering'] : null;
    }
}
