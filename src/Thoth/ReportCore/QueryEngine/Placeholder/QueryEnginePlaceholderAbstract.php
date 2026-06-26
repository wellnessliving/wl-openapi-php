<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Placeholder;

/**
 * Base class for registered SQL `placeholder` types.
 *
 * SQL reports in this module only accept `name` placeholders that are pre-registered as
 *  subclasses of this abstract. Authors may not invent new names - unknown `name` tokens
 *  are rejected at save time.
 *  This is the explicit contract decided in the 19.05.2026 call with YV:
 *  *"имена переменных предопределены, конкретное имя добавляет
 * конкретный фильтр"*.
 *
 * Each subclass declares:
 * -
 * [QueryEnginePlaceholderAbstract::NAME](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract)
 * - the literal `name` in SQL (without `@`).
 * -
 * [QueryEnginePlaceholderAbstract::FILTER_FIELD_CLASS](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract)
 * - the `FilterField` rendered on
 *    the report page when this placeholder appears in SQL. `null` means context-injected
 *    (value comes from ReportQueryContext without UI).
 * -
 * [QueryEnginePlaceholderAbstract::TITLE](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract)
 * - human-readable description shown in admin
 *  autocomplete and `Placeholder/doc/README.md`.
 * -
 * [QueryEnginePlaceholderAbstract::USAGE_HINT](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract)
 * - SQL usage hint -- describes the widget
 *   type, injected value, key behaviors, and SQL example. Shown in the admin placeholder
 *   reference panel and auto-injected into the AI system prompt via `{{PLACEHOLDER_HINTS}}`
 *   in ReportQueryAiClient. Plain text, no markup.
 *   Empty string for the abstract base.
 *
 * Lookup is keyed by `NAME` and uses the CidTrait::cidAll() reflection scan so any new
 *  subclass with a registered CID becomes discoverable automatically.
 *
 * Values:
 * - 2239 (`Thoth\ReportCore\QueryEngine\Placeholder\ActorPlaceholder`): Placeholder `actor`(with `@`) - the UID of the
 * current actor (logged-in staff or user).
 *
 *   Context-injected: no UI field is rendered. The value is taken from
 *    `uid_actor` and placed into
 *    `a_filter['actor']` by `ReportQueryReport::_buildContext()` (step06d).
 *
 *   SQL example (placeholder name written without `@` to avoid `PhpStorm` tooltip truncation):
 *   `select m_amount from rs_pay_transaction where uid_sale=actor`
 * - 2240 (`Thoth\ReportCore\QueryEngine\Placeholder\BusinessActorPlaceholder`): Placeholder `business`(with `@`) - the
 * key of the current business context.
 *
 *   Context-injected: no UI field is rendered. The value is taken from
 *    `k_business` and placed into
 *    `a_filter['business']` by `ReportQueryReport::_buildContext()` (step06d).
 *
 *   SQL example:
 *   `select uid from passport_login where k_business=business`
 *
 *   Note: most built-in
 * [QueryEngineTableAbstract](#/components/schemas/Thoth.ReportCore.QueryEngine.QueryEngineTableAbstract) subclasses
 *    already filter by `k_business` through their own `load()` SQL. This placeholder is for user-authored SQL
 *    that references business key in a custom WHERE clause.
 * - 2242 (`Thoth\ReportCore\QueryEngine\Placeholder\DateRangePlaceholder`): Placeholder `date_range`(with `@`) - a
 * date range filter (from/to) rendered as a two-date picker.
 *
 *   Maps to DateRangeFilterField. The user selects a date range and the value
 *    is placed into `a_filter['date_range']` as `['dl_start' => '...', 'dl_end' => '...']`.
 *
 *   The sub-keys are accessed in SQL as `date_range.dl_start` and `date_range.dl_end`.
 *
 *   **Important: do NOT use `BETWEEN date_range.dl_start AND date_range.dl_end`.**
 *   The PHP executor splits WHERE on every `AND` keyword, so the `AND` inside `BETWEEN` is treated
 *    as a logical separator, cutting the clause into two fragments that both pass silently (no filtering).
 *   Use `>=` / `<=` instead:
 *   `select k_pay_transaction, dt_date, f_amount from rs_pay_transaction where dt_date >= date_range.dl_start and
 * dt_date <= date_range.dl_end`
 * - 2246 (`Thoth\ReportCore\QueryEngine\Placeholder\DlEndPlaceholder`): Placeholder `dl_end` (with `@`) - the end of
 * the selected date range.
 *   Always used together with
 * [DlStartPlaceholder](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract)
 * (`dl_start`).
 *
 *   Context-injected: no UI field of its own is rendered. The value is placed into
 *    `a_filter['dl_end']` as a side-effect of
 * [DlStartPlaceholder::injectContext()](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract),
 *    which handles both endpoints of the date range in a single call.
 *
 *   SQL example (placeholder names written without `@` to avoid `PhpStorm` tooltip truncation):
 *   `select m_amount from rs_pay_transaction where dt_date between dl_start and dl_end`
 * - 2245 (`Thoth\ReportCore\QueryEngine\Placeholder\DlStartPlaceholder`): Placeholder `dl_start` (with `@`) - the
 * start of the selected date range.
 *   Always used together with
 * [DlEndPlaceholder](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract)
 * (`dl_end`).
 *
 *   When `dl_start` appears in the SQL WHERE clause, the report framework creates a
 *    DlStartFilterField UI date picker.
 * [DlStartPlaceholder::injectContext()](#/components/schemas/Thoth.ReportCore.QueryEngine.Placeholder.QueryEnginePlaceholderAbstract)
 *    reads both endpoints from the picker and writes them into `a_filter['dl_start']` and
 *    `a_filter['dl_end']`, so `dl_end` never needs a separate UI field.
 *
 *   SQL example (placeholder names written without `@` to avoid `PhpStorm` tooltip truncation):
 *   `select m_amount from rs_pay_transaction where dt_date between dl_start and dl_end`
 * - 2243 (`Thoth\ReportCore\QueryEngine\Placeholder\SearchPlaceholder`): Text search filter.
 *   Placeholder `search` - a free-text search filter rendered as a text input on the report page.
 *
 *   Maps to QueryEngineReportTextFilterField. The user types a search string and the value is
 *    placed into `a_filter['search']` as a plain string.
 *
 *   The PHP executor supports `=`, `!=` (exact match) and `LIKE`, `NOT LIKE` (pattern match) in WHERE.
 *    `LIKE` patterns follow standard SQL syntax: `%` matches any sequence of characters,
 *    `_` matches any single character. Matching is case-insensitive (mirrors MySQL `utf8_unicode_ci`).
 *    The user must include `%` wildcards explicitly: `%john%` finds any record containing "john".
 *
 *   ### Columns do not need to appear in SELECT
 *
 *   A column used in WHERE does not have to be in the SELECT clause.
 *   Every table's `load()` always returns all its properties; the executor evaluates WHERE
 *    conditions against the full joined row regardless of which columns are projected into the output.
 *    This lets you filter by name, e-mail, or phone without adding those as visible report columns.
 *
 *   SQL example - multi-field partial search (name, e-mail, phone):
 *   `select rs_login_member.uid as `Client.formatUid`, rs_login_member.dt_add as `Member Since.formatDate` from
 * rs_login_member left join passport_login on passport_login.uid=rs_login_member.uid left join wl_user_profile on
 * wl_user_profile.uid=rs_login_member.uid where passport_login.s_mail LIKE @search or passport_login.s_realname LIKE
 * @search or wl_user_profile.s_phone_cell LIKE @search`
 *
 *   User enters `%smith%` to find all Smiths, `%@gmail%` for gmail addresses, `%555%` for phone fragments.
 * - 2244 (`Thoth\ReportCore\QueryEngine\Placeholder\YesNoPlaceholder`): Placeholder `yes_no` - a yes/no boolean filter
 * rendered as a radio/dropdown on the report page.
 *
 *   Maps to QueryEngineYesNoSidListFilterField. The user picks Yes or No and the value is placed
 *    into `a_filter['yes_no']` as a string SID (`'1'` for Yes, `'2'` for No per
 *    [YesNoSid](#/components/schemas/Core.Sid.YesNoSid)).
 *
 *   SQL example - filter transactions by payment status:
 *   `select k_pay_transaction, f_amount, id_pay_transaction_status from rs_pay_transaction where
 * id_pay_transaction_status = yes_no`
 *
 *   Note: `passport_login` cannot be the driving table in FROM (it has
 *    `IS_FIRST_TABLE_ALLOWED = false`). Use `rs_pay_transaction` as first table and join
 *    `passport_login` when client data is needed.
 * - 2271 (`Thoth\ReportCore\QueryEngine\Placeholder\ClientTypePlaceholder`): Placeholder `client_type` - filters rows
 * by the client's login type (multi-select checklist).
 *
 *   Maps to QueryEngineClientTypeFilterField. The user selects one or more client types and the
 *    selected `k_login_type` keys are placed into `a_filter['client_type']` as a string array.
 *
 *   The executor evaluates the `=` operator with an array value as `IN(...)`, so
 *    `WHERE rs_login_member.k_login_type_client = @client_type` keeps only rows whose client
 *    type is in the selected list.
 *
 *   When no type is selected the condition is skipped and all rows pass.
 *
 *   SQL example:
 *   `sql select rs_login_member.uid as `Client.formatUid` from rs_login_member where
 * rs_login_member.k_login_type_client = @client_type`
 * - 2274 (`Thoth\ReportCore\QueryEngine\Placeholder\IntRangePlaceholder`): Placeholder `i_range` - numeric range
 * filter (min/max) with sub-key access.
 *
 *   Maps to QueryEngineIntRangeFilterField. The user fills in zero, one, or two number
 *    inputs (Min / Max). The values are placed into `a_filter['i_range']` as an associative array
 *    with keys `i_min` and `i_max`. The executor resolves sub-key access so
 *    `@i_range.i_min` and `@i_range.i_max` work in WHERE conditions.
 *
 *   Both bounds are optional. When neither is set nothing is injected and all rows pass.
 *    When only one bound is set the other condition is skipped automatically.
 *
 *   The executor already handles `>=` and `<=` with bcmath numeric comparison (same as
 *    ReportQueryExecutor::_compareValues()), so no
 *    executor changes are needed.
 *
 *   **Multiple ranges in one report:** to use two independent ranges register `@i_range_2`
 *    as a second `IntRangePlaceholder` subclass.
 *
 *   SQL example (points balance range):
 *   `select rs_login_member.uid as `Client.formatUid`, rs_reward_score_summary.i_score_balance as `Points Balance`
 * from rs_login_member left join rs_reward_score_summary on rs_reward_score_summary.uid=rs_login_member.uid where
 * rs_reward_score_summary.i_score_balance >= @i_range.i_min and rs_reward_score_summary.i_score_balance <=
 * @i_range.i_max`
 * - 2272 (`Thoth\ReportCore\QueryEngine\Placeholder\LocationHomePlaceholder`): Placeholder `location_home` - filters
 * rows by the client's home location (multi-select).
 *
 *   Maps to QueryEngineLocationHomeFilterField. The user selects one or more locations and
 *    the selected `k_location` keys are placed into `a_filter['location_home']` as a string array.
 *
 *   The executor evaluates the `=` operator with an array value as `IN(...)`, so
 *    `WHERE rs_login_member.k_location = @location_home` keeps only rows whose home location
 *    is in the selected list.
 *
 *   When no location is selected the condition is skipped and all rows pass.
 *
 *   Only active locations are shown in the filter UI (enforced by the parent
 *    LocationListReportFilterField class).
 *
 *   SQL example:
 *   `sql select rs_login_member.uid as `Client.formatUid` from rs_login_member where rs_login_member.k_location =
 * @location_home`
 * - 2273 (`Thoth\ReportCore\QueryEngine\Placeholder\MemberGroupPlaceholder`): Placeholder `member_group` - filters
 * rows by client group membership (multi-select).
 *
 *   Maps to QueryEngineMemberGroupFilterField. The user selects one or more member groups
 *    and the selected `k_member_group` keys are placed into `a_filter['member_group']` as a
 *    string array.
 *
 *   The executor evaluates the `=` operator with an array value as `IN(...)`. To use this filter
 *    the SQL must LEFT JOIN `wl_member_group_user` on `uid`:
 *
 *   `select rs_login_member.uid as `Client.formatUid` from rs_login_member left join wl_member_group_user on
 * wl_member_group_user.uid=rs_login_member.uid where wl_member_group_user.k_member_group = @member_group`
 *
 *   Behaviour when `@member_group` is not selected: the condition is skipped and all rows pass
 *    (including clients with no group at all, since the LEFT JOIN keeps them with null columns).
 *
 *   **Phase 1 limitation:** the special options "No Group" (`K_NO_GROUP = '0'`) and
 *    "Quick Group" (`K_QUICK_GROUP = '-1'`) shown in the UI checklist are silently stripped from
 *    the injected array, because they are not real `k_member_group` primary keys and cannot be
 *    matched in the SQL executor. If only those special options are selected and no real groups
 *    are chosen, nothing is injected and all rows pass. Full support is deferred to Phase 2.
 */
