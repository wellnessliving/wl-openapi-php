<?php

namespace WlSdk\Wl\Schedule\ClassList;

class ClassList68PostResponseQuick
{
    /**
     * Type of class ("class" || "event")
     *
     * @var string|null
     */
    public ?string $text_type = null;

    /**
     * Class/event key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Class/event title.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Total sessions found.
     *
     * @var int|null
     */
    public ?int $i_class = null;

    public function __construct(array $data)
    {
        $this->text_type = isset($data['text_type']) ? (string)$data['text_type'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->i_class = isset($data['i_class']) ? (int)$data['i_class'] : null;
    }
}
