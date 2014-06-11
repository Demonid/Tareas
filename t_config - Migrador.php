<?php
   /*
    * Copyright (C) 2010 - 2013 Myth Project <http://mythprojectnetwork.blogspot.com/>
    *
    * To get access, you either have to donate or pass a developer test.
    * You may not share Myth Project's sources! For personal use only..
    */

    $TransferLetterTitle    = "Migration Manager";              // Letter Title
    $TransferLetterMessage  = "Items from character migration"; // Letter Message

    $language               = "es";         // WebPage Language "en" - English, "de" - German, "es" - Spanish, "ru" - Russian.
    $captchaEnable          = 0;            // ENABLE (1) / DISABLE (0) Captcha
    $AchievementsCheck      = 0;            // ENABLE (1) / DISABLE (0) FORMULA: must have more then Level > 10 OR AchievementsMinCount param
    $AchievementsMinCount   = 50;           // Minimum ammount of Achievements.
    $PLAYTIME               = 10;           // Minimum Playtime. Counted as: last archievment date - first archievment date

    $AccountDB          = "wow_335a_login"; // Your Account DB Name
    $AccountDBHost      = "127.0.0.1";      // Your Account DB Host
    $DBUser             = "root";           // Your DB User
    $DBPassword         = "";               // Your DB Password

    $SOAPUser           = "admin";          // SOAP USER
    $SOAPPassword       = "admin";          // SOAP USER PASSWORD
    $GMLevel            = "(3)";            // GM LEVEL ACCESS AVAIBLE CHECK TRANSFERS. IN BRACKETS AND SEPARATE WITH COMMA. EXAMPLE: "(3,4)"

    $GAMEBUILD          = 12340;            // Game Build for available transfer. that mean transfers accept only from this build. DO NOT TOUCH.
    $STORAGE            = 0;                // Account Where story Rejected or Canceled Transfers
    $MaxMoney           = 200000000;        // Max Money, if more then it, then only this. put values in copper coins
    $MaxHP              = 75000;            // Max Honor Points, if more then it, then only this.
    $MaxCL              = 80;               // Max Character level, if more then it, then only this.
    $MaxAP              = 5000;             // Max Arena Points, if more then it, then only this.
                                            // if do not exist stay -1, if no then put info
    function _SOAPURISwitch($ID) {          // Realm ID = Realm ID From Realmlist table
        $SOAPURI1  = "TC";                  // Realm 1 SOAP URI
        $SOAPURI2  = -1;                    // Realm 2 SOAP URI
        $SOAPURI3  = -1;                    // Realm 3 SOAP URI
        $SOAPURI4  = -1;                    // Realm 4 SOAP URI
        $SOAPURI5  = -1;                    // Realm 5 SOAP URI
        $SOAPURIUNK = -1;                   // if 6+ Realm exist return Error
        switch($ID) {
            case 1:     return $SOAPURI1;
            case 2:     return $SOAPURI2;
            case 3:     return $SOAPURI3;
            case 4:     return $SOAPURI4;
            case 5:     return $SOAPURI5;
            default:    return $SOAPURIUNK;
        }
    }

                                            // if do not exist stay -1, if no then put info
    function _SOAPHSwitch($ID) {            // Realm ID = Realm ID From Realmlist table
        $SOAPHost1  = "127.0.0.1";          // Realm 1 SOAP HOST
        $SOAPHost2  = -1;                   // Realm 2 SOAP HOST
        $SOAPHost3  = -1;                   // Realm 3 SOAP HOST
        $SOAPHost4  = -1;                   // Realm 4 SOAP HOST
        $SOAPHost5  = -1;                   // Realm 5 SOAP HOST
        $SOAPHostUNK = -1;                  // if 6+ Realm exist return Error
        switch($ID) {
            case 1:     return $SOAPHost1;
            case 2:     return $SOAPHost2;
            case 3:     return $SOAPHost3;
            case 4:     return $SOAPHost4;
            case 5:     return $SOAPHost5;
            default:    return $SOAPHostUNK;
        }
    }
                                            // if do not exist stay -1, if no then put info
    function _SOAPPSwitch($ID) {            // Realm ID = Realm ID From Realmlist table
        $SOAPPort1  = 7878;                 // Realm 1 SOAP PORT
        $SOAPPort2  = -1;                   // Realm 2 SOAP PORT
        $SOAPPort3  = -1;                   // Realm 3 SOAP PORT
        $SOAPPort4  = -1;                   // Realm 4 SOAP PORT
        $SOAPPort5  = -1;                   // Realm 5 SOAP PORT
        $SOAPPortUNK = -1;                  // if 6+ Realm exist return Error
        switch($ID) {
            case 1:     return $SOAPPort1;
            case 2:     return $SOAPPort2;
            case 3:     return $SOAPPort3;
            case 4:     return $SOAPPort4;
            case 5:     return $SOAPPort5;
            default:    return $SOAPPortUNK;
        }
    }
                                              // if do not exist stay -1, if no then put info, FOR CHARACTERS DBs
    function _HostDBSwitch($ID) {             // Realm ID = Realm ID From Realmlist table
        $HostDB1      = "127.0.0.1";          // Realm 1 Host DB
        $HostDB2      = -1;                   // Realm 2 Host DB
        $HostDB3      = -1;                   // Realm 3 Host DB
        $HostDB4      = -1;                   // Realm 4 Host DB
        $HostDB5      = -1;                   // Realm 5 Host DB
        $HostDBUNK    = -1;                   // if 6+ Realm exist return Error
        switch($ID) {
            case 1:     return $HostDB1;
            case 2:     return $HostDB2;
            case 3:     return $HostDB3;
            case 4:     return $HostDB4;
            case 5:     return $HostDB5;
            default:    return $HostDBUNK;
        }
    }
                                                    // if do not exist stay -1, if no then put info, FOR CHARACTERS DBs
    function _CharacterDBSwitch($ID) {              // Realm ID = Realm ID From Realmlist table
        $CharactersDB1      = "wow_335a_characters";// Realm 1 Character DB
        $CharactersDB2      = -1;                   // Realm 2 Character DB
        $CharactersDB3      = -1;                   // Realm 3 Character DB
        $CharactersDB4      = -1;                   // Realm 4 Character DB
        $CharactersDB5      = -1;                   // Realm 5 Character DB
        $CharactersDBUNK    = -1;                   // if 6+ Realm exist return Error
        switch($ID) {
            case 1:     return $CharactersDB1;
            case 2:     return $CharactersDB2;
            case 3:     return $CharactersDB3;
            case 4:     return $CharactersDB4;
            case 5:     return $CharactersDB5;
            default:    return $CharactersDBUNK;
        }
    }

    function _CheckWrongOrNoItem($REALMID, $ID) {
        switch($REALMID) {      // case ID: = realm id from realmlist table
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            default:
                switch($ID) {   // IF YOU WANT REJECT ITEM. ADD CASE <ID> : BEFORE RETURN TRUE. ITEM DROP OUR FROM DELIVERY LIST.
                    case 17:    // UBER CHEST: Martin Fury
                    case 43651: // UBER FINISH POLE: Crafty's Pole
                    case 25596: // UBER MOUNT: Peep's Whistle
                    case 17782: // UBER NECK: Talisman of Binding Shard
                    case 12947: // UBER RING: Alex's Ring of Audacity
                    case 192:   // UBER STAFF: Martin's Broken Staff
                    case 22989: // UBER BLADE: The Breaking
                    case 36942: // UBER BLADE: Frostmourne
                    case 32824: // UBER BLADE: Tigole's Trashbringer
                    case 18582: // UBER BLADE: The Twin Blades of Azzinoth
                    case 18583: // UBER BLADE: Warglaive of Azzinoth (Right)
                    case 18584: // UBER BLADE: Warglaive of Azzinoth (Left)
                    case 49908: // Primordial Saronite
                // ICC Rings
                    case 50378:
                    case 50376:
                    case 52569:
                    case 50377:
                    case 50375:
                    case 50386:
                    case 50387:
                    case 52570:
                    case 50384:
                    case 50388:
                    case 50399:
                    case 50401:
                    case 52571:
                    case 50397:
                    case 50403:
                    case 50400:
                    case 50402:
                    case 52572:
                    case 50398:
                    case 50404:
                        return true;
                    default: return false;
                }
                break;
        }
    }

    function _GetChangedItem($REALMID, $ID) {
        if(_CheckWrongOrNoItem($REALMID, $ID))
            return -1;

        switch($REALMID) {      // case ID: = realm id from realmlist table
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            default:
                switch($ID) {   // IF YOU WANT CHANGE ITEM. ADD CASE <ID> : RETURN < NEW ID>. ITEM WILL BE CHANGED IN DELIVERY LIST.
                    case 49623: return 49888;   // Shadowmourne to Shadow's Edge
                // Halion 25
                    case 54590: return 54569;
                    case 54576: return 53133;
                    case 54588: return 54572;
                    case 54583: return 53489;
                    case 54582: return 53486;
                    case 54589: return 54573;
                    case 54591: return 54571;
                    case 54584: return 53134;
                    case 54586: return 53487;
                    case 54577: return 53127;
                    case 54580: return 53126;
                    case 54578: return 53125;
                    case 54581: return 53132;
                    case 54587: return 53488;
                    case 54579: return 53129;
                    case 54585: return 53490;
                // Halion 10
                    case 54557: return 53103;
                    case 54559: return 53112;
                    case 54562: return 53118;
                    case 54556: return 53115;
                    case 54558: return 53119;
                    case 54560: return 53117;
                    case 54561: return 53114;
                    case 54563: return 53116;
                    case 54567: return 53110;
                    case 54564: return 53111;
                    case 54565: return 53121;
                    case 54566: return 53113;
                // The Lich King 25
                    case 50730: return 50070;
                    case 50731: return 50429;
                    case 50733: return 49981;
                    case 50735: return 50425;
                    case 50734: return 50428;
                    case 50737: return 50012;
                    case 50732: return 50427;
                    case 50738: return 49997;
                    case 50736: return 50426;
                // The Lich King 10
                    case 51944: return 51798;
                    case 51946: return 51796;
                    case 51945: return 51797;
                    case 51797: return 51799;
                    case 51939: return 51803;
                    case 51940: return 51802;
                    case 51941: return 51801;
                    case 51947: return 51795;
                    case 51942: return 51800;
                // Lord Marrognar
                    case 50608: return 49968;
                    case 50709: return 50415;
                    case 50614: return 49977;
                    case 50609: return 49975;
                    case 50616: return 49976;
                    case 50613: return 49978;
                    case 50604: return 49949;
                    case 50611: return 49960;
                    case 50607: return 49950;
                    case 50606: return 49951;
                    case 50605: return 49952;
                    case 50615: return 49979;
                    case 50612: return 49964;
                    case 50610: return 49967;
                    case 50617: return 49980;
                    case 51936: return 50761;
                    case 51932: return 50771;
                    case 50346: return 50339;
                    case 51933: return 50764;
                    case 51931: return 50772;
                    case 51938: return 50759;
                    case 51937: return 50760;
                    case 51929: return 50774;
                    case 51930: return 50773;
                    case 51928: return 50775;
                    case 51935: return 50762;
                    case 51934: return 50763;
                // Lady Whisperdeath
                    case 51922: return 50781;
                    case 51927: return 50776;
                    case 51921: return 50782;
                    case 50343: return 50342;
                    case 51923: return 50780;
                    case 51919: return 50784;
                    case 51925: return 50778;
                    case 51920: return 50783;
                    case 51918: return 50785;
                    case 51924: return 50779;
                    case 51917: return 50786;
                    case 51926: return 50777;
                    case 50648: return 49992;
                    case 50638: return 50034;
                    case 50646: return 49987;
                    case 50651: return 49994;
                    case 50647: return 49989;
                    case 50639: return 49983;
                    case 50645: return 49988;
                    case 50641: return 49982;
                    case 50644: return 49990;
                    case 50643: return 49991;
                    case 50650: return 49995;
                    case 50640: return 49986;
                    case 50649: return 49996;
                    case 50642: return 49985;
                    case 50652: return 49993;
                // Gunship Armory
                    case 51910: return 50793;
                    case 51916: return 50787;
                    case 50345: return 50340;
                    case 50658: return 50005;
                    case 50664: return 50008;
                    case 51912: return 50791;
                    case 50366: return 50359;
                    case 51915: return 50788;
                    case 51914: return 50789;
                    case 51908: return 50795;
                    case 51911: return 50792;
                    case 51909: return 50794;
                    case 51913: return 50790;
                    case 50655: return 50000;
                    case 50659: return 50002;
                    case 51907: return 50796;
                    case 50653: return 49998;
                    case 50663: return 50011;
                    case 50349: return 50352;
                    case 50657: return 49999;
                    case 50661: return 50006;
                    case 50654: return 50411;
                    case 50656: return 50001;
                    case 51906: return 50797;
                    case 50665: return 50009;
                    case 50667: return 50010;
                    case 50660: return 50003;
                // Deathbringer
                    case 50670: return 50333;
                    case 50668: return 50014;
                    case 50363: return 50362;
                    case 50672: return 50412;
                    case 50671: return 50015;
                    case 51896: return 50807;
                    case 51894: return 50809;
                    case 51904: return 50799;
                    case 51900: return 50803;
                    case 51905: return 50798;
                    case 51898: return 50805;
                    case 51897: return 50806;
                    case 51899: return 50804;
                    case 51903: return 50800;
                    case 51901: return 50802;
                    case 51895: return 50808;
                    case 51902: return 50801;
                // Festergut
                    case 50695: return 50040;
                    case 50699: return 50062;
                    case 50697: return 50042;
                    case 50702: return 50063;
                    case 50694: return 50056;
                    case 50692: return 50035;
                    case 50689: return 50038;
                    case 50701: return 50060;
                    case 50690: return 50037;
                    case 50700: return 50061;
                    case 50693: return 50414;
                    case 50688: return 50413;
                    case 50703: return 50064;
                    case 50698: return 50059;
                    case 50696: return 50041;
                    case 50691: return 50036;
                    case 51887: return 50966;
                    case 51893: return 50810;
                    case 51882: return 50990;
                    case 51889: return 50858;
                    case 51890: return 50852;
                    case 51892: return 50811;
                    case 51891: return 50812;
                    case 51885: return 50985;
                    case 51883: return 50988;
                    case 51888: return 50859;
                    case 51886: return 50967;
                    case 51884: return 50986;
                // Rotface
                    case 50678: return 50025;
                    case 50685: return 50028;
                    case 50348: return 50353;
                    case 50682: return 50023;
                    case 50675: return 50021;
                    case 50684: return 50033;
                    case 50673: return 50022;
                    case 50674: return 50020;
                    case 50676: return 50016;
                    case 50677: return 50019;
                    case 50681: return 50024;
                    case 50679: return 50026;
                    case 50680: return 50027;
                    case 50687: return 50030;
                    case 50686: return 50032;
                    case 51875: return 51004;
                    case 51881: return 50998;
                    case 51872: return 51007;
                    case 51878: return 51001;
                    case 51876: return 51003;
                    case 51870: return 51009;
                    case 51871: return 51008;
                    case 51879: return 51000;
                    case 51874: return 51005;
                    case 51873: return 51006;
                    case 51877: return 51002;
                    case 51880: return 50999;
                // Professor Putricide
                    case 50706: return 50351;
                    case 50707: return 50067;
                    case 50708: return 50179;
                    case 50704: return 50068;
                    case 50705: return 50069;
                    case 51863: return 51016;
                    case 51862: return 51017;
                    case 51866: return 51013;
                    case 51868: return 51011;
                    case 51867: return 51012;
                    case 51865: return 51014;
                    case 51864: return 51015;
                    case 51859: return 51020;
                    case 51869: return 51010;
                    case 50344: return 50341;
                    case 51861: return 51018;
                    case 51860: return 51019;
                // Blood Prince Council
                    case 50719: return 50173;
                    case 50603: return 49919;
                    case 50714: return 50170;
                    case 51849: return 51381;
                    case 51857: return 51022;
                    case 51852: return 51326;
                    case 50721: return 50175;
                    case 50713: return 50073;
                    case 50710: return 50184;
                    case 50712: return 50072;
                    case 50723: return 50177;
                    case 50718: return 50074;
                    case 50717: return 50172;
                    case 50715: return 50171;
                    case 50716: return 50075;
                    case 50711: return 50071;
                    case 51854: return 51025;
                    case 50720: return 50174;
                    case 50722: return 50176;
                    case 51858: return 51021;
                    case 51856: return 51023;
                    case 51855: return 51024;
                    case 51853: return 51325;
                    case 51851: return 51379;
                    case 51848: return 51382;
                    case 51850: return 51380;
                    case 51847: return 51383;
                // Blood-Queen Lana'thel
                    case 51837: return 51554;
                    case 51838: return 51553;
                    case 51843: return 51387;
                    case 51845: return 51385;
                    case 51836: return 51555;
                    case 81842: return 51548;
                    case 51841: return 51550;
                    case 51839: return 51552;
                    case 51844: return 51386;
                    case 51835: return 51556;
                    case 51846: return 51384;
                    case 51840: return 51551;
                    case 50724: return 50182;
                    case 50727: return 50178;
                    case 50725: return 50181;
                    case 50726: return 50354;
                    case 50729: return 50065;
                    case 50728: return 50180;
                // Valthria Dreamwalker
                    case 50628: return 50205;
                    case 50618: return 50186;
                    case 50624: return 50192;
                    case 50619: return 50188;
                    case 50620: return 50187;
                    case 50621: return 50183;
                    case 50631: return 50472;
                    case 50629: return 50418;
                    case 50632: return 50416;
                    case 50625: return 50190;
                    case 50623: return 50199;
                    case 50627: return 50195;
                    case 50626: return 50202;
                    case 50630: return 50417;
                    case 50622: return 50185;
                    case 51833: return 51562;
                    case 51826: return 51584;
                    case 51828: return 51582;
                    case 51829: return 51566;
                    case 51832: return 51563;
                    case 51834: return 51561;
                    case 51825: return 51585;
                    case 51830: return 51565;
                    case 51827: return 51583;
                    case 51824: return 51586;
                    case 51831: return 51564;
                    case 51823: return 51777;
                // Sindragosa
                    case 50365: return 50360;
                    case 50635: return 50423;
                    case 50636: return 50424;
                    case 50633: return 50421;
                    case 50364: return 50361;
                    case 51815: return 51788;
                    case 51822: return 51779;
                    case 51813: return 51790;
                    case 51818: return 51785;
                    case 51817: return 51786;
                    case 51812: return 51791;
                    case 51816: return 51787;
                    case 51819: return 51784;
                    case 51820: return 51783;
                    case 51821: return 51782;
                    case 51811: return 51792;
                    case 51814: return 51789;
                // Tokens
                    case 52028: return 52025; //Vanquisher's Mark of Sanctification
                    case 52030: return 52026; //Conqueror's Mark of Sanctification
                    case 52029: return 52027; //Protector's Mark of Sanctification
                // Tier 10 DK Tank
                    case 51305: return 51134;
                    case 51306: return 51133;
                    case 51307: return 51132;
                    case 51308: return 51131;
                    case 51309: return 51130;
                // Tier 10 DK DPS
                    case 51310: return 51129;
                    case 51312: return 51127;
                    case 51311: return 51128;
                    case 51313: return 51126;
                    case 51314: return 51125;
                // Tier 10 Druida Feral
                    case 51298: return 51141;
                    case 51296: return 51143;
                    case 51295: return 51144;
                    case 51297: return 51142;
                    case 51299: return 51140;
                // Tier 10 Druida Pollo
                    case 51294: return 51145;
                    case 51290: return 51149;
                    case 51291: return 51148;
                    case 51293: return 51146;
                    case 51292: return 51147;
                // Tier 10 Druida Resto
                    case 51300: return 51139;
                    case 51302: return 51137;
                    case 51301: return 51138;
                    case 51303: return 51136;
                    case 51304: return 51135;
                // Tier 10 Hunter
                    case 51289: return 51150;
                    case 51286: return 51153;
                    case 51285: return 51154;
                    case 51287: return 51152;
                    case 51288: return 51151;
                // Tier 10 Mage
                    case 51283: return 51156;
                    case 51281: return 51158;
                    case 51280: return 51159;
                    case 51282: return 51157;
                    case 51284: return 51155;
                // Tier 10 Paladin Retry
                    case 51275: return 51164;
                    case 51277: return 51162;
                    case 51276: return 51163;
                    case 51278: return 51161;
                    case 51279: return 51160;
                // Tier 10 Paladín Tank
                    case 51265: return 51174;
                    case 51266: return 51173;
                    case 51267: return 51172;
                    case 51268: return 51171;
                    case 51269: return 51170;
                // Tier 10 Paladin Holy
                    case 51274: return 51165;
                    case 51272: return 51167;
                    case 51270: return 51169;
                    case 51271: return 51168;
                    case 51273: return 51166;
                // Tier 10 Sacer Sombras
                    case 51259: return 51180;
                    case 51255: return 51184;
                    case 51256: return 51183;
                    case 51258: return 51181;
                    case 51257: return 51182;
                // Tier 10 Sacer Holy
                    case 51263: return 51176;
                    case 51261: return 51178;
                    case 51260: return 51179;
                    case 51262: return 51177;
                    case 51264: return 51175;
                 // Tier 10 Rogue
                    case 51250: return 51189;
                    case 51252: return 51187;
                    case 51251: return 51188;
                    case 51253: return 51186;
                    case 51254: return 51185;
                // Tier 10 Shaman Mejora
                    case 51244: return 51195;
                    case 51242: return 51197;
                    case 51243: return 51196;
                    case 51241: return 51198;
                    case 51240: return 51199;
                // Tier 10 Shaman Elemental
                    case 51239: return 51200;
                    case 51237: return 51202;
                    case 51238: return 51201;
                    case 51236: return 51203;
                    case 51235: return 51204;
                // Tier 10 Shaman Resto
                    case 51249: return 51190;
                    case 51247: return 51192;
                    case 51248: return 51191;
                    case 51246: return 51193;
                    case 51245: return 51194;
                // Tier 10 Warlock
                    case 51233: return 51206;
                    case 51231: return 51208;
                    case 51230: return 51209;
                    case 51232: return 51207;
                    case 51234: return 51205;
                // Tier 10 Warrior Tank
                    case 51220: return 51219;
                    case 51221: return 51218;
                    case 51222: return 51217;
                    case 51223: return 51216;
                    case 51224: return 51215;
                // Tier 10 Warrior Fury
                    case 51225: return 51214;
                    case 51227: return 51212;
                    case 51226: return 51213;
                    case 51228: return 51211;
                    case 51229: return 51210;
                // S8 Shoulders to S7 Shoulders
                    case 51418: return 40871;
                    case 51438: return 42282;
                    case 51424: return 41276;
                    case 51430: return 41716;
                    case 51438: return 41282;
                    case 51462: return 41218;
                    case 51462: return 41966;
                    case 51473: return 40964;
                    case 51479: return 40872;
                    case 51486: return 41870;
                    case 51491: return 41935;
                    case 51496: return 41684;
                    case 51540: return 42012;
                    case 51545: return 40870;
                    case 51508: return 41212;
                    case 51514: return 41045;
                    case 51502: return 41039;
                // S8 T2 Weapons to S8 T1
                  /*case 51389: return 51388; // Hacha 2 Manos
                    case 51391: return 51390; // Maza 2 Manos
                    case 51393: return 51392; // Espada 2 Manos
                    case 51398: return 51406; // Daga Haste Caster
                    case 51399: return 51397; // Daga Crit Caster
                    case 51442: return 51441; // Daga Off Hand 1.4
                    case 51518: return 51517; // Daga Main Hand 1.8
                    case 51528: return 51527; // Daga Off Hand 1.8
                    case 51444: return 51443; // Puño Off Hand 1.5
                    case 51524: return 51523; // Puño Main Hand 2.6
                    case 51529: return 51530; // Puño Off Hand 2.6
                    case 51440: return 51439; // Hacha Off Hand 1.8
                    case 51516: return 51515; // Hacha Main Hand 2.6
                    case 51526: return 51525; // Hacha Off Hand 2.6
                    case 51446: return 51445; // Maza Off Hand 1.8
                    case 51454: return 51453; // Maza Main Hand 1.6
                    case 51520: return 51519; // Maza Main Hand 2.6
                    case 51448: return 51447; // Espada Off Hand 1.8
                    case 51522: return 51521; // Espada Main Hand 2.6
                    case 51481: return 51480; // Lanza
                    case 51401: return 51400; // Bastón Haste Caster
                    case 51403: return 51402; // Bastón Hit Caster
                    case 51405: return 51404; // Bastón Crit Caster
                    case 51432: return 51431; // Bastón Agility
                    case 51457: return 51456; // Bastón Spirit
                    case 51412: return 51411; // Ballesta
                    case 51450: return 51449; // Escopeta
                    case 51395: return 51394; // Arco*/
                    default:
                        return $ID;
                }
                break;
        }
    }

    function _CheckWrongOrNoAchievement($ID) {
    /* for prevent transfer ACHIEVEMENTs with ID xxx */
        switch($ID) {
            //case XX: return false;
            case 3917: return false;
            case 3916: return false;
            case 3918: return false;
            case 3812: return false;
            case 3810: return false;
            case 3819: return false;
            case 3809: return false;
            case 3818: return false;
            case 3808: return false;
            case 3817: return false;
            case 4156: return false;
            case 4079: return false;
            case 4080: return false;
            case 4531: return false;
            case 4604: return false;
            case 4628: return false;
            case 4632: return false;
            case 4528: return false;
            case 4605: return false;
            case 4629: return false;
            case 4633: return false;
            case 4529: return false;
            case 4606: return false;
            case 4630: return false;
            case 4634: return false;
            case 4527: return false;
            case 4607: return false;
            case 4631: return false;
            case 4635: return false;
            case 4532: return false;
            case 4608: return false;
            case 4636: return false;
            case 4637: return false;
            case 4530: return false;
            case 4597: return false;
            case 4583: return false;
            case 4584: return false;
            case 4817: return false;
            case 4815: return false;
            case 4818: return false;
            case 4816: return false;
            case 1402: return false;
            case 456: return false;
            case 1400: return false;
            case 3117: return false;
            case 3259: return false;
            case 4078: return false;
            case 4576: return false;
            default: return true;
        }
    }
    
    function _isDisabledSpell($ID) {
    /* for prevent transfer SPELLs with ID xxx */
        switch($ID) {
            //case XX: return true;
            default: return false;
        }
    }
    
    function _isDisabledMountOrCompanion($ID) {
    /* for prevent transfer MOUNTs or COMPANIONs with ID xxx */
        switch($ID) {
            //case XX: return false;
            default: return true;
        }
    }
?>