<?php

namespace WlSdk\Wl\Book\Promote;

/**
 * Response from POST
 */
class PromotePostResponse
{
    /**
     * Message about successful promote.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
