<?php
namespace WlSdk;

/**
 * Type of facilities available at a location.
 * 
 * Last ID: 93.
 * 
 * Values:
 * - 18 (`ACCESSIBLE_PARKING`): The location has accessible parking.
 * - 22 (`APP_CHECK_IN`): The location allows app check-in.
 * - 24 (`AQUATIC_WHEELCHAIR_ACCESS`): The location has aquatic wheelchair access.
 * - 23 (`ASIAN_OWNED`): This location has Asian owned.
 * - 25 (`BARRE_EQUIPMENT`): This location has barre equipment.
 * - 8 (`BASKETBALL_COURTS`): This location has basketball courts.
 * - 26 (`BIKE_RACKS`): This location has bike racks.
 * - 27 (`BLACK_OWNED`): This location is black owned.
 * - 28 (`BOXING_RINGS_HEAVY_BAGS`): This location has boxing rings or heavy bags.
 * - 29 (`CARDIO_MACHINES`): This location has cardio machines.
 * - 1 (`CHANGE_ROOM`): This location has change rooms.
 * - 14 (`CHILDCARE`): This location has childcare services.
 * - 30 (`CLASSROOMS`): This location has classrooms.
 * - 31 (`CLIMBING_BOULDERING_WALL`): This location has climbing bouldering wall.
 * - 32 (`CLIMBING_WALLS`): This location has climbing walls.
 * - 33 (`CLOSE_PUBLIC_TRANSIT`): This location is close to public transit.
 * - 34 (`COLD_PLUNGE`): This location has cold plunge.
 * - 35 (`COUPLES_TREATMENT_ROOMS`): This location has couples treatment rooms.
 * - 36 (`CRYOTHERAPY`): This location has cryotherapy.
 * - 37 (`DIAPER_CHANGING_STATIONS`): This location has diaper changing stations.
 * - 38 (`DISABILITY_OWNED`): This location is disability owned.
 * - 39 (`ECO_FRIENDLY_PRACTICES`): This location has eco-friendly practices.
 * - 40 (`ELEVATOR_RAMPS`): This location has elevator ramps.
 * - 41 (`EQUESTRIAN_FACILITIES`): This location has equestrian facilities.
 * - 19 (`EQUIPMENT_RENTALS`): This location has equipment rentals.
 * - 42 (`ESA_FRIENDLY`): This location is ESA friendly.
 * - 43 (`EV_CHARGING_STATIONS`): This location has EV charging stations.
 * - 44 (`FAMILY_FRIENDLY`): This location is family friendly.
 * - 45 (`FAMILY_OWNED`): This location is family owned.
 * - 46 (`FAMILY_RESTROOM`): This location has family restroom.
 * - 20 (`FOOD_DRINK`): This location has food drink.
 * - 47 (`FREE_WEIGHTS_AREA`): This location has free weights area.
 * - 48 (`GENDER_NEUTRAL_RESTROOM`): This location has gender neutral restroom.
 * - 49 (`GROUP_FITNESS_STUDIO`): This location has group fitness studio.
 * - 50 (`HAIR_STYLING_STATIONS`): This location has hair styling stations.
 * - 51 (`HOT_TUB`): This location has hot tub.
 * - 52 (`HYDROTHERAPY`): This location has hydrotherapy.
 * - 53 (`ICE_SKATING_RINKS`): This location has ice skating rinks.
 * - 54 (`INDIGENOUS_OWNED`): This location is indigenous owned.
 * - 55 (`INDOOR_TURF_FIELD`): This location has indoor turf field.
 * - 15 (`JUICE_BAR`): This location has a juice bar.
 * - 56 (`LACTATION_ROOM`): This location has lactation room.
 * - 58 (`LASER_TREATMENTS`): This location has laser treatments.
 * - 57 (`LATINX_OWNED`): This location is Latinx owned.
 * - 59 (`LEED_CERTIFIED_BUILDING`): This location is LEED certified building.
 * - 60 (`LGBTQ_FRIENDLY`): This location is LGBTQ friendly.
 * - 61 (`LGBTQ_OWNED`): This location is LGBTQ owned.
 * - 2 (`LOCKERS`): This location has lockers available for clients.
 * - 62 (`MANICURE_PEDICURE_STATIONS`): This location has manicure/pedicure stations.
 * - 63 (`MASSAGE_TABLES_CHAIRS`): This location has massage tables/chairs.
 * - 64 (`MEDITATION_QUIET_ROOM`): This location has meditation/quiet room.
 * - 65 (`MUSIC_PRACTICE_ROOMS`): This location has music practice rooms.
 * - 66 (`NEURODIVERSE_FRIENDLY`): This location is neurodiverse friendly.
 * - 67 (`NINJA_PARKOUR_STRUCTURES`): This location has ninja/parkour structures.
 * - 16 (`ON_SITE_PARKING`): This location has site parking for clients.
 * - 68 (`OUTDOOR_SPORTS_FIELD`): This location has outdoor sports field.
 * - 69 (`OUTDOOR_TRAINING_SPACE`): This location has outdoor training space.
 * - 17 (`PARKING_NEARBY`): This location has parking nearby for clients.
 * - 70 (`PET_FRIENDLY`): This location is pet friendly.
 * - 72 (`PICKLEBALL_COURTS`): This location has pickleball courts.
 * - 71 (`PILATES_REFORMERS`): This location has pilates reformers.
 * - 73 (`POLE_AERIAL_EQUIPMENT`): This location has pole/aerial equipment.
 * - 74 (`POOL_LIFT`): This location has pool lift.
 * - 75 (`PRIVATE_TREATMENT_ROOMS`): This location has private treatment rooms.
 * - 12 (`PRO_SHOP`): This location has a pro-shop.
 * - 7 (`RACQUETBALL_COURTS`): This location has racquetball courts.
 * - 76 (`REHAB_EQUIPMENT`): This location has rehab equipment.
 * - 77 (`RUNNING_TRACK`): This location has running track.
 * - 78 (`SAFE_SPACE_CERTIFIED`): This location is safe space certified.
 * - 10 (`SAUNA`): This location has saunas.
 * - 79 (`SENIOR_FRIENDLY`): This location is senior friendly.
 * - 4 (`SHOWERS`): This location has showers.
 * - 80 (`SMART_FITNESS_EQUIPMENT`): This location has smart fitness equipment.
 * - 9 (`SPA`): This location has a spa.
 * - 81 (`SPIN_BIKES`): This location has spin bikes.
 * - 6 (`SQUASH_COURTS`): This location has squash courts.
 * - 82 (`STEAM_ROOM`): This location has steam room.
 * - 83 (`STRENGTH_MACHINES`): This location has strength machines.
 * - 11 (`SWIMMING_POOL`): This location has a swimming pool.
 * - 84 (`TANNING_BEDS`): This location has tanning beds.
 * - 85 (`TATTOO_EQUIPMENT`): This location has tattoo equipment.
 * - 5 (`TOWEL_SERVICE`): This location provides towel service.
 * - 86 (`TRAUMA_INFORMED`): This location is trauma informed.
 * - 87 (`TURF_FUNCTIONAL_TRAINING`): This location has turf/functional training.
 * - 89 (`VETERAN_OWNED`): This location is veteran owned.
 * - 88 (`VIRTUAL_HYBRID_CLASSES`): This location offers virtual/hybrid classes.
 * - 3 (`WASHROOMS`): This location has washrooms for clients.
 * - 90 (`WHEELCHAIR_ACCESSIBLE_ENTRANCE`): This location has wheelchair accessible entrance.
 * - 91 (`WHEELCHAIR_ACCESSIBLE_RESTROOM`): This location has wheelchair accessible restroom.
 * - 13 (`WOMAN_ONLY_AREA`): This location has a woman's only area.
 * - 92 (`WOMEN_OWNED`): This location is women owned.
 * - 93 (`ZERO_DEPTH_ENTRY_POOL`): This location has zero depth entry pool.
 */
