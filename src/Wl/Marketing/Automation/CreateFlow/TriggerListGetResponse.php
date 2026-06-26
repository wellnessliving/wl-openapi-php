<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

/**
 * Response from GET
 */
class TriggerListGetResponse
{
    /**
     * A list of available pre-built automation template types and the count of templates in each type.
     * Each element has the following structure:
     *
     * @var TriggerListGetResponsePrebuiltFilter[]|null
     */
    public ?array $a_prebuilt_filter = null;

    /**
     * A list of available pre-built automation flows.
     * Each element has the following structure:
     *
     * @var TriggerListGetResponsePrebuiltList[]|null
     */
    public ?array $a_prebuilt_list = null;

    /**
     * A list of available trigger types and the count of triggers in each type.
     * Each element has the following structure:
     *
     * @var TriggerListGetResponseTriggerFilter[]|null
     */
    public ?array $a_trigger_filter = null;

    /**
     * A list of available triggers.
     * Each element has the following structure:
     *
     * @var TriggerListGetResponseTriggerList[]|null
     */
    public ?array $a_trigger_list = null;

    public function __construct(array $data)
    {
        $this->a_prebuilt_filter = isset($data['a_prebuilt_filter']) ? array_map(static fn ($item) => new TriggerListGetResponsePrebuiltFilter((array)$item), (array)$data['a_prebuilt_filter']) : null;
        $this->a_prebuilt_list = isset($data['a_prebuilt_list']) ? array_map(static fn ($item) => new TriggerListGetResponsePrebuiltList((array)$item), (array)$data['a_prebuilt_list']) : null;
        $this->a_trigger_filter = isset($data['a_trigger_filter']) ? array_map(static fn ($item) => new TriggerListGetResponseTriggerFilter((array)$item), (array)$data['a_trigger_filter']) : null;
        $this->a_trigger_list = isset($data['a_trigger_list']) ? array_map(static fn ($item) => new TriggerListGetResponseTriggerList((array)$item), (array)$data['a_trigger_list']) : null;
    }
}
