<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

/**
 * Response from GET
 */
class DashboardWidgetListGetResponse
{
    /**
     * List of report categories available to the user and that have at least 1 widget in the `a_widget_list`
     * below. Each item has the following structure:
     *
     * @var DashboardWidgetListGetResponseCategoryList|null
     */
    public ?DashboardWidgetListGetResponseCategoryList $a_category_list = null;

    /**
     * List of widgets that should be pre-selected by default for a new dashboard. Each item is an array with the
     * following structure:
     *
     * @var DashboardWidgetListGetResponseWidgetDefaultList|null
     */
    public ?DashboardWidgetListGetResponseWidgetDefaultList $a_widget_default_list = null;

    /**
     * List of available widgets. Each item is an array with the following structure:
     *
     * @var DashboardWidgetListGetResponseWidgetList|null
     */
    public ?DashboardWidgetListGetResponseWidgetList $a_widget_list = null;

    public function __construct(array $data)
    {
        $this->a_category_list = isset($data['a_category_list']) ? new DashboardWidgetListGetResponseCategoryList((array)$data['a_category_list']) : null;
        $this->a_widget_default_list = isset($data['a_widget_default_list']) ? new DashboardWidgetListGetResponseWidgetDefaultList((array)$data['a_widget_default_list']) : null;
        $this->a_widget_list = isset($data['a_widget_list']) ? new DashboardWidgetListGetResponseWidgetList((array)$data['a_widget_list']) : null;
    }
}
