<?php

namespace WlSdk\Core\Locale\Language;

class LanguageSwitchPostRequest
{
    /**
     * Language to switch to.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\Language\LocaleLanguageSid
     */
    public ?int $id_language = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_language' => $this->id_language,
            ],
            static fn ($v) => $v !== null
        );
    }
}
