<?php

namespace WlSdk\Wl\Visit\Note\Edit;

class EditGetResponseVisitNote
{
    /**
     * A title of field of a visit note.
     *
     * @var string|null
     */
    public ?string $text_field = null;

    /**
     * A field element name.
     *
     * @var string|null
     */
    public ?string $text_field_name = null;

    /**
     * A field element id.
     *
     * @var string|null
     */
    public ?string $text_id = null;

    /**
     * Not translated a title of field of a visit note.
     *
     * @var string|null
     */
    public ?string $text_key = null;

    /**
     * A content of field of a visit note.
     *
     * @var string|null
     */
    public ?string $text_text = null;

    public function __construct(array $data)
    {
        $this->text_field = isset($data['text_field']) ? (string)$data['text_field'] : null;
        $this->text_field_name = isset($data['text_field_name']) ? (string)$data['text_field_name'] : null;
        $this->text_id = isset($data['text_id']) ? (string)$data['text_id'] : null;
        $this->text_key = isset($data['text_key']) ? (string)$data['text_key'] : null;
        $this->text_text = isset($data['text_text']) ? (string)$data['text_text'] : null;
    }
}
