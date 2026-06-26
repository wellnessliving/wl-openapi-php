<?php

namespace WlSdk\Wl\Search\Criteria;

class SearchCriteriaListGetRequest
{
    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of existing template.
     * Primary key in the SearchTemplateSql table.
     *
     * Can be empty if template needs to be created.
     *
     * @var string|null
     */
    public ?string $k_search_template = null;

    /**
     * Search entity CID list, separated by commas.
     * Constants from {@link \WlSdk\Wl\Search\SearchEntityAbstract} subclasses.
     *
     * @var string|null
     */
    public ?string $s_search_entity = null;

    /**
     * Unique string identifying the name of the search group.
     *
     * @var string|null
     */
    public ?string $s_search_group = null;

    /**
     * User key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_search_template' => $this->k_search_template,
            's_search_entity' => $this->s_search_entity,
            's_search_group' => $this->s_search_group,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