class QueryEnginePlaceholderAbstract
{
    /** Placeholder `actor`(with `@`) - the UID of the current actor (logged-in staff or user). */
    public const ActorPlaceholder = 2239;

    /** Placeholder `business`(with `@`) - the key of the current business context. */
    public const BusinessActorPlaceholder = 2240;

    /** Placeholder `date_range`(with `@`) - a date range filter (from/to) rendered as a two-date picker. */
    public const DateRangePlaceholder = 2242;

    /** Placeholder `dl_end` (with `@`) - the end of the selected date range. */
    public const DlEndPlaceholder = 2246;

    /** Placeholder `dl_start` (with `@`) - the start of the selected date range. */
    public const DlStartPlaceholder = 2245;

    /** Text search filter. */
    public const SearchPlaceholder = 2243;

    /** Placeholder `yes_no` - a yes/no boolean filter rendered as a radio/dropdown on the report page. */
    public const YesNoPlaceholder = 2244;

    /** Placeholder `client_type` - filters rows by the client's login type (multi-select checklist). */
    public const ClientTypePlaceholder = 2271;

    /** Placeholder `i_range` - numeric range filter (min/max) with sub-key access. */
    public const IntRangePlaceholder = 2274;

    /** Placeholder `location_home` - filters rows by the client's home location (multi-select). */
    public const LocationHomePlaceholder = 2272;

    /** Placeholder `member_group` - filters rows by client group membership (multi-select). */
    public const MemberGroupPlaceholder = 2273;
}
