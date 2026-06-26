<?php

namespace WlSdk\Wl\Search\Criteria;

/**
 * Response from GET
 */
class SearchCriteriaListGetResponse
{
    /**
     * A list of criteria with default (empty) data. Used to display default criteria list.
     * For detailed description of the elements of the array see SearchCriteriaList::toArray().
     *
     * @var array|null
     */
    public ?array $a_criteria_list_default = null;

    /**
     * Logic connection between criteria.
     * See `a_criteria_logic` for details.
     *
     * @var string[][]|null
     */
    public ?array $a_criteria_list_logic = null;

    /**
     * A list of saved criteria. For detailed description of the elements of the array see
     * SearchCriteriaList::toArray().
     *
     * @var array|null
     */
    public ?array $a_criteria_list_save = null;

    /**
     * Indicates that there are disabled criteria in the saved search.
     *
     * @var bool|null
     */
    public ?bool $has_disable = null;

    public function __construct(array $data)
    {
        $this->a_criteria_list_default = isset($data['a_criteria_list_default']) ? (array)$data['a_criteria_list_default'] : null;
        $this->a_criteria_list_logic = isset($data['a_criteria_list_logic']) ? (array)$data['a_criteria_list_logic'] : null;
        $this->a_criteria_list_save = isset($data['a_criteria_list_save']) ? (array)$data['a_criteria_list_save'] : null;
        $this->has_disable = isset($data['has_disable']) ? (bool)$data['has_disable'] : null;
    }
}
