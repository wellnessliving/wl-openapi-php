<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQueryTotalGetResponseTotal
{
    /**
     * Human-readable label for the card (from `json_totals`).
     *
     * @var string|null
     */
    public ?string $text_label = null;

    /**
     * Computed aggregate value formatted as a string.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    public function __construct(array $data)
    {
        $this->text_label = isset($data['text_label']) ? (string)$data['text_label'] : null;
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
    }
}
