<?php
namespace WlSdk\Wl\Book\Process;

class ProcessGroupPostResponseBookError
{
    /**
     * Error code identifying the type of error that occurred.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * Human-readable error message describing the booking failure.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
