<?php

namespace WlSdk\Wl\ClassPass;

class BookableListGetResponseBookable
{
    /**
     * No description.
     *
     * @var BookableListGetResponseBookableImage[]|null
     */
    public ?array $a_image = null;

    /**
     * No description.
     *
     * @var string[]|null
     */
    public ?array $a_service = null;

    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $dtu_last_update = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_gender = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_type = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_bio = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_first = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_last = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? array_map(static fn ($item) => new BookableListGetResponseBookableImage((array)$item), (array)$data['a_image']) : null;
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->dtu_last_update = isset($data['dtu_last_update']) ? (array)$data['dtu_last_update'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->id_type = isset($data['id_type']) ? (int)$data['id_type'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->text_bio = isset($data['text_bio']) ? (string)$data['text_bio'] : null;
        $this->text_first = isset($data['text_first']) ? (string)$data['text_first'] : null;
        $this->text_last = isset($data['text_last']) ? (string)$data['text_last'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
    }
}
