<?php
namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseVisitsRequired
{
    /**
     * The number of visits required.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * The number of visits the client has already attended.
     *
     * @var int|null
     */
    public ?int $i_has = null;

    /**
     * `true` if this is an event, `false` if this is a class.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * The key of the class or event.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The name of the class or event.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->i_has = isset($data['i_has']) ? (int)$data['i_has'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
