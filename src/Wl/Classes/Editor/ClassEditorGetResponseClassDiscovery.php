<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassDiscovery
{
    /**
     * Keys of the Book Now Tabs the class is shown in.
     *
     * Every element is a `text_key` of the tab: the ID of the tab object and the key of the tab joined with a
     * hyphen.
     * The key of a system tab is `0`. Empty for a class that is shown in no tab.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * Keys of the quick search tags of the class.
     *
     * Empty for a class with no tags.
     *
     * @var string[]|null
     */
    public ?array $a_search_tag = null;

    /**
     * Keys of the store categories the class is listed under.
     *
     * Empty for a class that is listed under no category.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * Keys of the revenue categories the drop-in revenue of the class is tracked under.
     *
     * Empty for a class with no revenue category.
     *
     * @var string[]|null
     */
    public ?array $a_tag = null;

    /**
     * `true` if the class is hidden in the White Label Achieve Client App, `false` if it is shown there.
     *
     * Only an administrator may change it. A value posted by another staff member is ignored.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * `true` if the class is offered on Wellhub, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_gym_pass = null;

    /**
     * Key of the revenue category the drop-in revenue of the class is tracked under first of all.
     *
     * Empty string for a class with no revenue category. Always one of `a_tag`.
     *
     * @var string|null
     */
    public ?string $k_tag_primary = null;

    /**
     * Revenue the business earns per client per session of a class offered on Wellhub.
     *
     * Only taken into account while `is_gym_pass` is `true`.
     *
     * @var string|null
     */
    public ?string $m_revenue_gym_pass = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? (array)$data['a_search_tag'] : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
        $this->a_tag = isset($data['a_tag']) ? (array)$data['a_tag'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->is_gym_pass = isset($data['is_gym_pass']) ? (bool)$data['is_gym_pass'] : null;
        $this->k_tag_primary = isset($data['k_tag_primary']) ? (string)$data['k_tag_primary'] : null;
        $this->m_revenue_gym_pass = isset($data['m_revenue_gym_pass']) ? (string)$data['m_revenue_gym_pass'] : null;
    }
}
