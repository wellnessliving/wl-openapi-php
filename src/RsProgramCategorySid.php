<?php
namespace WlSdk;

/**
 * Program type categories.
 * 
 * Last used ID: 9.
 * 
 * Values:
 * - 7 (`ACCOUNT`): Purchase options to fill user's account:
 *   <ul>
 *     <li>[RsProgramSid::ACCOUNT_PASS](#/components/schemas/RsProgramSid)</li>
 *   </ul>
 * - 1 (`CLASSES`): Purchase options to pay for classes, events and enrollments:
 *   <ul>
 *     <li>[RsProgramSid::CLASS_LIMIT](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::CLASS_MEMBERSHIP](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::CLASS_PASS](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::CLASS_PROSPECT](#/components/schemas/RsProgramSid)</li>
 *   </ul>
 * - 8 (`INSURANCE`): Special "Wellness Program" purchase option.
 * - 5 (`OTHER`): Packages and daily deals.
 * - 6 (`RESOURCE`): Resource category.
 * 
 *   This is a category grouped next program sids:
 *   <ul>
 *     <li>[RsProgramSid::RESOURCE_DURATION](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::RESOURCE_LIMIT](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::RESOURCE_MEMBERSHIP](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::RESOURCE_PASS](#/components/schemas/RsProgramSid)</li>
 *   </ul>
 * - 3 (`SERVICE`): Purchase options to pay for appointments:
 *   <ul>
 *     <li>[RsProgramSid::SERVICE_LIMIT](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::SERVICE_MEMBERSHIP](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::SERVICE_PASS](#/components/schemas/RsProgramSid)</li>
 *   </ul>
 * - 9 (`VIDEO`): Purchase options to pay for videos:<ui>
 *     <li>[RsProgramSid::VIDEO_MEMBERSHIP](#/components/schemas/RsProgramSid)</li>
 *   </ui>
 * - 2 (`VISIT`): Purchase options to pay for gym visits:
 *   <ul>
 *     <li>[RsProgramSid::VISIT_LIMIT](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::VISIT_MEMBERSHIP](#/components/schemas/RsProgramSid)</li>
 *     <li>[RsProgramSid::VISIT_PASS](#/components/schemas/RsProgramSid)</li>
 *   </ul>
 */
enum RsProgramCategorySid: int
{
    case ACCOUNT = 7;
    case CLASSES = 1;
    case INSURANCE = 8;
    case OTHER = 5;
    case RESOURCE = 6;
    case SERVICE = 3;
    case VIDEO = 9;
    case VISIT = 2;
}
