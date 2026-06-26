<?php

namespace WlSdk\Core\Locale\Message\InlineEditor;

class SavePutRequest
{
    /**
     * A list of translations to save.
     *
     * Each element of this array contains:
     *
     * @var array[]|null
     */
    public ?array $a_translate = null;

    /**
     * Name of the instance.
     *
     * @var string|null
     */
    public ?string $text_instance = null;

    /**
     * Login of the user.
     *
     * @var string|null
     */
    public ?string $text_login = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_translate' => $this->a_translate,
            'text_instance' => $this->text_instance,
            'text_login' => $this->text_login,
            ],
            static fn ($v) => $v !== null
        );
    }
}