class RsFacilitySid
{
    /** The location has accessible parking. */
    const ACCESSIBLE_PARKING = 18;
    /** The location allows app check-in. */
    const APP_CHECK_IN = 22;
    /** The location has aquatic wheelchair access. */
    const AQUATIC_WHEELCHAIR_ACCESS = 24;
    /** This location has Asian owned. */
    const ASIAN_OWNED = 23;
    /** This location has barre equipment. */
    const BARRE_EQUIPMENT = 25;
    /** This location has basketball courts. */
    const BASKETBALL_COURTS = 8;
    /** This location has bike racks. */
    const BIKE_RACKS = 26;
    /** This location is black owned. */
    const BLACK_OWNED = 27;
    /** This location has boxing rings or heavy bags. */
    const BOXING_RINGS_HEAVY_BAGS = 28;
    /** This location has cardio machines. */
    const CARDIO_MACHINES = 29;
    /** This location has change rooms. */
    const CHANGE_ROOM = 1;
    /** This location has childcare services. */
    const CHILDCARE = 14;
    /** This location has classrooms. */
    const CLASSROOMS = 30;
    /** This location has climbing bouldering wall. */
    const CLIMBING_BOULDERING_WALL = 31;
    /** This location has climbing walls. */
    const CLIMBING_WALLS = 32;
    /** This location is close to public transit. */
    const CLOSE_PUBLIC_TRANSIT = 33;
    /** This location has cold plunge. */
    const COLD_PLUNGE = 34;
    /** This location has couples treatment rooms. */
    const COUPLES_TREATMENT_ROOMS = 35;
    /** This location has cryotherapy. */
    const CRYOTHERAPY = 36;
    /** This location has diaper changing stations. */
    const DIAPER_CHANGING_STATIONS = 37;
    /** This location is disability owned. */
    const DISABILITY_OWNED = 38;
    /** This location has eco-friendly practices. */
    const ECO_FRIENDLY_PRACTICES = 39;
    /** This location has elevator ramps. */
    const ELEVATOR_RAMPS = 40;
    /** This location has equestrian facilities. */
    const EQUESTRIAN_FACILITIES = 41;
    /** This location has equipment rentals. */
    const EQUIPMENT_RENTALS = 19;
    /** This location is ESA friendly. */
    const ESA_FRIENDLY = 42;
    /** This location has EV charging stations. */
    const EV_CHARGING_STATIONS = 43;
    /** This location is family friendly. */
    const FAMILY_FRIENDLY = 44;
    /** This location is family owned. */
    const FAMILY_OWNED = 45;
    /** This location has family restroom. */
    const FAMILY_RESTROOM = 46;
    /** This location has food drink. */
    const FOOD_DRINK = 20;
    /** This location has free weights area. */
    const FREE_WEIGHTS_AREA = 47;
    /** This location has gender neutral restroom. */
    const GENDER_NEUTRAL_RESTROOM = 48;
    /** This location has group fitness studio. */
    const GROUP_FITNESS_STUDIO = 49;
    /** This location has hair styling stations. */
    const HAIR_STYLING_STATIONS = 50;
    /** This location has hot tub. */
    const HOT_TUB = 51;
    /** This location has hydrotherapy. */
    const HYDROTHERAPY = 52;
    /** This location has ice skating rinks. */
    const ICE_SKATING_RINKS = 53;
    /** This location is indigenous owned. */
    const INDIGENOUS_OWNED = 54;
    /** This location has indoor turf field. */
    const INDOOR_TURF_FIELD = 55;
    /** This location has a juice bar. */
    const JUICE_BAR = 15;
    /** This location has lactation room. */
    const LACTATION_ROOM = 56;
    /** This location has laser treatments. */
    const LASER_TREATMENTS = 58;
    /** This location is Latinx owned. */
    const LATINX_OWNED = 57;
    /** This location is LEED certified building. */
    const LEED_CERTIFIED_BUILDING = 59;
    /** This location is LGBTQ friendly. */
    const LGBTQ_FRIENDLY = 60;
    /** This location is LGBTQ owned. */
    const LGBTQ_OWNED = 61;
    /** This location has lockers available for clients. */
    const LOCKERS = 2;
    /** This location has manicure/pedicure stations. */
    const MANICURE_PEDICURE_STATIONS = 62;
    /** This location has massage tables/chairs. */
    const MASSAGE_TABLES_CHAIRS = 63;
    /** This location has meditation/quiet room. */
    const MEDITATION_QUIET_ROOM = 64;
    /** This location has music practice rooms. */
    const MUSIC_PRACTICE_ROOMS = 65;
    /** This location is neurodiverse friendly. */
    const NEURODIVERSE_FRIENDLY = 66;
    /** This location has ninja/parkour structures. */
    const NINJA_PARKOUR_STRUCTURES = 67;
    /** This location has site parking for clients. */
    const ON_SITE_PARKING = 16;
    /** This location has outdoor sports field. */
    const OUTDOOR_SPORTS_FIELD = 68;
    /** This location has outdoor training space. */
    const OUTDOOR_TRAINING_SPACE = 69;
    /** This location has parking nearby for clients. */
    const PARKING_NEARBY = 17;
    /** This location is pet friendly. */
    const PET_FRIENDLY = 70;
    /** This location has pickleball courts. */
    const PICKLEBALL_COURTS = 72;
    /** This location has pilates reformers. */
    const PILATES_REFORMERS = 71;
    /** This location has pole/aerial equipment. */
    const POLE_AERIAL_EQUIPMENT = 73;
    /** This location has pool lift. */
    const POOL_LIFT = 74;
    /** This location has private treatment rooms. */
    const PRIVATE_TREATMENT_ROOMS = 75;
    /** This location has a pro-shop. */
    const PRO_SHOP = 12;
    /** This location has racquetball courts. */
    const RACQUETBALL_COURTS = 7;
    /** This location has rehab equipment. */
    const REHAB_EQUIPMENT = 76;
    /** This location has running track. */
    const RUNNING_TRACK = 77;
    /** This location is safe space certified. */
    const SAFE_SPACE_CERTIFIED = 78;
    /** This location has saunas. */
    const SAUNA = 10;
    /** This location is senior friendly. */
    const SENIOR_FRIENDLY = 79;
    /** This location has showers. */
    const SHOWERS = 4;
    /** This location has smart fitness equipment. */
    const SMART_FITNESS_EQUIPMENT = 80;
    /** This location has a spa. */
    const SPA = 9;
    /** This location has spin bikes. */
    const SPIN_BIKES = 81;
    /** This location has squash courts. */
    const SQUASH_COURTS = 6;
    /** This location has steam room. */
    const STEAM_ROOM = 82;
    /** This location has strength machines. */
    const STRENGTH_MACHINES = 83;
    /** This location has a swimming pool. */
    const SWIMMING_POOL = 11;
    /** This location has tanning beds. */
    const TANNING_BEDS = 84;
    /** This location has tattoo equipment. */
    const TATTOO_EQUIPMENT = 85;
    /** This location provides towel service. */
    const TOWEL_SERVICE = 5;
    /** This location is trauma informed. */
    const TRAUMA_INFORMED = 86;
    /** This location has turf/functional training. */
    const TURF_FUNCTIONAL_TRAINING = 87;
    /** This location is veteran owned. */
    const VETERAN_OWNED = 89;
    /** This location offers virtual/hybrid classes. */
    const VIRTUAL_HYBRID_CLASSES = 88;
    /** This location has washrooms for clients. */
    const WASHROOMS = 3;
    /** This location has wheelchair accessible entrance. */
    const WHEELCHAIR_ACCESSIBLE_ENTRANCE = 90;
    /** This location has wheelchair accessible restroom. */
    const WHEELCHAIR_ACCESSIBLE_RESTROOM = 91;
    /** This location has a woman's only area. */
    const WOMAN_ONLY_AREA = 13;
    /** This location is women owned. */
    const WOMEN_OWNED = 92;
    /** This location has zero depth entry pool. */
    const ZERO_DEPTH_ENTRY_POOL = 93;
}
