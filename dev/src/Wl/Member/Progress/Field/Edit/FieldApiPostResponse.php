<?php
namespace WlSdk\Wl\Member\Progress\Field\Edit;

/**
 * Response from POST
 */
class FieldApiPostResponse
{
    /**
     * Field title.
     * Only titles of the custom progress fields can be changed.
     * 
     * `null` If default title should be used.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
