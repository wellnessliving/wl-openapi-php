<?php
namespace WlSdk\Wl\Skin\Application\Resource;

/**
 * Mobile applications categories which will be displayed in select tag.
 * 
 * Values:
 * - 1 (`BEAUTY`): Mobile applications with content related to the sphere of cosmetology and appearance.
 * - 2 (`BUSINESS`): Mobile applications with content related to the sphere of Business and finance.
 * - 3 (`EDUCATION`): Mobile applications with content related to the sphere education.
 * - 4 (`ENTERTAINMENT`): Mobile applications with content related to the sphere entertainment.
 * - 5 (`EVENTS`): Mobile applications with content related with various events.
 * - 6 (`HEALTH_AND_FITNESS`): Mobile applications with content related to the sphere health, sport and fitness.
 * - 7 (`LIFESTYLE`): Mobile applications with content related to the life style.
 * - 8 (`MEDICAL`): Mobile applications with content related to the sphere health, and medical services.
 * - 9 (`SOCIAL`): Mobile applications with content related with various social events.
 * - 10 (`SPORTS`): Mobile applications with content related with various sports events.
 * - 11 (`TOOLS`): Mobile applications with content for performing certain tasks.
 * - 12 (`TRAVEL_AND_LOCAL`): Mobile applications with content related to the sphere of travel and geography.
 */
enum ApplicationCategorySid: int
{
    case BEAUTY = 1;
    case BUSINESS = 2;
    case EDUCATION = 3;
    case ENTERTAINMENT = 4;
    case EVENTS = 5;
    case HEALTH_AND_FITNESS = 6;
    case LIFESTYLE = 7;
    case MEDICAL = 8;
    case SOCIAL = 9;
    case SPORTS = 10;
    case TOOLS = 11;
    case TRAVEL_AND_LOCAL = 12;
}
