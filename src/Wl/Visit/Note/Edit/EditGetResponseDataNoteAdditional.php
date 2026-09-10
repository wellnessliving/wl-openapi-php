<?php

namespace WlSdk\Wl\Visit\Note\Edit;

class EditGetResponseDataNoteAdditional
{
    /**
     * Additional note content as HTML. Empty string if not set.
     *
     * @var string|null
     */
    public ?string $html_note = null;

    /**
     * Additional note content with formatting tags stripped. Empty string if not set.
     *
     * @var string|null
     */
    public ?string $html_note_stripped = null;

    /**
     * Title of the additional note field.
     *
     * @var string|null
     */
    public ?string $text_field = null;

    /**
     * Form field name used to submit the value back in `a_data`.
     *
     * @var string|null
     */
    public ?string $text_field_name = null;

    /**
     * Form field element id.
     *
     * @var string|null
     */
    public ?string $text_id = null;

    /**
     * Not translated field key.
     *
     * @var string|null
     */
    public ?string $text_key = null;

    public function __construct(array $data)
    {
        $this->html_note = isset($data['html_note']) ? (string)$data['html_note'] : null;
        $this->html_note_stripped = isset($data['html_note_stripped']) ? (string)$data['html_note_stripped'] : null;
        $this->text_field = isset($data['text_field']) ? (string)$data['text_field'] : null;
        $this->text_field_name = isset($data['text_field_name']) ? (string)$data['text_field_name'] : null;
        $this->text_id = isset($data['text_id']) ? (string)$data['text_id'] : null;
        $this->text_key = isset($data['text_key']) ? (string)$data['text_key'] : null;
    }
}
