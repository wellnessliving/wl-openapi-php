<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQuerySchemaGetResponsePlaceholder
{
    /**
     * Placeholder name without the leading `@` (e.g. `dl_start`).
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Human-readable description shown in the autocomplete popup.
     *
     * @var string|null
     */
    public ?string $text_hint = null;

    public function __construct(array $data)
    {
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->text_hint = isset($data['text_hint']) ? (string)$data['text_hint'] : null;
    }
}
