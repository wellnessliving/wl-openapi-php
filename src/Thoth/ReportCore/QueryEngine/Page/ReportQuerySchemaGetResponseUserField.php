<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQuerySchemaGetResponseUserField
{
    /**
     * Full `table.column` reference inserted into SQL on click.
     *
     * @var string|null
     */
    public ?string $s_column = null;

    /**
     * Short human-readable column label shown prominently.
     *
     * @var string|null
     */
    public ?string $text_label = null;

    /**
     * Longer description shown in the hover tooltip.
     *
     * @var string|null
     */
    public ?string $text_tooltip = null;

    public function __construct(array $data)
    {
        $this->s_column = isset($data['s_column']) ? (string)$data['s_column'] : null;
        $this->text_label = isset($data['text_label']) ? (string)$data['text_label'] : null;
        $this->text_tooltip = isset($data['text_tooltip']) ? (string)$data['text_tooltip'] : null;
    }
}
