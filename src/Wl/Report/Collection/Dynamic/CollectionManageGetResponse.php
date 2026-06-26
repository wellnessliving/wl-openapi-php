<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

/**
 * Response from GET
 */
class CollectionManageGetResponse
{
    /**
     * List of widgets that are displayed on the dashboard.
     *
     * `null` if list of widgets doesn't need to be updated.
     *
     * Structure of each item:
     *
     * @var CollectionManageGetResponseReportList[]|null
     */
    public ?array $a_report_list = null;

    /**
     * CID of the collection class.
     *
     * @var int|null
     */
    public ?int $cid_collection = null;

    /**
     * Collection title
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_report_list = isset($data['a_report_list']) ? array_map(static fn ($item) => new CollectionManageGetResponseReportList((array)$item), (array)$data['a_report_list']) : null;
        $this->cid_collection = isset($data['cid_collection']) ? (int)$data['cid_collection'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
