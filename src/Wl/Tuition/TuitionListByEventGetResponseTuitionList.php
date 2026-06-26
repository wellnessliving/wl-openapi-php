<?php

namespace WlSdk\Wl\Tuition;

class TuitionListByEventGetResponseTuitionList
{
    /**
     * Key of the tuition.
     *
     * @var string|null
     */
    public ?string $k_tuition = null;

    /**
     * Title of the tuition.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_tuition = isset($data['k_tuition']) ? (string)$data['k_tuition'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
