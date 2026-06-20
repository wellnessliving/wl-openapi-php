<?php
namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewGetResponseSessionResultVisitsRequired
{
    /**
     * Number of visits.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * `true` if this is an event, `false` if this is a class.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Key of the class or event.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Name of the class or event.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
