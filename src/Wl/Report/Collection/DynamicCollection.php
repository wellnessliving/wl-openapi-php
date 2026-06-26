<?php

namespace WlSdk\Wl\Report\Collection;

/**
 * A report collection where shown reports can be specified by user.
 *
 * Values:
 * - 507 (`Wl\Metric\KeyMetricDynamicCollection`): Key Metrics dynamic collection.
 * - 1933 (`Wl\Metric\Foreign\KeyMetricForeignDynamicCollection`): Key Metrics dynamic collection, which is placed
 * outside monolithic report system.
 * - 2164 (`Wl\Metric\Foreign\MarketingMetricForeignDynamicCollection`): Key Metrics dynamic collection, which is
 * placed outside monolithic report system.
 * - 2163 (`Wl\Metric\Foreign\MembershipMetricForeignDynamicCollection`): Key Metrics dynamic collection, which is
 * placed outside monolithic report system.
 */
class DynamicCollection
{
    /** Key Metrics dynamic collection. */
    public const KeyMetricDynamicCollection = 507;

    /** Key Metrics dynamic collection, which is placed outside monolithic report system. */
    public const KeyMetricForeignDynamicCollection = 1933;

    /** Key Metrics dynamic collection, which is placed outside monolithic report system. */
    public const MarketingMetricForeignDynamicCollection = 2164;

    /** Key Metrics dynamic collection, which is placed outside monolithic report system. */
    public const MembershipMetricForeignDynamicCollection = 2163;
}
