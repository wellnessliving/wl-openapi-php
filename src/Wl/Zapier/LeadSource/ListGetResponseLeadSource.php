<?php

namespace WlSdk\Wl\Zapier\LeadSource;

class ListGetResponseLeadSource
{
    /**
     * Key of the lead source, primary key in LeadSourceSql.
     *
     * @var int|null
     */
    public ?int $id = null;

    /**
     * Name of the Lead Source.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id = isset($data['id']) ? (int)$data['id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
