<?php
namespace WlSdk\Wl\Quiz\Response;

class ResponseGetResponseElementDAmendmentChange
{
    /**
     * Change note.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function __construct(array $data)
    {
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
    }
}
