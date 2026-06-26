<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQuerySchemaGetResponseTotal
{
    /**
     * Aggregate function name (e.g. `SUM`, `COUNT`).
     *
     * @var string|null
     */
    public ?string $s_function = null;

    /**
     * Plain-text description shown in the reference panel.
     *
     * @var string|null
     */
    public ?string $text_hint = null;

    /**
     * Whether `s_alias` is `'required'`, `'optional'`, or `'omit'` for this function.
     *
     * @var string|null
     */
    public ?string $s_alias = null;

    public function __construct(array $data)
    {
        $this->s_function = isset($data['s_function']) ? (string)$data['s_function'] : null;
        $this->text_hint = isset($data['text_hint']) ? (string)$data['text_hint'] : null;
        $this->s_alias = isset($data['s_alias']) ? (string)$data['s_alias'] : null;
    }
}
