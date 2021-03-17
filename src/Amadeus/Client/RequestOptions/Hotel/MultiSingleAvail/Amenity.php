<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;

class Amenity
{
    public const ALL_DAY_FRONT_DESK = 1;
    public const ALL_DAY_ROOM_SERVICE = 2;
    public const ALL_DAY_SECURITY = 3;
    public const ADJOINING_ROOMS = 4;
    public const AIR_CONDITIONING = 5;
    public const AIRLINE_DESK = 6;
    public const ATM_CASH_MACHINE = 7;
    public const BABY_SITTING = 8;
    public const BBQ_PICNIC_AREA = 9;
    public const BILINGUAL_STAFF = 10;
    public const BOOKSTORE = 11;
    public const BOUTIQUES_STORES = 12;
    public const BRAILED_ELEVATORS = 13;
    public const BUSINESS_LIBRARY = 14;
    public const CAR_RENTAL_DESK = 15;
    public const CASINO = 16;
    public const CHECK_CASHING_POLICY = 17;
    public const CHECK_IN_KIOSK = 18;
    public const COCKTAIL_LOUNGE = 19;
    public const COFFEE_SHOP = 20;
    public const COIN_OPERATED_LAUNDRY = 21;
    public const CONCIERGE_DESK = 22;
    public const CONCIERGE_FLOOR = 23;
    public const CONFERENCE_FACILITIES = 24;
    public const COURTYARD = 25;
    public const CURRENCY_EXCHANGE = 26;
    public const DESK_WITH_ELECTRICAL_OUTLET = 27;
    public const DOCTOR_ON_CALL = 28;
    public const DOOR_MAN = 29;
    public const DRIVING_RANGE = 30;
    public const DRUGSTORE_PHARMACY = 31;
    public const DUTY_FREE_SHOP = 32;
    public const ELEVATORS = 33;
    public const EXECUTIVE_FLOOR = 34;
    public const EXERCISE_GYM = 35;
    public const EXPRESS_CHECK_IN = 36;
    public const EXPRESS_CHECK_OUT = 37;
    public const FAMILY_PLAN = 38;
    public const FLORIST = 39;
    public const FOLIOS = 40;
    public const FREE_AIRPORT_SHUTTLE = 41;
    public const FREE_PARKING = 42;
    public const FREE_TRANSPORTATION = 43;
    public const GAME_ROOM = 44;
    public const GIFT_NEWS_STAND = 45;
    public const HAIRDRESSER_BARBER = 46;
    public const ACCESSIBLE_FACILITIES = 47;
    public const HEALTH_CLUB = 48;
    public const HEATED_POOL = 49;
    public const HOUSEKEEPING_DAILY = 50;
    public const HOUSEKEEPING_WEEKLY = 51;
    public const ICE_MACHINE = 52;
    public const INDOOR_PARKING = 53;
    public const INDOOR_POOL = 54;
    public const JACUZZI = 55;
    public const JOGGING_TRACK = 56;
    public const KENNELS = 57;
    public const LAUNDRY_VALET_SERVICE = 58;
    public const LIQUOR_STORE = 59;
    public const LIVE_ENTERTAINMENT = 60;
    public const MASSAGE_SERVICES = 61;
    public const NIGHTCLUB = 62;
    public const OFF_SITE_PARKING = 63;
    public const ON_SITE_PARKING = 64;
    public const OUTDOOR_PARKING = 65;
    public const OUTDOOR_POOL = 66;
    public const PACKAGE_PARCEL_SERVICES = 67;
    public const PARKING = 68;
    public const PHOTOCOPY_CENTER = 69;
    public const PLAYGROUND = 70;
    public const POOL = 71;
    public const POOLSIDE_SNACK_BAR = 72;
    public const PUBLIC_ADDRESS_SYSTEM = 73;
    public const RAMP_ACCESS = 74;
    public const RECREATIONAL_VEHICLE_PARKING = 75;
    public const RESTAURANT = 76;
    public const ROOM_SERVICE = 77;
    public const SAFE_DEPOSIT_BOX = 78;
    public const SAUNA = 79;
    public const SECURITY = 80;
    public const SHOE_SHINE_STAND = 81;
    public const SHOPPING_MALL = 82;
    public const SOLARIUM = 83;
    public const SPA = 84;
    public const SPORTS_BAR = 85;
    public const STEAM_BATH = 86;
    public const STORAGE_SPACE = 87;
    public const SUNDRY_CONVENIENCE_STORE = 88;
    public const TECHNICAL_CONCIERGE = 89;
    public const THEATRE_DESK = 90;
    public const TOUR_SIGHTSEEING_DESK = 91;
    public const TRANSLATION_SERVICES = 92;
    public const TRAVEL_AGENCY = 93;
    public const TRUCK_PARKING = 94;
    public const VALET_CLEANING = 95;
    public const DRY_CLEANING = 96;
    public const VALET_PARKING = 97;
    public const VENDING_MACHINES = 98;
    public const VIDEO_TAPES = 99;
    public const WAKEUP_SERVICE = 100;
    public const WHEELCHAIR_ACCESS = 101;
    public const WHIRLPOOL = 102;
    public const MULTILINGUAL_STAFF = 103;
    public const WEDDING_SERVICES = 104;
    public const BANQUET_FACILITIES = 105;
    public const BELL_STAFF_PORTER = 106;
    public const BEAUTY_SHOP_SALON = 107;
    public const COMPLIMENTARY_SELF_SERVICE_LAUNDRY = 108;
    public const DIRECT_DIAL_TELEPHONE = 109;
    public const FEMALE_TRAVELER_ROOM_FLOOR = 110;
    public const PHARMACY = 111;
    public const STABLES = 112;
    public const HUNDRED_TWENTY_AC = 113;
    public const HUNDRED_TWENTY_DC = 114;
    public const TWO_HUNDRED_TWENTY_AC = 115;
    public const ACCESSIBLE_PARKING = 116;
    public const TWO_HUNDRED_TWENTY_DC = 117;
    public const BARBEQUE_GRILLS = 118;
    public const WOMEN_S_CLOTHING = 119;
    public const MEN_S_CLOTHING = 120;
    public const CHILDREN_S_CLOTHING = 121;
    public const SHOPS_AND_COMMERCIAL_SERVICES = 122;
    public const VIDEO_GAMES = 123;
    public const SPORTS_BAR_OPEN_FOR_LUNCH = 124;
    public const SPORTS_BAR_OPEN_FOR_DINNER = 125;
    public const ROOM_SERVICE_FULL_MENU = 126;
    public const ROOM_SERVICE_LIMITED_MENU = 127;
    public const ROOM_SERVICE_LIMITED_HOURS = 128;
    public const VALET_SAME_DAY_DRY_CLEANING = 129;
    public const BODY_SCRUB = 130;
    public const BODY_WRAP = 131;
    public const PUBLIC_AREA_AIR_CONDITIONED = 132;
    public const EFOLIO_AVAILABLE_TO_COMPANY = 133;
    public const INDIVIDUAL_EFOLIO_AVAILABLE = 134;
    public const VIDEO_REVIEW_BILLING = 135;
    public const BUTLER_SERVICE = 136;
    public const COMPLIMENTARY_IN_ROOM_COFFEE_OR_TEA = 137;
    public const COMPLIMENTARY_BUFFET_BREAKFAST = 138;
    public const COMPLIMENTARY_COCKTAILS = 139;
    public const COMPLIMENTARY_COFFEE_IN_LOBBY = 140;
    public const COMPLIMENTARY_CONTINENTAL_BREAKFAST = 141;
    public const COMPLIMENTARY_FULL_AMERICAN_BREAKFAST = 142;
    public const DINNER_DELIVERY_SERVICE_FROM_LOCAL_RESTAURANT = 143;
    public const COMPLIMENTARY_NEWSPAPER_DELIVERED_TO_ROOM = 144;
    public const COMPLIMENTARY_NEWSPAPER_IN_LOBBY = 145;
    public const COMPLIMENTARY_SHOESHINE = 146;
    public const EVENING_RECEPTION = 147;
    public const FRONT_DESK = 148;
    public const GROCERY_SHOPPING_SERVICE_AVAILABLE = 149;
    public const HALAL_FOOD_AVAILABLE = 150;
    public const KOSHER_FOOD_AVAILABLE = 151;
    public const LIMOUSINE_SERVICE = 152;
    public const MANAGERS_RECEPTION = 153;
    public const MEDICAL_FACILITIES_SERVICE = 154;
    public const TELEPHONE_JACK_ADAPTOR_AVAILABLE = 155;
    public const ALL_INCLUSIVE_MEAL_PLAN = 156;
    public const BUFFET_BREAKFAST = 157;
    public const COMMUNAL_BAR_AREA = 158;
    public const CONTINENTAL_BREAKFAST = 159;
    public const FULL_MEAL_PLAN = 160;
    public const FULL_AMERICAN_BREAKFAST = 161;
    public const MEAL_PLAN_AVAILABLE = 162;
    public const MODIFIED_AMERICAN_MEAL_PLAN = 163;
    public const FOOD_AND_BEVERAGE_OUTLETS = 164;
    public const LOUNGES_BARS = 165;
    public const BARBER_SHOP = 166;
    public const VIDEO_CHECKOUT = 167;
    public const ONSITE_LAUNDRY = 168;
    public const ALL_DAY_FOOD_BEVERAGE_KIOSK = 169;
    public const CONCIERGE_LOUNGE = 170;
    public const PARKING_FEE_MANAGED_BY_HOTEL = 171;
    public const TRANSPORTATION = 172;
    public const BREAKFAST_SERVED_IN_RESTAURANT = 173;
    public const LUNCH_SERVED_IN_RESTAURANT = 174;
    public const DINNER_SERVED_IN_RESTAURANT = 175;
    public const FULL_SERVICE_HOUSEKEEPING = 176;
    public const LIMITED_SERVICE_HOUSEKEEPING = 177;
    public const HIGH_SPEED_INTERNET_ACCESS_FOR_LAPTOP_IN_PUBLIC_AREAS = 178;
    public const WIRELESS_INTERNET_CONNECTION_IN_PUBLIC_AREAS = 179;
    public const ADDITIONAL_SERVICES_AMENITIES_FACILITIES_ON_PROPERTY = 180;
    public const TRANSPORTATION_SERVICES_LOCAL_AREA = 181;
    public const TRANSPORTATION_SERVICES_LOCAL_OFFICE = 182;
    public const DVD_VIDEO_RENTAL = 183;
    public const PARKING_LOT = 184;
    public const PARKING_DECK = 185;
    public const STREET_SIDE_PARKING = 186;
    public const COCKTAIL_LOUNGE_WITH_ENTERTAINMENT = 187;
    public const COCKTAIL_LOUNGE_WITH_LIGHT_FARE = 188;
    public const MOTORCYCLE_PARKING = 189;
    public const PHONE_SERVICES = 190;
    public const BALLROOM = 191;
    public const BUS_PARKING = 192;
    public const CHILDREN_S_PLAY_AREA = 193;
    public const CHILDREN_S_NURSERY = 194;
    public const DISCO = 195;
    public const EARLY_CHECK_IN = 196;
    public const LOCKER_ROOM = 197;
    public const NON_SMOKING_ROOMS_GENERIC = 198;
    public const TRAIN_ACCESS = 199;
    public const AEROBICS_INSTRUCTION = 200;
    public const BAGGAGE_HOLD = 201;
    public const BICYCLE_RENTALS = 202;
    public const DIETICIAN = 203;
    public const LATE_CHECK_OUT_AVAILABLE = 204;
    public const PET_SITTING_SERVICES = 205;
    public const PRAYER_MATS = 206;
    public const SPORTS_TRAINER = 207;
    public const TURNDOWN_SERVICE = 208;
    public const DVDS_VIDEOS_CHILDREN = 209;
    public const BANK = 210;
    public const LOBBY_COFFEE_SERVICE = 211;
    public const BANKING_SERVICES = 212;
    public const STAIRWELLS = 213;
    public const PET_AMENITIES_AVAILABLE = 214;
    public const EXHIBITION_CONVENTION_FLOOR = 215;
    public const LONG_TERM_PARKING = 216;
    public const CHILDREN_NOT_ALLOWED = 217;
    public const CHILDREN_WELCOME = 218;
    public const COURTESY_CAR = 219;
    public const HOTEL_DOES_NOT_PROVIDE_PORNOGRAPHIC_FILMS_TV = 220;
    public const HOTSPOTS = 221;
    public const FREE_HIGH_SPEED_INTERNET_CONNECTION = 222;
    public const INTERNET_SERVICES = 223;
    public const PETS_ALLOWED = 224;
    public const GOURMET_HIGHLIGHTS = 225;
    public const CATERING_SERVICES = 226;
    public const COMPLIMENTARY_BREAKFAST = 227;
    public const BUSINESS_CENTER = 228;
    public const BUSINESS_SERVICES = 229;
    public const SECURED_PARKING = 230;
    public const RACQUETBALL = 231;
    public const SNOW_SPORTS = 232;
    public const TENNIS_COURT = 233;
    public const WATER_SPORTS = 234;
    public const CHILD_PROGRAMS = 235;
    public const GOLF = 236;
    public const HORSEBACK_RIDING = 237;
    public const OCEANFRONT = 238;
    public const BEACHFRONT = 239;
    public const HAIR_DRYER = 240;
    public const IRONING_BOARD = 241;
    public const HEATED_GUEST_ROOMS = 242;
    public const TOILET = 243;
    public const PARLOR = 244;
    public const VIDEO_GAME_PLAYER = 245;
    public const THALASSOTHERAPY = 246;
    public const PRIVATE_DINING_FOR_GROUPS = 247;
    public const HEARING_IMPAIRED_SERVICES = 248;
    public const CARRYOUT_BREAKFAST = 249;
    public const DELUXE_CONTINENTAL_BREAKFAST = 250;
    public const HOT_CONTINENTAL_BREAKFAST = 251;
    public const HOT_BREAKFAST = 252;
    public const PRIVATE_POOL = 253;
    public const CONNECTING_ROOMS = 254;
    public const DATA_PORT = 255;
    public const EXTERIOR_CORRIDORS = 256;
    public const GULF_VIEW = 257;
    public const ACCESSIBLE_ROOMS = 258;
    public const HIGH_SPEED_INTERNET_ACCESS = 259;
    public const INTERIOR_CORRIDORS = 260;
    public const HIGH_SPEED_WIRELESS = 261;
    public const KITCHENETTE = 262;
    public const PRIVATE_BATH_OR_SHOWER = 263;
    public const FIRE_SAFETY_COMPLIANT = 264;
    public const WELCOME_DRINK = 265;
    public const BOARDING_PASS_PRINT_OUT_AVAILABLE = 266;
    public const PRINTING_SERVICES_AVAILABLE = 267;
    public const ALL_PUBLIC_AREAS_NON_SMOKING = 268;
    public const MEETING_ROOMS = 269;
    public const MOVIES_IN_ROOM = 270;
    public const SECRETARIAL_SERVICE = 271;
    public const SNOW_SKIING = 272;
    public const WATER_SKIING = 273;
    public const FAX_SERVICE = 274;
    public const GREAT_ROOM = 275;
    public const LOBBY = 276;
    public const MULTIPLE_PHONE_LINES_BILLED_SEPARATELY = 277;
    public const UMBRELLAS = 278;
    public const GAS_STATION = 279;
    public const GROCERY_STORE = 280;
    public const ALL_DAY_COFFEE_SHOP = 281;
    public const AIRPORT_SHUTTLE_SERVICE = 282;
    public const LUGGAGE_SERVICE = 283;
    public const PIANO_BAR = 284;
    public const VIP_SECURITY = 285;
    public const COMPLIMENTARY_WIRELESS_INTERNET = 286;
    public const CONCIERGE_BREAKFAST = 287;
    public const SAME_GENDER_FLOOR = 288;
    public const CHILDREN_PROGRAMS = 289;
    public const BUILDING_MEETS_LOCAL_STATE_AND_COUNTRY_BUILDING_CODES = 290;
    public const INTERNET_BROWSER_ON_TV = 291;
    public const NEWSPAPER = 292;
    public const PARKING_CONTROLLED_ACCESS_GATES_TO_ENTER_PARKING_AREA = 293;
    public const HOTEL_SAFE_DEPOSIT_BOX_NOT_ROOM_SAFE_BOX = 294;
    public const STORAGE_SPACE_AVAILABLE_FEE = 295;
    public const TYPE_OF_ENTRANCES_TO_GUEST_ROOMS = 296;
    public const BEVERAGE_COCKTAIL = 297;
    public const CELL_PHONE_RENTAL = 298;
    public const COFFEE_TEA = 299;
    public const EARLY_CHECK_IN_GUARANTEE = 300;
    public const FOOD_AND_BEVERAGE_DISCOUNT = 301;
    public const LATE_CHECK_OUT_GUARANTEE = 302;
    public const ROOM_UPGRADE_CONFIRMED = 303;
    public const ROOM_UPGRADE_ON_AVAILABILITY = 304;
    public const SHUTTLE_TO_LOCAL_BUSINESSES = 305;
    public const SHUTTLE_TO_LOCAL_ATTRACTIONS = 306;
    public const SOCIAL_HOUR = 307;
    public const VIDEO_BILLING = 308;
    public const WELCOME_GIFT = 309;
    public const HYPOALLERGENIC_ROOMS = 310;
    public const ROOM_AIR_FILTRATION = 311;
    public const SMOKE_FREE_PROPERTY = 312;
    public const WATER_PURIFICATION_SYSTEM_IN_USE = 313;
    public const POOLSIDE_SERVICE = 314;
    public const CLOTHING_STORE = 315;
    public const ELECTRIC_CAR_CHARGING_STATIONS = 316;
    public const OFFICE_RENTAL = 317;
    public const PIANO = 318;
    public const INCOMING_FAX = 319;
    public const OUTGOING_FAX = 320;
    public const SEMI_PRIVATE_SPACE = 321;
    public const LOADING_DOCK = 322;
    public const BABY_KIT = 323;
    public const CHILDREN_S_BREAKFAST = 324;
    public const CLOAKROOM_SERVICE = 325;
    public const COFFEE_LOUNGE = 326;
    public const EVENTS_TICKET_SERVICE = 327;
    public const LATE_CHECK_IN = 328;
    public const LIMITED_PARKING = 329;
    public const OUTDOOR_SUMMER_BAR_CAF_ = 330;
    public const NO_PARKING_AVAILABLE = 331;
    public const BEER_GARDEN = 332;
    public const GARDEN_LOUNGE_BAR = 333;
    public const SUMMER_TERRACE = 334;
    public const WINTER_TERRACE = 335;
    public const ROOF_TERRACE = 336;
    public const BEACH_BAR = 337;
    public const HELICOPTER_SERVICE = 338;
    public const FERRY = 339;
    public const TAPAS_BAR = 340;
    public const CAFE_BAR = 341;
    public const SNACK_BAR = 342;
    public const GUESTROOM_WIRED_INTERNET = 343;
    public const GUESTROOM_WIRELESS_INTERNET = 344;
    public const FITNESS_CENTER = 345;
    public const ALCOHOLIC_BEVERAGES = 346;
    public const NON_ALCOHOLIC_BEVERAGES = 347;
    public const HEALTH_AND_BEAUTY_SERVICES = 348;

    /**
     * @var int
     */
    public $code;

    /**
     * @return bool
     */
    public function belongsToRoom()
    {
        return false;
    }
}