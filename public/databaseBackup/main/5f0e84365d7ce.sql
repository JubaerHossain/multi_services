DROP TABLE backeups;

CREATE TABLE `backeups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE banks;

CREATE TABLE `banks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO banks VALUES("1","Demo Bank","Demo Name","3456789034","Demo Branch","","1","","");



DROP TABLE barcodes;

CREATE TABLE `barcodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO barcodes VALUES("1","QRCODE","1","","");
INSERT INTO barcodes VALUES("2","PDF417","1","","");
INSERT INTO barcodes VALUES("3","DATAMATRIX","1","","");
INSERT INTO barcodes VALUES("4","C39","1","","");
INSERT INTO barcodes VALUES("5","C39+","1","","");
INSERT INTO barcodes VALUES("6","C39E","1","","");
INSERT INTO barcodes VALUES("7","C39E+","1","","");
INSERT INTO barcodes VALUES("8","C93","1","","");
INSERT INTO barcodes VALUES("9","S25","1","","");
INSERT INTO barcodes VALUES("10","S25+","1","","");
INSERT INTO barcodes VALUES("11","I25","1","","");
INSERT INTO barcodes VALUES("12","I25+","1","","");
INSERT INTO barcodes VALUES("13","C128","1","","");
INSERT INTO barcodes VALUES("14","C128A","1","","");
INSERT INTO barcodes VALUES("15","C128B","1","","");
INSERT INTO barcodes VALUES("16","C128C","1","","");
INSERT INTO barcodes VALUES("17","EAN2","1","","");
INSERT INTO barcodes VALUES("18","EAN5","1","","");
INSERT INTO barcodes VALUES("19","EAN8","1","","");
INSERT INTO barcodes VALUES("20","EAN13","1","","");
INSERT INTO barcodes VALUES("21","UPCA","1","","");
INSERT INTO barcodes VALUES("22","UPCE","1","","");
INSERT INTO barcodes VALUES("23","MSI","1","","");
INSERT INTO barcodes VALUES("24","MSI+","1","","");
INSERT INTO barcodes VALUES("25","POSTNET","1","","");
INSERT INTO barcodes VALUES("26","PLANET","1","","");
INSERT INTO barcodes VALUES("27","RMS4CC","1","","");
INSERT INTO barcodes VALUES("28","KIX","1","","");
INSERT INTO barcodes VALUES("29","IMB","1","","");
INSERT INTO barcodes VALUES("30","CODABAR","1","","");
INSERT INTO barcodes VALUES("31","CODE11","1","","");
INSERT INTO barcodes VALUES("32","PHARMA","1","","");
INSERT INTO barcodes VALUES("33","PHARMA2T","1","","");



DROP TABLE brands;

CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO brands VALUES("1","Fosamax","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("2","Zovirax","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("3","Imuran","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("4","Benzonatate","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("5","Dacogen","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("6","Focalin","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("7","Diflucan","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("8","Mobic","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("9","Zofran","2020-07-12 21:35:18","");
INSERT INTO brands VALUES("10","Effexor‎","2020-07-12 21:35:18","");



DROP TABLE categories;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO categories VALUES("1","Phytopathology‎","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("2","Injuries‎","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("3","Cancer","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("4","Animal diseases‎","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("5","Growth disorders‎","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("6","Rare diseases‎","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("7","Neoplasms‎","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("8","Inflammations","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("9","Sleep disorders‎ ","2020-07-12 21:35:20","");
INSERT INTO categories VALUES("10","Infectious diseases‎","2020-07-12 21:35:20","");



DROP TABLE colors;

CREATE TABLE `colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `css` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO colors VALUES("1","Navy-Blue","1","1","2020-07-12 21:35:49","");
INSERT INTO colors VALUES("2","Dark","2","0","2020-07-12 21:35:49","");



DROP TABLE countries;

CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso3` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO countries VALUES("1","Afghanistan","AFG","AF","93","AFN","Kabul","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("2","Aland Islands","ALA","AX","+358-18","EUR","Mariehamn","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("3","Albania","ALB","AL","355","ALL","Tirana","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("4","Algeria","DZA","DZ","213","DZD","Algiers","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("5","American Samoa","ASM","AS","+1-684","USD","Pago Pago","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("6","Andorra","AND","AD","376","EUR","Andorra la Vella","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("7","Angola","AGO","AO","244","AOA","Luanda","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("8","Anguilla","AIA","AI","+1-264","XCD","The Valley","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("9","Antarctica","ATA","AQ","","","","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("10","Antigua And Barbuda","ATG","AG","+1-268","XCD","St. John\'s","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("11","Argentina","ARG","AR","54","ARS","Buenos Aires","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("12","Armenia","ARM","AM","374","AMD","Yerevan","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("13","Aruba","ABW","AW","297","AWG","Oranjestad","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("14","Australia","AUS","AU","61","AUD","Canberra","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("15","Austria","AUT","AT","43","EUR","Vienna","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("16","Azerbaijan","AZE","AZ","994","AZN","Baku","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("17","Bahamas The","BHS","BS","+1-242","BSD","Nassau","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("18","Bahrain","BHR","BH","973","BHD","Manama","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("19","Bangladesh","BGD","BD","880","BDT","Dhaka","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("20","Barbados","BRB","BB","+1-246","BBD","Bridgetown","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("21","Belarus","BLR","BY","375","BYR","Minsk","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("22","Belgium","BEL","BE","32","EUR","Brussels","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("23","Belize","BLZ","BZ","501","BZD","Belmopan","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("24","Benin","BEN","BJ","229","XOF","Porto-Novo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("25","Bermuda","BMU","BM","+1-441","BMD","Hamilton","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("26","Bhutan","BTN","BT","975","BTN","Thimphu","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("27","Bolivia","BOL","BO","591","BOB","Sucre","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("28","Bosnia and Herzegovina","BIH","BA","387","BAM","Sarajevo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("29","Botswana","BWA","BW","267","BWP","Gaborone","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("30","Bouvet Island","BVT","BV","","NOK","","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("31","Brazil","BRA","BR","55","BRL","Brasilia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("32","British Indian Ocean Territory","IOT","IO","246","USD","Diego Garcia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("33","Brunei","BRN","BN","673","BND","Bandar Seri Begawan","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("34","Bulgaria","BGR","BG","359","BGN","Sofia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("35","Burkina Faso","BFA","BF","226","XOF","Ouagadougou","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("36","Burundi","BDI","BI","257","BIF","Bujumbura","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("37","Cambodia","KHM","KH","855","KHR","Phnom Penh","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("38","Cameroon","CMR","CM","237","XAF","Yaounde","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("39","Canada","CAN","CA","1","CAD","Ottawa","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("40","Cape Verde","CPV","CV","238","CVE","Praia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("41","Cayman Islands","CYM","KY","+1-345","KYD","George Town","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("42","Central African Republic","CAF","CF","236","XAF","Bangui","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("43","Chad","TCD","TD","235","XAF","N\'Djamena","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("44","Chile","CHL","CL","56","CLP","Santiago","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("45","China","CHN","CN","86","CNY","Beijing","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("46","Christmas Island","CXR","CX","61","AUD","Flying Fish Cove","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("47","Cocos (Keeling) Islands","CCK","CC","61","AUD","West Island","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("48","Colombia","COL","CO","57","COP","Bogota","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("49","Comoros","COM","KM","269","KMF","Moroni","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("50","Congo","COG","CG","242","XAF","Brazzaville","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("51","Congo The Democratic Republic Of The","COD","CD","243","CDF","Kinshasa","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("52","Cook Islands","COK","CK","682","NZD","Avarua","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("53","Costa Rica","CRI","CR","506","CRC","San Jose","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("54","Cote D\'Ivoire (Ivory Coast)","CIV","CI","225","XOF","Yamoussoukro","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("55","Croatia (Hrvatska)","HRV","HR","385","HRK","Zagreb","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("56","Cuba","CUB","CU","53","CUP","Havana","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("57","Cyprus","CYP","CY","357","EUR","Nicosia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("58","Czech Republic","CZE","CZ","420","CZK","Prague","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("59","Denmark","DNK","DK","45","DKK","Copenhagen","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("60","Djibouti","DJI","DJ","253","DJF","Djibouti","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("61","Dominica","DMA","DM","+1-767","XCD","Roseau","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("62","Dominican Republic","DOM","DO","+1-809 and 1-829","DOP","Santo Domingo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("63","East Timor","TLS","TL","670","USD","Dili","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("64","Ecuador","ECU","EC","593","USD","Quito","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("65","Egypt","EGY","EG","20","EGP","Cairo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("66","El Salvador","SLV","SV","503","USD","San Salvador","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("67","Equatorial Guinea","GNQ","GQ","240","XAF","Malabo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("68","Eritrea","ERI","ER","291","ERN","Asmara","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("69","Estonia","EST","EE","372","EUR","Tallinn","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("70","Ethiopia","ETH","ET","251","ETB","Addis Ababa","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("71","Falkland Islands","FLK","FK","500","FKP","Stanley","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("72","Faroe Islands","FRO","FO","298","DKK","Torshavn","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("73","Fiji Islands","FJI","FJ","679","FJD","Suva","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("74","Finland","FIN","FI","358","EUR","Helsinki","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("75","France","FRA","FR","33","EUR","Paris","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("76","French Guiana","GUF","GF","594","EUR","Cayenne","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("77","French Polynesia","PYF","PF","689","XPF","Papeete","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("78","French Southern Territories","ATF","TF","","EUR","Port-aux-Francais","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("79","Gabon","GAB","GA","241","XAF","Libreville","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("80","Gambia The","GMB","GM","220","GMD","Banjul","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("81","Georgia","GEO","GE","995","GEL","Tbilisi","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("82","Germany","DEU","DE","49","EUR","Berlin","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("83","Ghana","GHA","GH","233","GHS","Accra","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("84","Gibraltar","GIB","GI","350","GIP","Gibraltar","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("85","Greece","GRC","GR","30","EUR","Athens","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("86","Greenland","GRL","GL","299","DKK","Nuuk","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("87","Grenada","GRD","GD","+1-473","XCD","St. George\'s","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("88","Guadeloupe","GLP","GP","590","EUR","Basse-Terre","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("89","Guam","GUM","GU","+1-671","USD","Hagatna","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("90","Guatemala","GTM","GT","502","GTQ","Guatemala City","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("91","Guernsey and Alderney","GGY","GG","+44-1481","GBP","St Peter Port","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("92","Guinea","GIN","GN","224","GNF","Conakry","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("93","Guinea-Bissau","GNB","GW","245","XOF","Bissau","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("94","Guyana","GUY","GY","592","GYD","Georgetown","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("95","Haiti","HTI","HT","509","HTG","Port-au-Prince","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("96","Heard and McDonald Islands","HMD","HM"," ","AUD","","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("97","Honduras","HND","HN","504","HNL","Tegucigalpa","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("98","Hong Kong S.A.R.","HKG","HK","852","HKD","Hong Kong","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("99","Hungary","HUN","HU","36","HUF","Budapest","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("100","Iceland","ISL","IS","354","ISK","Reykjavik","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("101","India","IND","IN","91","INR","New Delhi","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("102","Indonesia","IDN","ID","62","IDR","Jakarta","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("103","Iran","IRN","IR","98","IRR","Tehran","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("104","Iraq","IRQ","IQ","964","IQD","Baghdad","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("105","Ireland","IRL","IE","353","EUR","Dublin","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("106","Israel","ISR","IL","972","ILS","Jerusalem","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("107","Italy","ITA","IT","39","EUR","Rome","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("108","Jamaica","JAM","JM","+1-876","JMD","Kingston","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("109","Japan","JPN","JP","81","JPY","Tokyo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("110","Jersey","JEY","JE","+44-1534","GBP","Saint Helier","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("111","Jordan","JOR","JO","962","JOD","Amman","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("112","Kazakhstan","KAZ","KZ","7","KZT","Astana","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("113","Kenya","KEN","KE","254","KES","Nairobi","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("114","Kiribati","KIR","KI","686","AUD","Tarawa","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("115","Korea North
","PRK","KP","850","KPW","Pyongyang","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("116","Korea South","KOR","KR","82","KRW","Seoul","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("117","Kuwait","KWT","KW","965","KWD","Kuwait City","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("118","Kyrgyzstan","KGZ","KG","996","KGS","Bishkek","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("119","Laos","LAO","LA","856","LAK","Vientiane","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("120","Latvia","LVA","LV","371","EUR","Riga","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("121","Lebanon","LBN","LB","961","LBP","Beirut","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("122","Lesotho","LSO","LS","266","LSL","Maseru","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("123","Liberia","LBR","LR","231","LRD","Monrovia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("124","Libya","LBY","LY","218","LYD","Tripolis","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("125","Liechtenstein","LIE","LI","423","CHF","Vaduz","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("126","Lithuania","LTU","LT","370","LTL","Vilnius","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("127","Luxembourg","LUX","LU","352","EUR","Luxembourg","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("128","Macau S.A.R.","MAC","MO","853","MOP","Macao","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("129","Macedonia","MKD","MK","389","MKD","Skopje","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("130","Madagascar","MDG","MG","261","MGA","Antananarivo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("131","Malawi","MWI","MW","265","MWK","Lilongwe","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("132","Malaysia","MYS","MY","60","MYR","Kuala Lumpur","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("133","Maldives","MDV","MV","960","MVR","Male","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("134","Mali","MLI","ML","223","XOF","Bamako","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("135","Malta","MLT","MT","356","EUR","Valletta","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("136","Man (Isle of)","IMN","IM","+44-1624","GBP","Douglas, Isle of Man","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("137","Marshall Islands","MHL","MH","692","USD","Majuro","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("138","Martinique","MTQ","MQ","596","EUR","Fort-de-France","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("139","Mauritania","MRT","MR","222","MRO","Nouakchott","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("140","Mauritius","MUS","MU","230","MUR","Port Louis","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("141","Mayotte","MYT","YT","262","EUR","Mamoudzou","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("142","Mexico","MEX","MX","52","MXN","Mexico City","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("143","Micronesia","FSM","FM","691","USD","Palikir","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("144","Moldova","MDA","MD","373","MDL","Chisinau","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("145","Monaco","MCO","MC","377","EUR","Monaco","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("146","Mongolia","MNG","MN","976","MNT","Ulan Bator","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("147","Montenegro","MNE","ME","382","EUR","Podgorica","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("148","Montserrat","MSR","MS","+1-664","XCD","Plymouth","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("149","Morocco","MAR","MA","212","MAD","Rabat","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("150","Mozambique","MOZ","MZ","258","MZN","Maputo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("151","Myanmar","MMR","MM","95","MMK","Nay Pyi Taw","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("152","Namibia","NAM","NA","264","NAD","Windhoek","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("153","Nauru","NRU","NR","674","AUD","Yaren","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("154","Nepal","NPL","NP","977","NPR","Kathmandu","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("155","Netherlands Antilles","ANT","AN","","","","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("156","Netherlands The","NLD","NL","31","EUR","Amsterdam","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("157","New Caledonia","NCL","NC","687","XPF","Noumea","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("158","New Zealand","NZL","NZ","64","NZD","Wellington","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("159","Nicaragua","NIC","NI","505","NIO","Managua","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("160","Niger","NER","NE","227","XOF","Niamey","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("161","Nigeria","NGA","NG","234","NGN","Abuja","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("162","Niue","NIU","NU","683","NZD","Alofi","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("163","Norfolk Island","NFK","NF","672","AUD","Kingston","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("164","Northern Mariana Islands","MNP","MP","+1-670","USD","Saipan","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("165","Norway","NOR","NO","47","NOK","Oslo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("166","Oman","OMN","OM","968","OMR","Muscat","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("167","Pakistan","PAK","PK","92","PKR","Islamabad","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("168","Palau","PLW","PW","680","USD","Melekeok","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("169","Palestinian Territory Occupied","PSE","PS","970","ILS","East Jerusalem","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("170","Panama","PAN","PA","507","PAB","Panama City","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("171","Papua new Guinea","PNG","PG","675","PGK","Port Moresby","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("172","Paraguay","PRY","PY","595","PYG","Asuncion","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("173","Peru","PER","PE","51","PEN","Lima","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("174","Philippines","PHL","PH","63","PHP","Manila","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("175","Pitcairn Island","PCN","PN","870","NZD","Adamstown","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("176","Poland","POL","PL","48","PLN","Warsaw","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("177","Portugal","PRT","PT","351","EUR","Lisbon","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("178","Puerto Rico","PRI","PR","+1-787 and 1-939","USD","San Juan","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("179","Qatar","QAT","QA","974","QAR","Doha","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("180","Reunion","REU","RE","262","EUR","Saint-Denis","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("181","Romania","ROU","RO","40","RON","Bucharest","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("182","Russia","RUS","RU","7","RUB","Moscow","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("183","Rwanda","RWA","RW","250","RWF","Kigali","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("184","Saint Helena","SHN","SH","290","SHP","Jamestown","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("185","Saint Kitts And Nevis","KNA","KN","+1-869","XCD","Basseterre","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("186","Saint Lucia","LCA","LC","+1-758","XCD","Castries","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("187","Saint Pierre and Miquelon","SPM","PM","508","EUR","Saint-Pierre","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("188","Saint Vincent And The Grenadines","VCT","VC","+1-784","XCD","Kingstown","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("189","Saint-Barthelemy","BLM","BL","590","EUR","Gustavia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("190","Saint-Martin (French part)","MAF","MF","590","EUR","Marigot","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("191","Samoa","WSM","WS","685","WST","Apia","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("192","San Marino","SMR","SM","378","EUR","San Marino","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("193","Sao Tome and Principe","STP","ST","239","STD","Sao Tome","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("194","Saudi Arabia","SAU","SA","966","SAR","Riyadh","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("195","Senegal","SEN","SN","221","XOF","Dakar","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("196","Serbia","SRB","RS","381","RSD","Belgrade","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("197","Seychelles","SYC","SC","248","SCR","Victoria","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("198","Sierra Leone","SLE","SL","232","SLL","Freetown","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("199","Singapore","SGP","SG","65","SGD","Singapur","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("200","Slovakia","SVK","SK","421","EUR","Bratislava","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("201","Slovenia","SVN","SI","386","EUR","Ljubljana","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("202","Solomon Islands","SLB","SB","677","SBD","Honiara","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("203","Somalia","SOM","SO","252","SOS","Mogadishu","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("204","South Africa","ZAF","ZA","27","ZAR","Pretoria","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("205","South Georgia","SGS","GS","","GBP","Grytviken","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("206","South Sudan","SSD","SS","211","SSP","Juba","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("207","Spain","ESP","ES","34","EUR","Madrid","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("208","Sri Lanka","LKA","LK","94","LKR","Colombo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("209","Sudan","SDN","SD","249","SDG","Khartoum","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("210","Suriname","SUR","SR","597","SRD","Paramaribo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("211","Svalbard And Jan Mayen Islands","SJM","SJ","47","NOK","Longyearbyen","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("212","Swaziland","SWZ","SZ","268","SZL","Mbabane","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("213","Sweden","SWE","SE","46","SEK","Stockholm","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("214","Switzerland","CHE","CH","41","CHF","Berne","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("215","Syria","SYR","SY","963","SYP","Damascus","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("216","Taiwan","TWN","TW","886","TWD","Taipei","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("217","Tajikistan","TJK","TJ","992","TJS","Dushanbe","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("218","Tanzania","TZA","TZ","255","TZS","Dodoma","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("219","Thailand","THA","TH","66","THB","Bangkok","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("220","Togo","TGO","TG","228","XOF","Lome","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("221","Tokelau","TKL","TK","690","NZD","","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("222","Tonga","TON","TO","676","TOP","Nuku\'alofa","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("223","Trinidad And Tobago","TTO","TT","+1-868","TTD","Port of Spain","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("224","Tunisia","TUN","TN","216","TND","Tunis","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("225","Turkey","TUR","TR","90","TRY","Ankara","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("226","Turkmenistan","TKM","TM","993","TMT","Ashgabat","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("227","Turks And Caicos Islands","TCA","TC","+1-649","USD","Cockburn Town","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("228","Tuvalu","TUV","TV","688","AUD","Funafuti","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("229","Uganda","UGA","UG","256","UGX","Kampala","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("230","Ukraine","UKR","UA","380","UAH","Kiev","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("231","United Arab Emirates","ARE","AE","971","AED","Abu Dhabi","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("232","United Kingdom","GBR","GB","44","GBP","London","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("233","United States","USA","US","1","USD","Washington","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("234","United States Minor Outlying Islands","UMI","UM","1","USD","","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("235","Uruguay","URY","UY","598","UYU","Montevideo","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("236","Uzbekistan","UZB","UZ","998","UZS","Tashkent","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("237","Vanuatu","VUT","VU","678","VUV","Port Vila","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("238","Vatican City State (Holy See)","VAT","VA","379","EUR","Vatican City","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("239","Venezuela","VEN","VE","58","VEF","Caracas","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("240","Vietnam","VNM","VN","84","VND","Hanoi","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("241","Virgin Islands (British)","VGB","VG","+1-284","USD","Road Town","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("242","Virgin Islands (US)","VIR","VI","+1-340","USD","Charlotte Amalie","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("243","Wallis And Futuna Islands","WLF","WF","681","XPF","Mata Utu","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("244","Western Sahara","ESH","EH","212","MAD","El-Aaiun","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("245","Yemen","YEM","YE","967","YER","Sanaa","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("246","Zambia","ZMB","ZM","260","ZMK","Lusaka","1","2018-07-20 14:41:03","2018-07-20 14:41:03");
INSERT INTO countries VALUES("247","Zimbabwe","ZWE","ZW","263","ZWL","Harare","1","2018-07-20 14:41:03","2018-07-20 14:41:03");



DROP TABLE currencies;

CREATE TABLE `currencies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO currencies VALUES("1","Leke","ALL","Lek","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("2","Dollars","USD","$","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("3","Afghanis","AFN","؋","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("4","Pesos","ARS","$","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("5","Guilders","AWG","ƒ","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("6","Dollars","AUD","$","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("7","New Manats","AZN","ман","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("8","Dollars","BSD","$","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("9","Dollars","BBD","$","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("10","Rubles","BYR","p.","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("11","Euro","EUR","€","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("12","Dollars","BZD","BZ$","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("13","Dollars","BMD","$","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("14","Bolivianos","BOB","$b","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("15","Convertible Marka","BAM","KM","2020-07-12 21:35:07","2020-07-12 21:35:07");
INSERT INTO currencies VALUES("16","Pula","BWP","P","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("17","Leva","BGN","лв","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("18","Reais","BRL","R$","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("19","Pounds","GBP","£","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("20","Dollars","BND","$","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("21","Riels","KHR","៛","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("22","Dollars","CAD","$","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("23","Dollars","KYD","$","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("24","Pesos","CLP","$","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("25","Yuan Renminbi","CNY","¥","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("26","Pesos","COP","$","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("27","Colón","CRC","₡","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("28","Kuna","HRK","kn","2020-07-12 21:35:08","2020-07-12 21:35:08");
INSERT INTO currencies VALUES("29","Pesos","CUP","₱","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("30","Koruny","CZK","Kč","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("31","Kroner","DKK","kr","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("32","Pesos","DOP ","RD$","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("33","Dollars","XCD","$","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("34","Pounds","EGP","£","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("35","Colones","SVC","$","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("36","Pounds","FKP","£","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("37","Dollars","FJD","$","2020-07-12 21:35:09","2020-07-12 21:35:09");
INSERT INTO currencies VALUES("38","Cedis","GHC","¢","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("39","Pounds","GIP","£","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("40","Quetzales","GTQ","Q","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("41","Pounds","GGP","£","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("42","Dollars","GYD","$","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("43","Lempiras","HNL","L","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("44","Dollars","HKD","$","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("45","Forint","HUF","Ft","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("46","Kronur","ISK","kr","2020-07-12 21:35:10","2020-07-12 21:35:10");
INSERT INTO currencies VALUES("47","Rupees","INR","₹","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("48","Rupiahs","IDR","Rp","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("49","Rials","IRR","﷼","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("50","Pounds","IMP","£","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("51","New Shekels","ILS","₪","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("52","Dollars","JMD","J$","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("53","Yen","JPY","¥","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("54","Pounds","JEP","£","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("55","Tenge","KZT","лв","2020-07-12 21:35:11","2020-07-12 21:35:11");
INSERT INTO currencies VALUES("56","Won","KPW","₩","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("57","Won","KRW","₩","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("58","Soms","KGS","лв","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("59","Kips","LAK","₭","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("60","Lati","LVL","Ls","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("61","Pounds","LBP","£","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("62","Dollars","LRD","$","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("63","Switzerland Francs","CHF","CHF","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("64","Litai","LTL","Lt","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("65","Denars","MKD","ден","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("66","Ringgits","MYR","RM","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("67","Rupees","MUR","₨","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("68","Pesos","MXN","$","2020-07-12 21:35:12","2020-07-12 21:35:12");
INSERT INTO currencies VALUES("69","Tugriks","MNT","₮","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("70","Meticais","MZN","MT","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("71","Dollars","NAD","$","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("72","Rupees","NPR","₨","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("73","Guilders","ANG","ƒ","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("74","Dollars","NZD","$","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("75","Cordobas","NIO","C$","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("76","Nairas","NGN","₦","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("77","Krone","NOK","kr","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("78","Rials","OMR","﷼","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("79","Rupees","PKR","₨","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("80","Balboa","PAB","B/.","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("81","Guarani","PYG","Gs","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("82","Nuevos Soles","PEN","S/.","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("83","Pesos","PHP","Php","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("84","Zlotych","PLN","zł","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("85","Rials","QAR","﷼","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("86","New Lei","RON","lei","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("87","Rubles","RUB","руб","2020-07-12 21:35:13","2020-07-12 21:35:13");
INSERT INTO currencies VALUES("88","Pounds","SHP","£","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("89","Riyals","SAR","﷼","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("90","Dinars","RSD","Дин.","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("91","Rupees","SCR","₨","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("92","Dollars","SGD","$","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("93","Dollars","SBD","$","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("94","Shillings","SOS","S","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("95","Rand","ZAR","R","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("96","Rupees","LKR","₨","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("97","Kronor","SEK","kr","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("98","Dollars","SRD","$","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("99","Pounds","SYP","£","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("100","New Dollars","TWD","NT$","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("101","Baht","THB","฿","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("102","Dollars","TTD","TT$","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("103","Lira","TRY","TL","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("104","Liras","TRL","£","2020-07-12 21:35:14","2020-07-12 21:35:14");
INSERT INTO currencies VALUES("105","Dollars","TVD","$","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("106","Hryvnia","UAH","₴","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("107","Pesos","UYU","$U","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("108","Sums","UZS","лв","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("109","Bolivares Fuertes","VEF","Bs","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("110","Dong","VND","₫","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("111","Rials","YER","﷼","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("112","Taka","BDT","৳","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("113","Zimbabwe Dollars","ZWD","Z$","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("114","Kenya","KES","KSh","2020-07-12 21:35:15","2020-07-12 21:35:15");
INSERT INTO currencies VALUES("115","Nigeria","naira","₦","2020-07-12 21:35:16","2020-07-12 21:35:16");
INSERT INTO currencies VALUES("116","Ghana","GHS","GH₵","2020-07-12 21:35:16","2020-07-12 21:35:16");
INSERT INTO currencies VALUES("117","Ethiopian","ETB","Br","2020-07-12 21:35:16","2020-07-12 21:35:16");
INSERT INTO currencies VALUES("118","Tanzania","TZS","TSh","2020-07-12 21:35:16","2020-07-12 21:35:16");
INSERT INTO currencies VALUES("119","Uganda","UGX","USh","2020-07-12 21:35:16","2020-07-12 21:35:16");
INSERT INTO currencies VALUES("120","Rwandan","FRW","FRw","2020-07-12 21:35:16","2020-07-12 21:35:16");



DROP TABLE customers;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` bigint(20) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_number_unique` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customers VALUES("1","1791","Angelina Dach","19","166 Lueilwitz Heights Apt. 379","34724 Christiansen Plaza
Port Brooklyn, NY 85363-4915","1","29","1","","");
INSERT INTO customers VALUES("2","661275440","Miss Chaya Zemlak DVM","19","75831 Maximillian Hills","96298 Monahan Parkways
Blandaport, NC 48089","1","5220274","1","","");
INSERT INTO customers VALUES("3","4","Name Olson Jr.","19","8424 Fay Villages","772 Hill Ramp
Haileefurt, CO 37595","795730","316","1","","");
INSERT INTO customers VALUES("4","4316","Dr. Charlotte Howe DVM","19","4165 Cordie Drive Suite 895","960 Langosh Groves Apt. 286
Jordonton, WA 60940","1","294738","1","","");
INSERT INTO customers VALUES("5","65041","Charley Stamm","19","18242 Thalia Curve","2051 Schmitt Isle Suite 020
North Maryam, TN 78690","919","908788","1","","");
INSERT INTO customers VALUES("6","7354915","Wilton Ortiz","19","673 Woodrow Rapids Apt. 854","47936 Ozella Trail Apt. 797
Claireland, MT 75030-1001","1","4","1","","");
INSERT INTO customers VALUES("7","368","Miracle Schulist","19","7649 Bins Crest","71564 Hermann View
Port Margarette, OK 53533-1074","818850","83","1","","");
INSERT INTO customers VALUES("8","63503","Alfreda Davis","19","868 Margarette Greens","3217 George Stream Suite 903
Simonisfurt, PA 58948-1288","937882","57706","1","","");
INSERT INTO customers VALUES("9","9454146","Prof. Gilbert Hegmann","19","5002 Elijah Hollow","832 Kub Spur
South Kayleefort, LA 15694-1779","0","60340","1","","");
INSERT INTO customers VALUES("10","817278972","Catherine Swaniawski","19","446 Peyton Fort","84312 Breitenberg Springs Suite 145
Port Mariana, GA 47538-3493","1","317121144","1","","");



DROP TABLE expense_heads;

CREATE TABLE `expense_heads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO expense_heads VALUES("1","Demo 1","1","2020-07-12 21:35:40","");
INSERT INTO expense_heads VALUES("2","Demo 2","1","2020-07-12 21:35:40","");



DROP TABLE expenses;

CREATE TABLE `expenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `expense_head_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `expenses_expense_head_id_foreign` (`expense_head_id`),
  CONSTRAINT `expenses_expense_head_id_foreign` FOREIGN KEY (`expense_head_id`) REFERENCES `expense_heads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE generes;

CREATE TABLE `generes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO generes VALUES("1","Alendronate","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("2","Acyclovir","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("3","Azathioprine","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("4","Benzonatate‎","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("5","Decitabine","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("6","Dexmethylphenidate","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("7","Fluconazole","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("8","Meloxicam","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("9","Ondansetron","2020-07-12 21:35:19","");
INSERT INTO generes VALUES("10","Venlafaxine","2020-07-12 21:35:19","");



DROP TABLE icons;

CREATE TABLE `icons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO icons VALUES("1","Pills","public/uploads/icon/pills.png","","");
INSERT INTO icons VALUES("2","Syringe","public/uploads/icon/syringe.png","","");
INSERT INTO icons VALUES("3","Syrup","public/uploads/icon/syrup.png","","");



DROP TABLE income_heads;

CREATE TABLE `income_heads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO income_heads VALUES("1","Demo 1","1","2020-07-12 21:35:38","");
INSERT INTO income_heads VALUES("2","Demo 2","1","2020-07-12 21:35:38","");



DROP TABLE incomes;

CREATE TABLE `incomes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `income_head_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `incomes_income_head_id_foreign` (`income_head_id`),
  CONSTRAINT `incomes_income_head_id_foreign` FOREIGN KEY (`income_head_id`) REFERENCES `income_heads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE invests;

CREATE TABLE `invests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE migrations;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO migrations VALUES("1","2014_10_12_000000_create_users_table","1");
INSERT INTO migrations VALUES("2","2014_10_12_100000_create_password_resets_table","1");
INSERT INTO migrations VALUES("3","2017_05_31_113205_create_suppliers_table","1");
INSERT INTO migrations VALUES("4","2017_06_06_121639_create_customers_table","1");
INSERT INTO migrations VALUES("5","2017_06_14_230658_create_notes_table","1");
INSERT INTO migrations VALUES("6","2017_07_08_110357_create_roles_table","1");
INSERT INTO migrations VALUES("7","2017_07_08_110646_create_roles_user_table","1");
INSERT INTO migrations VALUES("8","2020_00_03_070512_create_taxes_table","1");
INSERT INTO migrations VALUES("9","2020_06_01_130821_create_settings_table","1");
INSERT INTO migrations VALUES("10","2020_06_30_073316_create_currencies_table","1");
INSERT INTO migrations VALUES("11","2020_06_30_073643_create_countries_table","1");
INSERT INTO migrations VALUES("12","2020_06_30_074106_create_brands_table","1");
INSERT INTO migrations VALUES("13","2020_06_30_074230_create_generes_table","1");
INSERT INTO migrations VALUES("14","2020_06_30_102203_create_icons_table","1");
INSERT INTO migrations VALUES("15","2020_06_30_215235_create_categories_table","1");
INSERT INTO migrations VALUES("16","2020_06_30_221455_create_products_table","1");
INSERT INTO migrations VALUES("17","2020_06_30_224519_create_sales_table","1");
INSERT INTO migrations VALUES("18","2020_07_02_092327_create_banks_table","1");
INSERT INTO migrations VALUES("19","2020_07_03_082132_create_purchases_table","1");
INSERT INTO migrations VALUES("20","2020_07_03_082500_create_product_purchases_table","1");
INSERT INTO migrations VALUES("21","2020_07_08_013749_create_product_sales_table","1");
INSERT INTO migrations VALUES("22","2020_07_10_023254_create_payments_table","1");
INSERT INTO migrations VALUES("23","2020_07_10_065517_create_income_heads_table","1");
INSERT INTO migrations VALUES("24","2020_07_10_070412_create_expense_heads_table","1");
INSERT INTO migrations VALUES("25","2020_07_10_070457_create_incomes_table","1");
INSERT INTO migrations VALUES("26","2020_07_10_070611_create_expenses_table","1");
INSERT INTO migrations VALUES("27","2020_07_10_070749_create_invests_table","1");
INSERT INTO migrations VALUES("28","2020_07_10_072023_create_service_types_table","1");
INSERT INTO migrations VALUES("29","2020_07_10_072418_create_services_table","1");
INSERT INTO migrations VALUES("30","2020_07_11_080215_create_colors_table","1");
INSERT INTO migrations VALUES("31","2020_07_12_014906_create_barcodes_table","1");
INSERT INTO migrations VALUES("32","2020_07_12_212217_create_backeups_table","1");



DROP TABLE notes;

CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE password_resets;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE payments;

CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `supplier_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_supplier_id_foreign` (`supplier_id`),
  CONSTRAINT `payments_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE product_purchases;

CREATE TABLE `product_purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `recieved` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `net_unit_cost` double DEFAULT NULL,
  `tax_rate` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `purchase_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_purchases_purchase_id_foreign` (`purchase_id`),
  CONSTRAINT `product_purchases_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE product_sales;

CREATE TABLE `product_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `recieved` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `net_unit_cost` double DEFAULT NULL,
  `tax_rate` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `sale_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_sales_sale_id_foreign` (`sale_id`),
  CONSTRAINT `product_sales_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE products;

CREATE TABLE `products` (
  `p_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_idnumber` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `out_stock` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_imdate` datetime DEFAULT NULL,
  `p_exdate` datetime DEFAULT NULL,
  `p_seffect` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL,
  `p_price` double(10,2) DEFAULT NULL,
  `org_price` double(10,2) DEFAULT NULL,
  `p_discount` int(11) DEFAULT NULL,
  `p_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_barcodeg` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suppiler_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `genere_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `products_suppiler_id_foreign` (`suppiler_id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_genere_id_foreign` (`genere_id`),
  KEY `products_created_by_foreign` (`created_by`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_genere_id_foreign` FOREIGN KEY (`genere_id`) REFERENCES `generes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_suppiler_id_foreign` FOREIGN KEY (`suppiler_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO products VALUES("1","Atque quia et velit eligendi explicabo.","atque-quia-et-velit-eligendi-explicabo.","Doloremque ut incidunt beatae qui. Debitis molestias est qui qui est mollitia. Fugit veritatis asperiores et. Quidem consequatur amet eligendi velit voluptatem fuga cupiditate.","3","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Non cum reiciendis aliquam voluptas aut adipisci. Aut est dignissimos officia neque harum molestiae cumque asperiores.","19","5","20.00","18.00","2","public/uploads/product/pr_1.jpg","2","73048350","1","1","1","1","1","2020-07-12 21:37:02","2020-07-12 21:37:02");
INSERT INTO products VALUES("2","Itaque ipsa impedit perspiciatis ad aut.","itaque-ipsa-impedit-perspiciatis-ad-aut.","Temporibus voluptatum qui eum maiores. Repudiandae dolor hic nam id cumque. Aperiam id est non rerum modi. Qui neque et in eum consequuntur accusantium accusantium eos.","4","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Facilis corrupti quia vitae molestias. Aut neque reiciendis non placeat tempore. Aut voluptatum tenetur et hic nemo aperiam.","19","2","21.00","19.00","2","public/uploads/product/pr_1.jpg","1","13599331","1","1","1","1","1","2020-07-12 21:37:03","2020-07-12 21:37:03");
INSERT INTO products VALUES("3","Sunt sunt nam enim rem sit.","sunt-sunt-nam-enim-rem-sit.","Eos illo facilis consequatur aliquam. Blanditiis ipsam aut iure maxime qui et incidunt. Et voluptas voluptatem et culpa aut voluptas sunt. Quos ex nam et laborum qui.","5","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Facilis unde sint omnis tenetur amet iste. Ea illo culpa eius et ut corrupti repudiandae. Qui et praesentium in quidem velit. Provident neque unde minima.","19","3","22.00","20.00","2","public/uploads/product/pr_1.jpg","1","49789027","1","1","1","1","1","2020-07-12 21:37:03","2020-07-12 21:37:03");
INSERT INTO products VALUES("4","Voluptatem accusantium rerum dolor.","voluptatem-accusantium-rerum-dolor.","In sequi sit est dolor numquam tempora. Voluptates ut id autem molestias qui iusto veritatis sint. Fuga culpa amet officiis perferendis. Voluptatem optio tempore quasi omnis.","6","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Accusamus ratione culpa iure id. Molestias earum commodi animi. Ipsam rem reprehenderit id ut provident aut. Saepe est non modi ut.","19","15","23.00","21.00","2","public/uploads/product/pr_1.jpg","3","70641844","1","1","1","1","1","2020-07-12 21:37:03","2020-07-12 21:37:03");
INSERT INTO products VALUES("5","Rerum laudantium et non itaque.","rerum-laudantium-et-non-itaque.","Omnis similique quia minus rem id. Deserunt assumenda suscipit non aut omnis. Saepe ipsum dolorem esse fugiat amet id.","7","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptatibus incidunt accusantium voluptatem et. Incidunt qui vel amet occaecati et. Expedita qui non aspernatur tenetur sunt enim odit. Sunt deleniti inventore iusto minima sed fugit.","19","19","24.00","22.00","2","public/uploads/product/pr_1.jpg","1","50691173","1","1","1","1","1","2020-07-12 21:37:03","2020-07-12 21:37:03");
INSERT INTO products VALUES("6","Sint ut et quia voluptatem.","sint-ut-et-quia-voluptatem.","Illum repellendus reprehenderit ad nisi nobis. Aut sunt facere molestiae quasi qui nostrum. Officia ex aut quidem atque.","8","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Temporibus laboriosam ut sed iste. Sed rerum veniam excepturi vero cumque est. Deleniti eum non sed. Laborum neque et voluptatem nemo.","19","12","25.00","23.00","2","public/uploads/product/pr_1.jpg","3","48735957","1","1","1","1","1","2020-07-12 21:37:03","2020-07-12 21:37:03");
INSERT INTO products VALUES("7","Alias harum neque corporis nemo sint sapiente.","alias-harum-neque-corporis-nemo-sint-sapiente.","Quis et ea qui sint quis. Tenetur vero consectetur quo commodi saepe. Expedita quasi autem vel eum. Eum consectetur fuga doloribus non facilis aut.","9","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Dolores et rem aut enim. Enim praesentium deserunt explicabo officiis at eveniet sed. Rem quisquam nesciunt non voluptatem ut corrupti dolor ad.","19","15","26.00","24.00","2","public/uploads/product/pr_1.jpg","1","79471787","1","1","1","1","1","2020-07-12 21:37:03","2020-07-12 21:37:03");
INSERT INTO products VALUES("8","Non natus facere quia quia.","non-natus-facere-quia-quia.","Ut fugit doloribus quis rem minus autem a. Sunt ullam unde aperiam recusandae vero dicta rerum. Illo qui autem quibusdam non laboriosam error.","10","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Tenetur dolore ut et deserunt omnis autem. Minima fugiat exercitationem magnam porro dolores ut mollitia. Ut et expedita voluptatem assumenda. Sit repudiandae aut ullam quam dolorum.","19","19","27.00","25.00","2","public/uploads/product/pr_1.jpg","3","11594000","1","1","1","1","1","2020-07-12 21:37:03","2020-07-12 21:37:03");
INSERT INTO products VALUES("9","Eius vitae ut et.","eius-vitae-ut-et.","Nihil vel id possimus. Nulla architecto dicta ratione vero exercitationem. Culpa officia ut praesentium in sed omnis perspiciatis.","11","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Qui iusto voluptas quo in perferendis dolorem enim. Excepturi error dignissimos est nam. A aut nisi blanditiis praesentium alias incidunt et. Ipsam odit quo architecto impedit similique labore.","19","2","28.00","26.00","2","public/uploads/product/pr_1.jpg","3","46378699","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("10","Voluptatem velit et perferendis asperiores nostrum.","voluptatem-velit-et-perferendis-asperiores-nostrum.","Exercitationem veritatis et corporis corrupti ullam iusto quia eligendi. Eos ut tempore velit ipsum expedita sunt vel fugit. Et qui vel est id possimus.","12","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Cum veritatis vel molestias molestias facilis odit distinctio. Minima deleniti perferendis vel vel laborum ad inventore eum. Rerum explicabo itaque quos error cumque quo sunt.","19","16","29.00","27.00","2","public/uploads/product/pr_1.jpg","2","54042865","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("11","Aspernatur autem tenetur qui dolor.","aspernatur-autem-tenetur-qui-dolor.","Ut sed tempora magni unde ut esse qui. Temporibus velit vel est porro fugiat ut. Animi adipisci et soluta explicabo et.","13","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis molestiae occaecati rem repellendus ut placeat. Incidunt aliquid libero animi eum in quas. Numquam in dicta quasi natus sit. Veritatis eos ipsum molestiae minus eos.","19","7","30.00","28.00","2","public/uploads/product/pr_1.jpg","3","80065678","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("12","Qui ullam sequi consectetur et rerum.","qui-ullam-sequi-consectetur-et-rerum.","Odio non totam repellendus animi. Nulla dicta maiores et inventore voluptatum voluptas non. Consectetur veniam voluptas quis ut possimus omnis dicta. Rerum aut nam dolorem.","14","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Ea aut quia aut et. Eaque unde dolorem officiis tempore. Porro consectetur modi temporibus iusto et explicabo repudiandae.","19","5","31.00","29.00","2","public/uploads/product/pr_1.jpg","3","63443424","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("13","Fugit distinctio omnis voluptatem est nisi explicabo.","fugit-distinctio-omnis-voluptatem-est-nisi-explicabo.","Et hic nostrum aut accusantium distinctio aut. Aut non earum qui labore. Blanditiis sit nostrum corrupti accusamus minus voluptatibus non. Eos beatae quis veritatis qui qui.","15","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Eaque fugiat iure quas quia voluptatem rerum. Amet quia et natus quaerat deleniti nisi aut. Magni qui fugit quia.","19","6","32.00","30.00","2","public/uploads/product/pr_1.jpg","1","29346264","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("14","In voluptatem consequatur et ad autem.","in-voluptatem-consequatur-et-ad-autem.","Et nisi optio sit rerum. Similique libero repellat velit. Maiores ut aut et eum hic aliquam in.","16","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Ut aliquam aut voluptatem ratione officia eveniet. Sed corporis in eaque minima. Minus possimus numquam quo est magnam aut magnam tempora.","19","17","33.00","31.00","2","public/uploads/product/pr_1.jpg","2","72874813","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("15","Nesciunt libero labore accusamus laborum fugit quasi unde.","nesciunt-libero-labore-accusamus-laborum-fugit-quasi-unde.","Occaecati et rerum culpa error voluptatem commodi doloribus. Et natus perferendis id ratione quia. Assumenda nihil illum tempora. Tempore qui nam temporibus.","17","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Suscipit quisquam autem quisquam vero fugiat maxime. Beatae nobis dolorem totam doloribus veritatis. Recusandae quaerat molestiae rerum ex. Et quae blanditiis optio numquam id.","19","1","34.00","32.00","2","public/uploads/product/pr_1.jpg","3","91052742","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("16","Beatae omnis dolorum non aut.","beatae-omnis-dolorum-non-aut.","Ut nesciunt qui in illo. Quia sequi amet dolor ut nihil rerum nam. Et dolorum amet cupiditate voluptatibus deserunt qui quia. Ipsum voluptatem qui autem voluptatem.","18","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Molestias laboriosam qui eum. Nemo ut sit officia. Laudantium consequatur pariatur dolor rerum unde.","19","2","35.00","33.00","2","public/uploads/product/pr_1.jpg","2","96311714","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("17","Voluptas labore quasi et voluptas sunt alias enim.","voluptas-labore-quasi-et-voluptas-sunt-alias-enim.","Explicabo neque illum voluptatibus eum cumque laboriosam mollitia. Et dolorem ducimus qui similique suscipit id illum. Cupiditate id aut nulla molestiae qui. Itaque cumque molestias ea repellat.","19","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Enim non et et. Ea aliquid eos modi soluta aperiam. Sunt omnis et voluptates optio vero.","19","15","36.00","34.00","2","public/uploads/product/pr_1.jpg","1","31712026","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("18","Quis omnis aut voluptatibus aut minus eum cumque blanditiis.","quis-omnis-aut-voluptatibus-aut-minus-eum-cumque-blanditiis.","Qui dicta quia ab magnam qui. Cumque dolorem et omnis officia reprehenderit laborum ut molestias. Voluptatum voluptatem quaerat labore voluptatem sint.","20","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Sunt iste facere consectetur aut ipsam et suscipit. Molestiae qui quia ratione aut tenetur at dicta. Aspernatur laborum quis necessitatibus aut temporibus non laboriosam.","19","4","37.00","35.00","2","public/uploads/product/pr_1.jpg","1","44349066","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("19","Accusantium eos provident et quis fugiat asperiores.","accusantium-eos-provident-et-quis-fugiat-asperiores.","Consequatur autem sit perspiciatis sit alias. Consequatur commodi et et ut tempora nesciunt. Reiciendis voluptate sunt molestias amet sit. Facere non dolores neque.","21","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Ut omnis vitae voluptatem enim ut aperiam. Et rerum autem quis aut tempore. Eum est facere ab qui rem et eius.","19","1","38.00","36.00","2","public/uploads/product/pr_1.jpg","1","43530779","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("20","Necessitatibus aut rerum iusto est.","necessitatibus-aut-rerum-iusto-est.","Atque ut recusandae nostrum cupiditate. Qui maxime perspiciatis consequatur iusto praesentium id ab earum. Quod earum similique quia expedita nam.","22","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Enim enim quia aut omnis consequatur sint nemo. Non magnam nostrum perspiciatis necessitatibus labore. Et eos minima in sint. Nihil eveniet recusandae doloremque pariatur et error a.","19","2","39.00","37.00","2","public/uploads/product/pr_1.jpg","1","29970797","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("21","Dolorem earum aut sunt natus fugit harum voluptas.","dolorem-earum-aut-sunt-natus-fugit-harum-voluptas.","Assumenda ducimus ut officiis libero voluptate ut. Sit quo iusto qui corporis quasi illo. Aut ut ipsa quae sunt qui. Rerum et vel quia quidem aut praesentium reiciendis.","23","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Asperiores adipisci eum vel vel. Velit ullam omnis ullam deserunt. Qui neque et impedit mollitia occaecati et.","19","2","40.00","38.00","2","public/uploads/product/pr_1.jpg","1","51413354","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("22","In velit amet est facere.","in-velit-amet-est-facere.","Aut error at neque veniam quod et autem est. Officiis sit veniam sunt aperiam voluptatibus. Quia placeat laboriosam quibusdam recusandae.","24","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Ea exercitationem aut possimus ut vel et occaecati. Iure iure harum eveniet totam dolorem. Commodi quia voluptatem non dicta. Ex voluptates autem expedita reiciendis blanditiis autem sequi.","19","18","41.00","39.00","2","public/uploads/product/pr_1.jpg","1","51598488","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("23","Animi consequatur et facere aut quo ut est.","animi-consequatur-et-facere-aut-quo-ut-est.","Adipisci rerum impedit aspernatur quia qui maiores dolor. Non earum omnis eligendi ullam. Eveniet dolor impedit adipisci rerum odio.","25","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Repudiandae inventore numquam deserunt rerum qui eveniet. Rem adipisci omnis rerum voluptas esse ea. Aut provident sint consequatur expedita.","19","1","42.00","40.00","2","public/uploads/product/pr_1.jpg","2","09812239","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("24","Sapiente aut quia non ab provident.","sapiente-aut-quia-non-ab-provident.","Tenetur voluptatem autem assumenda. Culpa est facilis commodi. Odit laborum tenetur voluptas et. Ratione saepe aperiam est quos.","26","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis iure qui unde ipsum aut. Ea id a minus sint magnam. Aut quibusdam sunt reiciendis molestias quidem.","19","6","43.00","41.00","2","public/uploads/product/pr_1.jpg","1","54068568","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("25","Quis autem et velit velit alias.","quis-autem-et-velit-velit-alias.","Eos et omnis hic omnis rerum esse nesciunt voluptatem. Corporis corrupti corporis blanditiis est. Rem facilis et quia. Qui at aperiam sed distinctio aut rerum mollitia.","27","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Porro voluptas vitae sunt tempora sunt. Et facere voluptates incidunt aliquid quaerat voluptates voluptas quidem. Nam magnam magnam sit libero.","19","3","44.00","42.00","2","public/uploads/product/pr_1.jpg","3","42357988","1","1","1","1","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("26","Sint eligendi culpa autem culpa doloremque porro.","sint-eligendi-culpa-autem-culpa-doloremque-porro.","Provident iste ipsa neque consequuntur. Voluptatem sed modi incidunt consectetur facere quo hic. Quia est et qui blanditiis dolorum fugit. Beatae amet minima quisquam impedit quos.","3","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Laboriosam rerum et temporibus cumque accusamus nobis. Aliquam occaecati ut ut dolore accusantium eos vel ut. Officiis sed architecto autem cumque sed.","19","7","20.00","18.00","2","public/uploads/product/pr_1.jpg","1","27596005","9","9","9","9","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("27","Deleniti provident distinctio cumque exercitationem sequi et magnam.","deleniti-provident-distinctio-cumque-exercitationem-sequi-et-magnam.","Soluta consequuntur quis et voluptas harum quod. Et id dolor non sunt.","4","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Perspiciatis doloremque dolores ad dolor. Iusto et dignissimos et sit adipisci hic. Officiis nobis velit nihil totam.","19","20","21.00","19.00","2","public/uploads/product/pr_1.jpg","3","80835806","9","9","9","9","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("28","Blanditiis asperiores velit ipsa.","blanditiis-asperiores-velit-ipsa.","Officiis minus dolore possimus molestiae. Numquam rerum molestias non. Maxime et sunt cupiditate qui. Qui quo ut quisquam incidunt dolores dolores.","5","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Quisquam dolorem provident aut alias. Voluptate modi omnis libero rerum consectetur corporis. Earum alias consectetur voluptas occaecati temporibus.","19","3","22.00","20.00","2","public/uploads/product/pr_1.jpg","3","68979607","9","9","9","9","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("29","Omnis natus fuga mollitia exercitationem exercitationem nam.","omnis-natus-fuga-mollitia-exercitationem-exercitationem-nam.","Et eligendi repellat incidunt ab. Quasi eligendi qui tempora excepturi. Sed sed totam eum necessitatibus necessitatibus velit dolorum molestias.","6","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptatem minus excepturi autem error molestias. Omnis consectetur nesciunt illo dolore nam nostrum velit. Deleniti ut illo ea magni. Consequatur doloremque explicabo et nulla non.","19","6","23.00","21.00","2","public/uploads/product/pr_1.jpg","2","66429883","9","9","9","9","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("30","Et tempora autem doloremque autem qui rerum.","et-tempora-autem-doloremque-autem-qui-rerum.","Et quo facilis voluptas illo et quis neque dolor. Velit odit pariatur velit sequi aperiam quaerat ut. Vero sit voluptas magnam quia ut. Aut et harum et ut officiis est labore.","7","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Laborum ducimus autem aut deserunt corrupti. Ipsa minima placeat totam occaecati sed enim in. Facere inventore recusandae et voluptates voluptatem exercitationem odit. Velit doloribus nisi quo.","19","8","24.00","22.00","2","public/uploads/product/pr_1.jpg","1","80975939","9","9","9","9","1","2020-07-12 21:37:04","2020-07-12 21:37:04");
INSERT INTO products VALUES("31","Doloremque voluptas tempora voluptas reprehenderit illum nam.","doloremque-voluptas-tempora-voluptas-reprehenderit-illum-nam.","Eos rerum sit dolores nam accusantium. Fugit consectetur aut quia molestias. Repellendus rerum expedita amet quod sunt sed. Voluptas nisi et dolore.","8","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Perspiciatis dolorem sit iste quam rerum iure et amet. Dignissimos sint est est consequuntur et.","19","6","25.00","23.00","2","public/uploads/product/pr_1.jpg","2","69686771","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("32","Magni illo et earum ratione.","magni-illo-et-earum-ratione.","Pariatur nemo cum sit laudantium qui iusto. Voluptatem aut aperiam qui sed debitis aut. Facere consequatur eum distinctio velit hic facere vel. Accusantium quia sequi voluptatem doloremque.","9","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Possimus velit maiores molestias similique veniam rerum nemo. Unde quia quis ad.","19","17","26.00","24.00","2","public/uploads/product/pr_1.jpg","1","22370112","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("33","Iste eveniet ut sed totam cumque qui aut.","iste-eveniet-ut-sed-totam-cumque-qui-aut.","Dolores rerum voluptas magnam. Architecto voluptatem id qui natus culpa a. In magni ex exercitationem quis delectus. Libero fuga nisi dolores illum sint temporibus.","10","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Laborum provident corporis architecto consequatur dignissimos expedita minus dolorum. Repellendus quis mollitia tenetur et. Hic est nihil maxime iure minus animi deserunt.","19","2","27.00","25.00","2","public/uploads/product/pr_1.jpg","1","11416333","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("34","Ratione et autem ea quae dolor.","ratione-et-autem-ea-quae-dolor.","Esse ut a dolor sed beatae eos et. Quidem sunt tempora et voluptas officia aut. Quis voluptatem necessitatibus libero quae pariatur est.","11","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Et neque odit ea commodi omnis. Quia vero accusantium illum voluptates quidem non odit. Explicabo ex sint error non laudantium dolorum adipisci.","19","11","28.00","26.00","2","public/uploads/product/pr_1.jpg","3","84849137","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("35","Tenetur voluptas nisi nam dolores qui asperiores et.","tenetur-voluptas-nisi-nam-dolores-qui-asperiores-et.","Enim vero praesentium quaerat ut optio vero. Illo repellat odio consequuntur voluptatem veritatis occaecati. Rerum laborum sit aut laboriosam consequatur.","12","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Et omnis ullam et id nulla repudiandae. Tempore similique perferendis consequatur veniam accusantium et est. Ducimus aut et aut exercitationem. Repellat aspernatur amet dolorem aut saepe.","19","6","29.00","27.00","2","public/uploads/product/pr_1.jpg","1","70250367","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("36","Aut ab saepe eum fugiat omnis ea nobis.","aut-ab-saepe-eum-fugiat-omnis-ea-nobis.","Libero quos culpa nihil accusamus. Reiciendis quia quia consequatur consequatur esse occaecati sapiente.","13","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Et unde omnis ut maiores hic. Natus est est ex deserunt nesciunt dolores occaecati. Placeat sit eligendi cumque minima at at.","19","18","30.00","28.00","2","public/uploads/product/pr_1.jpg","2","32367515","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("37","Dignissimos commodi ducimus quia et excepturi sed atque.","dignissimos-commodi-ducimus-quia-et-excepturi-sed-atque.","Quo architecto laboriosam aliquid enim illo non sed. Consequatur repudiandae nisi velit est in pariatur. Nihil accusamus magni earum et quis. Qui rerum aut nulla aut molestiae aut cumque.","14","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Rerum harum qui vel unde iure consequatur. Eveniet consequatur animi molestiae nihil dolor quam quis. Et quae repellendus ea fugiat rerum. Eum velit est adipisci repellat quo.","19","14","31.00","29.00","2","public/uploads/product/pr_1.jpg","3","87924060","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("38","Eveniet voluptatem eum et.","eveniet-voluptatem-eum-et.","Commodi voluptatum ducimus consequatur iusto. Quo harum molestiae dolor alias natus possimus. Et sed placeat excepturi consequuntur.","15","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Magnam sunt sit pariatur culpa qui voluptatem temporibus. Sed ut expedita dolores quia similique minima omnis atque. Perspiciatis hic accusamus et velit nostrum.","19","11","32.00","30.00","2","public/uploads/product/pr_1.jpg","3","69252525","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("39","Sit laboriosam harum aspernatur rem.","sit-laboriosam-harum-aspernatur-rem.","Placeat veritatis nam sapiente mollitia inventore excepturi nulla. Occaecati commodi id et et. Blanditiis non natus ullam mollitia. Incidunt molestiae expedita aut quo.","16","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Ad voluptatum saepe libero vel vitae. Reiciendis ad hic ut et repudiandae aspernatur quisquam. Et quia nisi laudantium ut aut. Eum ut reiciendis aut illo. Nihil quas perferendis at ut sit.","19","4","33.00","31.00","2","public/uploads/product/pr_1.jpg","1","26012018","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("40","Dolor labore praesentium sunt neque autem est doloremque commodi.","dolor-labore-praesentium-sunt-neque-autem-est-doloremque-commodi.","Maxime et et totam sequi. Ut omnis beatae voluptatibus officiis et. Dolore quis et similique a sit molestiae.","17","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis ea et aspernatur maxime laboriosam harum et vitae. Ut ullam placeat unde quia.","19","7","34.00","32.00","2","public/uploads/product/pr_1.jpg","3","50356546","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("41","Cumque optio velit voluptatem dolorem enim.","cumque-optio-velit-voluptatem-dolorem-enim.","Quisquam repellat cumque quasi itaque non aut. Cumque aperiam eum modi quia veniam. Ut est nihil alias est. Id ut minus et.","18","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Aut est architecto tenetur. Unde porro animi ea quae aperiam voluptates. Cum accusamus omnis unde ea. Ut vel aut perferendis illum odit. Est tempora odit maxime et ipsum consequatur sit.","19","17","35.00","33.00","2","public/uploads/product/pr_1.jpg","2","54173026","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("42","Labore culpa ad dicta distinctio quia praesentium.","labore-culpa-ad-dicta-distinctio-quia-praesentium.","Rerum maiores earum corporis perspiciatis. Aut officiis fugiat assumenda voluptate fugit vero. Odio harum nulla repellat delectus maiores ea. Qui deleniti eaque illum repellendus quis minima.","19","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Et nemo ipsum iusto sit et similique ducimus. Tenetur porro eum dolores corporis voluptatum magnam fugiat. Et perspiciatis similique ut et porro in odio ea.","19","8","36.00","34.00","2","public/uploads/product/pr_1.jpg","2","49479935","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("43","Impedit est assumenda in ullam.","impedit-est-assumenda-in-ullam.","Ipsa magni sed voluptate illum. Expedita quidem eos ullam saepe sunt exercitationem. Neque sit voluptas tenetur omnis illo.","20","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Et quo soluta repellendus molestiae optio. Ratione vero sunt consequuntur. Sit quis ut vero velit quia. Magni accusamus placeat dolores sit nulla.","19","2","37.00","35.00","2","public/uploads/product/pr_1.jpg","2","58046050","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("44","Modi quod neque velit.","modi-quod-neque-velit.","Quod sint nobis est et ut. Et corporis sed voluptates animi. Amet non et aspernatur eum aut non velit quas. Odit repellat accusamus est sapiente possimus nemo sunt.","21","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Quia omnis quasi odio officiis qui quis tempore. Consequatur suscipit illo esse. Eos voluptatem eum sint consequatur et quisquam.","19","1","38.00","36.00","2","public/uploads/product/pr_1.jpg","3","02289007","9","9","9","9","1","2020-07-12 21:37:05","2020-07-12 21:37:05");
INSERT INTO products VALUES("45","Qui rem nihil magni beatae.","qui-rem-nihil-magni-beatae.","Aut culpa blanditiis sit earum. Blanditiis vitae in exercitationem consequatur molestiae provident voluptate. Modi perferendis doloremque ratione sit adipisci illum nemo.","22","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Laudantium provident voluptatem aspernatur ut ea reprehenderit aut minus. Quas dolorem fugit repellat sunt.","19","1","39.00","37.00","2","public/uploads/product/pr_1.jpg","3","64363462","9","9","9","9","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("46","At in voluptatem modi qui.","at-in-voluptatem-modi-qui.","Quia ut hic accusantium esse. Nemo perspiciatis aperiam maxime consequuntur quia. Facere voluptate corporis eos et iure vel.","23","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptatem autem beatae aut qui eum doloribus praesentium. Aut omnis quidem adipisci quisquam. Tempora voluptas fugiat aut ea. Aliquam nihil neque a voluptatibus.","19","1","40.00","38.00","2","public/uploads/product/pr_1.jpg","1","99615772","9","9","9","9","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("47","Sit sequi ab a est et cum.","sit-sequi-ab-a-est-et-cum.","Ea similique et quaerat quidem harum neque. Sit maxime sint eos dolorum. Minima est sunt voluptates et rerum. Ut dolores enim et dolorem et mollitia.","24","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Molestiae autem exercitationem nam at eligendi. Et voluptatem soluta consequatur praesentium quaerat odio. Molestias perspiciatis id et qui officiis est.","19","15","41.00","39.00","2","public/uploads/product/pr_1.jpg","1","88214696","9","9","9","9","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("48","Totam fuga doloribus pariatur autem et possimus quaerat.","totam-fuga-doloribus-pariatur-autem-et-possimus-quaerat.","Mollitia rem nemo aut ipsa odit. Nobis voluptate omnis eum quibusdam et nobis dolor eum. Amet iste tenetur dicta culpa omnis.","25","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Totam voluptatum nulla harum nesciunt quis magni voluptas. Corporis debitis dicta qui ex eligendi eos quam. Fugit deserunt similique tempora fugit. Deserunt voluptatem fugiat vel animi modi enim.","19","1","42.00","40.00","2","public/uploads/product/pr_1.jpg","2","51347543","9","9","9","9","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("49","Delectus totam iure doloribus maxime at quo voluptas voluptatem.","delectus-totam-iure-doloribus-maxime-at-quo-voluptas-voluptatem.","Quod temporibus aliquid sed animi consequuntur. Quae et itaque sit aut assumenda ut. Est at eius cupiditate alias eos error.","26","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Facilis alias et voluptas et voluptates magnam quos iste. Provident et facilis error in accusamus rerum enim. Dignissimos laborum tempore vel.","19","10","43.00","41.00","2","public/uploads/product/pr_1.jpg","3","64894843","9","9","9","9","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("50","Possimus voluptatem eligendi tempora vero.","possimus-voluptatem-eligendi-tempora-vero.","Voluptatum reiciendis corporis ipsum ad id recusandae praesentium. Ipsa dolores est alias aut nesciunt dolores et fugit. Totam deleniti nihil et mollitia in aut consequatur.","27","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Est et sed sed ut enim. Sapiente sunt odit aspernatur assumenda quod. Maiores officiis quidem mollitia aut id. Id tempora repellendus sed hic.","19","10","44.00","42.00","2","public/uploads/product/pr_1.jpg","3","67283071","9","9","9","9","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("51","Quod autem libero ab illum quia.","quod-autem-libero-ab-illum-quia.","Fuga consequuntur eum est non qui natus et exercitationem. Natus omnis ullam voluptatem itaque ipsa illo iure. Cum nihil eum non maiores quas.","3","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Ratione animi provident eaque est quo ullam maiores. Ipsa ratione quas dicta optio. Enim culpa vitae illo aspernatur occaecati voluptatem eveniet.","19","11","20.00","18.00","2","public/uploads/product/pr_1.jpg","1","44967147","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("52","Recusandae vero modi quas laboriosam sint.","recusandae-vero-modi-quas-laboriosam-sint.","Excepturi distinctio et sed consequatur tempora. Deserunt ut iusto illum ab. Et molestias quis neque velit.","4","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Et aut non occaecati velit qui suscipit. Consequuntur placeat qui sequi et in. Sunt ad cupiditate molestiae officia amet omnis suscipit blanditiis.","19","8","21.00","19.00","2","public/uploads/product/pr_1.jpg","2","53788948","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("53","Molestiae id porro iure sit.","molestiae-id-porro-iure-sit.","Totam at perferendis nesciunt quis id. Quisquam nihil omnis aut ratione quo veniam. Magnam possimus ut optio et voluptatem nostrum.","5","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Quia quia voluptatem repellat tempora repellendus qui. Iure corrupti veritatis ratione blanditiis explicabo. Voluptas ut quis harum vel voluptates corrupti et. Vero est dolorem veritatis quo.","19","8","22.00","20.00","2","public/uploads/product/pr_1.jpg","2","57250458","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("54","Eos esse tenetur culpa nemo.","eos-esse-tenetur-culpa-nemo.","Voluptate aspernatur sequi quos dolorem. Odit itaque nemo explicabo iusto quasi vero. Facilis odio rerum id autem vitae eos.","6","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Ea aliquam aliquid nisi voluptatem. Quis reiciendis dicta occaecati voluptas distinctio occaecati tempora. Porro facilis tempora minus quisquam possimus in.","19","8","23.00","21.00","2","public/uploads/product/pr_1.jpg","1","37784737","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("55","Excepturi nam a qui beatae distinctio.","excepturi-nam-a-qui-beatae-distinctio.","Ullam quidem enim nisi omnis consequatur numquam non. In est vel vero cum aliquam consequatur maiores culpa. In mollitia quis cum voluptatem voluptate laudantium.","7","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Aut sed unde minima ipsa adipisci. Eum pariatur nesciunt ut perspiciatis esse corporis neque. Molestiae debitis illum qui dolores nihil et et. Incidunt fugit et ea quia vel.","19","4","24.00","22.00","2","public/uploads/product/pr_1.jpg","2","37479701","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("56","Iusto sed eius voluptatem tempora quas.","iusto-sed-eius-voluptatem-tempora-quas.","Ut explicabo exercitationem autem nihil. Eos dignissimos maiores beatae architecto natus cumque debitis. Ducimus accusamus repellat ut minima blanditiis ut et.","8","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Est quae aut vel maxime et consequatur. Adipisci officiis distinctio rerum repellat. Sit illum vitae provident nostrum minima.","19","6","25.00","23.00","2","public/uploads/product/pr_1.jpg","1","91203069","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("57","Earum eius ut cupiditate enim omnis et.","earum-eius-ut-cupiditate-enim-omnis-et.","Voluptatem ab rerum recusandae qui dolores. Perferendis laborum qui incidunt suscipit dolorem qui. Explicabo est tempore sint ad placeat nisi eius. Pariatur quo minima aut quo omnis enim.","9","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Ratione voluptatem repudiandae doloremque. Facere ducimus unde neque pariatur et et.","19","2","26.00","24.00","2","public/uploads/product/pr_1.jpg","3","78811133","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("58","Alias labore reprehenderit quisquam et id rem.","alias-labore-reprehenderit-quisquam-et-id-rem.","Corrupti est maiores velit exercitationem. Dolor ea sit rerum explicabo quaerat sit. Eos sit aut doloribus corrupti. Corporis iusto quasi aspernatur impedit omnis ipsam sed.","10","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Id maiores voluptas delectus nobis asperiores. Asperiores optio necessitatibus dignissimos. Sint totam voluptas molestiae enim natus id ex. Consequatur cumque omnis ad voluptatem quis.","19","20","27.00","25.00","2","public/uploads/product/pr_1.jpg","2","22927415","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("59","Asperiores aut maiores dolorem placeat qui et id.","asperiores-aut-maiores-dolorem-placeat-qui-et-id.","Dolor quia facilis et et accusantium provident. Exercitationem dolor ut saepe saepe commodi debitis sed. Quae natus debitis eius a explicabo deleniti.","11","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Velit occaecati ut ea sunt dolore amet omnis. Qui perspiciatis dignissimos cupiditate. Soluta corrupti deserunt est molestiae voluptatem ut sapiente.","19","5","28.00","26.00","2","public/uploads/product/pr_1.jpg","3","63623840","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("60","Voluptatem vel possimus eius est aut officiis.","voluptatem-vel-possimus-eius-est-aut-officiis.","Tenetur dolorem commodi tempora voluptas animi iure. Perspiciatis aut sit ut consequatur corporis. Nihil tempore debitis dignissimos aut nihil quo eaque. Qui quia saepe ut ea praesentium qui magni.","12","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Quae aut impedit debitis reprehenderit qui facere. Accusantium assumenda facere omnis libero. Non sint eligendi rerum sit.","19","11","29.00","27.00","2","public/uploads/product/pr_1.jpg","3","82432720","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("61","Pariatur et eligendi odio ut eligendi.","pariatur-et-eligendi-odio-ut-eligendi.","Et earum quo qui in minus tempore praesentium. Accusantium possimus aut aperiam quos rerum voluptatem. Amet enim quis asperiores aliquid nostrum error sunt ratione.","13","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Nobis amet fugit aut et quo doloremque in. Qui porro optio ratione occaecati facilis eos facere. Animi quia tenetur quia nam et fuga. Officiis sed ut quas quia ut excepturi.","19","3","30.00","28.00","2","public/uploads/product/pr_1.jpg","1","40539294","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("62","Ad consequatur porro deserunt minus.","ad-consequatur-porro-deserunt-minus.","Ea veniam voluptatem similique aut quas suscipit hic. Repudiandae sed dolorem est aut. Ratione nesciunt alias quaerat dolor rem dolorem nobis.","14","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Dolore doloribus accusantium dolor et sed tempore non accusamus. Ratione ex aut harum iusto laudantium ratione. Voluptas quo dolores animi rerum natus. Ut eos ut harum sunt optio quaerat doloribus.","19","19","31.00","29.00","2","public/uploads/product/pr_1.jpg","3","68974732","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("63","Doloribus voluptatem culpa ut qui.","doloribus-voluptatem-culpa-ut-qui.","Sed sunt quo cumque. Inventore sed magnam magnam. Ratione repudiandae error commodi qui.","15","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Vel ut aut numquam molestiae expedita. Quam provident ipsa nisi adipisci. Recusandae libero nesciunt eius voluptas.","19","1","32.00","30.00","2","public/uploads/product/pr_1.jpg","2","78451957","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("64","Similique laboriosam id aut facere.","similique-laboriosam-id-aut-facere.","Eius eos inventore aliquid. Quia ratione et est et incidunt. Expedita a vitae quibusdam ex cum culpa consectetur.","16","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Facere autem quo rerum cupiditate voluptas necessitatibus. Labore inventore iure qui ex et amet. Delectus dolorem quo veritatis non id nihil culpa. Modi porro nihil provident modi autem recusandae.","19","20","33.00","31.00","2","public/uploads/product/pr_1.jpg","3","09436695","8","8","8","8","1","2020-07-12 21:37:06","2020-07-12 21:37:06");
INSERT INTO products VALUES("65","Soluta voluptas at laboriosam illum adipisci et eos.","soluta-voluptas-at-laboriosam-illum-adipisci-et-eos.","Qui voluptatibus amet in incidunt enim ipsum. Fugiat sit itaque cupiditate placeat molestiae dicta. Temporibus ex exercitationem laudantium molestias nihil quasi qui non.","17","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Maxime ullam repellendus omnis. Reprehenderit dignissimos magni cum vitae est quam sit.","19","15","34.00","32.00","2","public/uploads/product/pr_1.jpg","2","81644674","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("66","Consequatur enim a mollitia qui itaque.","consequatur-enim-a-mollitia-qui-itaque.","Consequatur aliquid saepe qui dolore. Aut necessitatibus quo et sint vel dolorum.","18","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Odit soluta suscipit et dicta dolores officia. Aut non quam nam et. Beatae doloremque quia nemo id minima.","19","1","35.00","33.00","2","public/uploads/product/pr_1.jpg","1","57819198","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("67","Explicabo dolorem voluptas ipsa.","explicabo-dolorem-voluptas-ipsa.","Illo eum voluptas aut quasi voluptate ea facere distinctio. Possimus voluptates in aut commodi non culpa. Sed repudiandae ut qui cum itaque reiciendis voluptatibus.","19","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptas et dicta soluta assumenda facere corporis. Consequuntur dolor dolores recusandae et. Perferendis eum repellendus nihil possimus tempore deleniti aut.","19","18","36.00","34.00","2","public/uploads/product/pr_1.jpg","3","54615281","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("68","Dicta qui occaecati impedit necessitatibus excepturi ea ipsum.","dicta-qui-occaecati-impedit-necessitatibus-excepturi-ea-ipsum.","Ratione dolor reiciendis eligendi totam voluptatem. Aut quos a et. Et ex repellendus praesentium dolor odio. Officia consequatur aliquid repellat et eaque et molestias.","20","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Perspiciatis fugit officiis debitis. Explicabo autem itaque porro cumque necessitatibus voluptas laborum illum. Dicta assumenda voluptas incidunt earum. Omnis autem enim et dolores dolor eos.","19","9","37.00","35.00","2","public/uploads/product/pr_1.jpg","3","87635072","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("69","Dolorem itaque harum ab doloribus.","dolorem-itaque-harum-ab-doloribus.","Accusantium omnis sint rerum ipsum. Quae necessitatibus placeat minima dolorem sunt. Et aliquid et fugit dolor optio totam.","21","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Minus molestiae voluptates excepturi qui. Est hic excepturi aspernatur dolor omnis. Nihil distinctio saepe nihil aliquam ipsam molestiae numquam.","19","9","38.00","36.00","2","public/uploads/product/pr_1.jpg","2","82674397","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("70","Est vel distinctio minus esse quia.","est-vel-distinctio-minus-esse-quia.","Omnis molestiae et assumenda qui nulla dolor. Porro corrupti in nam dolore adipisci vel dolore. Autem vitae at voluptatem rerum id. Ut sapiente et dicta enim quidem veritatis possimus.","22","13","2020-07-12 00:00:00","2020-08-12 00:00:00","Impedit quisquam et aut modi. Qui accusamus non suscipit explicabo. Aut porro incidunt id adipisci in.","19","13","39.00","37.00","2","public/uploads/product/pr_1.jpg","3","63580242","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("71","Itaque et quia quis placeat nihil.","itaque-et-quia-quis-placeat-nihil.","Labore blanditiis consequuntur excepturi molestias aut eos et molestiae. Rerum ut soluta eaque quia. Molestiae eaque dolorum nisi laborum.","23","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Ducimus cum necessitatibus et est non molestiae quia minima. Tempora optio earum eligendi et. Ducimus consectetur architecto quia numquam perspiciatis est praesentium.","19","7","40.00","38.00","2","public/uploads/product/pr_1.jpg","3","27532355","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("72","Eos qui et itaque harum.","eos-qui-et-itaque-harum.","Aut praesentium vitae quis quam. Aut laborum aspernatur et autem est. In provident id qui ipsam doloremque. Quia dolores quia nostrum rerum excepturi.","24","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Rerum omnis sit sit velit officia. Iusto vel iusto consectetur quo. Possimus et et velit veniam. Eos dolor laudantium natus harum. Qui voluptas occaecati occaecati ut nesciunt.","19","2","41.00","39.00","2","public/uploads/product/pr_1.jpg","1","01566819","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("73","Rerum quod iusto et numquam hic et officiis.","rerum-quod-iusto-et-numquam-hic-et-officiis.","Et qui veritatis error reprehenderit consequatur aspernatur iusto. Sequi tempora qui delectus. Rerum aspernatur totam et dolor.","25","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Quam deserunt qui possimus ducimus magnam velit libero. Est magnam nihil mollitia ab. Ipsum mollitia in quod molestiae. Reiciendis est laudantium aspernatur minus magnam.","19","10","42.00","40.00","2","public/uploads/product/pr_1.jpg","3","86280556","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("74","Sunt facilis quibusdam saepe ipsa aliquid voluptatem deserunt.","sunt-facilis-quibusdam-saepe-ipsa-aliquid-voluptatem-deserunt.","Nostrum perferendis sed est et tempore consequatur accusamus. Consequuntur accusantium qui sint omnis ut autem ipsam.","26","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Eos sed qui beatae deleniti quam atque. Explicabo dolor nam numquam qui non rerum cumque. Libero omnis sit officia nesciunt porro.","19","18","43.00","41.00","2","public/uploads/product/pr_1.jpg","3","53235831","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("75","Nihil ea inventore officiis qui minima.","nihil-ea-inventore-officiis-qui-minima.","Ut est molestiae eius eum. Eum id sunt qui ex voluptatibus sit mollitia suscipit. Vitae quis vel aut dolores ratione saepe.","27","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Facilis assumenda a eligendi vel. Hic voluptates voluptas molestiae sint. Nesciunt non molestiae excepturi.","19","4","44.00","42.00","2","public/uploads/product/pr_1.jpg","1","01915440","8","8","8","8","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("76","Dolores delectus quo esse nulla hic qui.","dolores-delectus-quo-esse-nulla-hic-qui.","Aut quia ratione aliquid. Facere eos consequuntur quia atque corrupti qui. Excepturi libero accusamus recusandae ipsum iste. Enim fugit est natus recusandae nisi.","3","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Ut maiores mollitia voluptates laboriosam est. Expedita hic eos cumque consequatur. Facere inventore exercitationem qui ullam. Blanditiis ab quasi accusantium molestiae aut est.","19","12","20.00","18.00","2","public/uploads/product/pr_1.jpg","1","41842119","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("77","Vitae illo vitae qui necessitatibus et iure consequatur.","vitae-illo-vitae-qui-necessitatibus-et-iure-consequatur.","Vel tempore architecto optio quia blanditiis velit. Voluptatum veritatis iusto sit earum dolorem eos. Incidunt expedita vitae aut temporibus animi hic qui.","4","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Nulla sunt blanditiis cum nemo. Quidem velit dignissimos alias reprehenderit delectus. Rerum vitae aut exercitationem in aut.","19","8","21.00","19.00","2","public/uploads/product/pr_1.jpg","2","16936522","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("78","Doloribus nihil aliquid et qui necessitatibus est architecto et.","doloribus-nihil-aliquid-et-qui-necessitatibus-est-architecto-et.","Dolores dolor quia dolore sit rerum earum et ea. Eos qui doloribus sed facere nisi perspiciatis placeat qui. Reprehenderit earum dolores iste amet voluptatem.","5","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptate dolorum dicta explicabo debitis porro autem. Facilis aspernatur alias hic. Et delectus totam iusto. Dolores unde omnis tenetur voluptatem tempora eaque magnam.","19","18","22.00","20.00","2","public/uploads/product/pr_1.jpg","2","13474966","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("79","Explicabo quo ut quam odio dolore.","explicabo-quo-ut-quam-odio-dolore.","Vel dolores et officia ut voluptatibus et. Nisi blanditiis ut nulla consequuntur. Qui eaque est quidem ea ut molestiae. Quo soluta nisi excepturi autem.","6","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Quaerat aliquam quisquam perspiciatis quo at in nihil. Corrupti alias nulla nesciunt aut occaecati. Et repellendus est molestiae ea architecto.","19","7","23.00","21.00","2","public/uploads/product/pr_1.jpg","3","24228022","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("80","Voluptatem consequuntur quam adipisci recusandae.","voluptatem-consequuntur-quam-adipisci-recusandae.","Adipisci commodi quae sed. Aliquam laborum non dicta non. Cumque alias et et. Eius non ducimus occaecati error qui sed. Eos qui cupiditate eum corrupti neque. Ipsam voluptatem quo animi et.","7","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Explicabo aliquid quia voluptatem harum. Ab aut sapiente quasi totam sit omnis.","19","6","24.00","22.00","2","public/uploads/product/pr_1.jpg","2","52874062","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("81","Eveniet voluptatum laudantium repellendus ex.","eveniet-voluptatum-laudantium-repellendus-ex.","Harum et corporis rerum voluptatibus. Qui ducimus repellendus nemo quia iusto doloremque quam. Aut amet amet sit doloremque doloremque.","8","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Et culpa beatae dignissimos vitae. Pariatur voluptatem natus architecto ut voluptas. Dolore similique quia harum minima incidunt saepe. Pariatur modi eaque occaecati a.","19","19","25.00","23.00","2","public/uploads/product/pr_1.jpg","3","87168792","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("82","Sint eaque aut laudantium fugiat.","sint-eaque-aut-laudantium-fugiat.","Ea blanditiis minus blanditiis rerum. Laudantium dicta rem ut sunt sint. Ex vel quae doloremque quasi laboriosam cumque.","9","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Nobis sit error rem possimus natus. Aut sit voluptas dolore nihil dicta. Corporis exercitationem aliquid voluptas quibusdam nam.","19","20","26.00","24.00","2","public/uploads/product/pr_1.jpg","3","27893296","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("83","Est tempore fuga quod at dolor vel mollitia.","est-tempore-fuga-quod-at-dolor-vel-mollitia.","Necessitatibus quae sed dolore reiciendis officiis id. Molestias aut in sunt ea neque vitae. Veniam tenetur eaque dolor consequatur architecto ut totam.","10","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Eius ullam consequuntur numquam sit voluptas eos ut. Iusto perferendis dolore vel rerum saepe. In ut voluptatem quia et et laboriosam totam.","19","5","27.00","25.00","2","public/uploads/product/pr_1.jpg","2","22617996","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("84","Voluptatem ratione quas sit.","voluptatem-ratione-quas-sit.","Voluptatibus unde nostrum labore recusandae voluptatem velit et. Ullam laborum sint et nemo omnis tenetur aut accusamus.","11","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Veritatis qui voluptatibus magnam laborum possimus occaecati maiores iure. Laudantium quam dolor aliquam est voluptas ea. Est minima quos sit. Eius ut at illum.","19","1","28.00","26.00","2","public/uploads/product/pr_1.jpg","1","59209096","7","7","7","7","1","2020-07-12 21:37:07","2020-07-12 21:37:07");
INSERT INTO products VALUES("85","Voluptate ut aut perferendis numquam.","voluptate-ut-aut-perferendis-numquam.","Sed eius omnis enim tempora omnis quis nihil sed. Iusto qui quod voluptatem placeat provident quia. Ut dolorem eum ut provident voluptatem. Cupiditate ratione voluptate eos.","12","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Dolores maxime modi et incidunt praesentium ea ullam. Nobis in aut corporis voluptas veritatis. Quo ullam ullam earum sint eum dolor odio. Et veritatis perspiciatis soluta.","19","11","29.00","27.00","2","public/uploads/product/pr_1.jpg","1","55577243","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("86","Qui aliquid itaque maiores nam.","qui-aliquid-itaque-maiores-nam.","Ipsum eum ullam temporibus id quia ratione rerum pariatur. Sed unde minus atque praesentium. Aut nulla odit reprehenderit facilis. Est delectus sed saepe voluptas labore saepe.","13","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Alias ipsa perspiciatis corporis maxime sit eius. Et sed sed sapiente qui et beatae autem. Ducimus quaerat exercitationem iure vel et quod. Eligendi reprehenderit consequatur delectus rerum et qui.","19","12","30.00","28.00","2","public/uploads/product/pr_1.jpg","3","71272177","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("87","Est ipsa ea voluptatem rerum aut.","est-ipsa-ea-voluptatem-rerum-aut.","Sit qui aliquid molestiae est ullam recusandae. Perferendis sed et soluta sed et. Saepe earum doloribus minus modi eum qui. Eos sit iste repellat placeat perspiciatis sint.","14","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Repellendus veritatis ut voluptas eligendi est adipisci sint. Quia cum non aperiam exercitationem dolor neque nemo. Est accusantium explicabo eveniet laudantium quo.","19","11","31.00","29.00","2","public/uploads/product/pr_1.jpg","2","59802358","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("88","Perferendis porro nihil et fugiat consequatur maxime.","perferendis-porro-nihil-et-fugiat-consequatur-maxime.","Enim omnis sint saepe animi exercitationem voluptatem esse. Quasi ut incidunt sed. Voluptatum minima dolorem maiores magnam quas. Mollitia enim odio qui ut voluptatibus ipsum est.","15","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Et molestiae aperiam rem eum. Voluptatem illum odit quia impedit culpa fugiat possimus inventore. Delectus laboriosam alias odit provident.","19","9","32.00","30.00","2","public/uploads/product/pr_1.jpg","1","54829343","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("89","Quidem vitae deserunt non et sed.","quidem-vitae-deserunt-non-et-sed.","Quam ducimus illum dolor eum. Eligendi est doloribus consequatur natus vitae inventore voluptas impedit.","16","4","2020-07-12 00:00:00","2020-08-12 00:00:00","A ut id sed et veritatis et delectus totam. Quae facere id veniam nemo delectus consequatur non. At consequatur ducimus occaecati voluptatem.","19","4","33.00","31.00","2","public/uploads/product/pr_1.jpg","2","24913485","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("90","Quis iure ut illo corrupti et voluptatum debitis ea.","quis-iure-ut-illo-corrupti-et-voluptatum-debitis-ea.","Sed nihil eum asperiores eius delectus adipisci. Rerum accusantium odio eaque vero nesciunt quas.","17","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Et provident odit molestiae quidem eos. Sit molestias aut sit dolor. Molestiae perspiciatis consequatur modi veniam voluptas qui. Architecto quas dolores modi aut enim incidunt sed aut.","19","14","34.00","32.00","2","public/uploads/product/pr_1.jpg","2","77828132","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("91","Praesentium sit maiores repellat molestiae unde inventore non et.","praesentium-sit-maiores-repellat-molestiae-unde-inventore-non-et.","Omnis eos nemo odio nobis cumque. Velit possimus ipsa et. Ut unde asperiores velit a nemo id alias. Occaecati modi architecto nostrum fugiat quis reiciendis tempora consequatur.","18","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Quam laborum placeat voluptate et culpa vel dolore. Error voluptates sit at dolorem. Debitis expedita consequatur id. Rerum rem voluptatem labore delectus.","19","10","35.00","33.00","2","public/uploads/product/pr_1.jpg","2","44026622","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("92","Enim consectetur quidem molestias fuga magnam facilis error.","enim-consectetur-quidem-molestias-fuga-magnam-facilis-error.","Voluptatum pariatur voluptatem et veniam pariatur officiis porro odio. Repellendus ut vel velit sequi. Minima deleniti quam dolore voluptatum aspernatur quo architecto rem.","19","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Accusamus modi et aperiam nemo ea. Maiores mollitia facilis quasi sint. Saepe voluptas et nihil sequi. Dolores sit eos consequuntur ducimus optio aut nesciunt.","19","7","36.00","34.00","2","public/uploads/product/pr_1.jpg","2","46825971","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("93","Sed error omnis perferendis consequuntur quis omnis.","sed-error-omnis-perferendis-consequuntur-quis-omnis.","Sequi eos non praesentium delectus ut aliquid. Sed veniam ut maiores. Mollitia vero ipsa aliquam aut et ipsa eveniet ea. Sed accusantium et debitis voluptatem occaecati eos ad consequatur.","20","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Est consequatur voluptate aut laboriosam similique odit illum. In beatae rerum velit excepturi. Officiis nisi aut quia consequuntur animi placeat et iusto.","19","7","37.00","35.00","2","public/uploads/product/pr_1.jpg","2","65492796","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("94","Quis deleniti iure voluptatibus voluptas illo officiis et.","quis-deleniti-iure-voluptatibus-voluptas-illo-officiis-et.","Minima culpa cupiditate soluta accusantium similique assumenda dolores quis. Incidunt facere dolor quis ut magnam. Asperiores eum nesciunt alias laborum id.","21","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Veritatis commodi expedita veniam maiores quia. Dolorum aut consectetur velit. Ex repellat dolores quia libero eveniet voluptate consectetur.","19","12","38.00","36.00","2","public/uploads/product/pr_1.jpg","3","32078718","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("95","Dignissimos adipisci at assumenda neque officia.","dignissimos-adipisci-at-assumenda-neque-officia.","Quidem et esse adipisci soluta ut. Iusto expedita et ducimus accusantium quibusdam. Voluptas est sed quos officiis id sunt. Sint excepturi in qui enim.","22","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Earum vero fuga cumque voluptatem necessitatibus porro sint. Consequuntur non quia recusandae culpa porro. Ex eos sapiente vitae sit. Reprehenderit nemo repellat ab quam odit.","19","7","39.00","37.00","2","public/uploads/product/pr_1.jpg","3","48613361","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("96","Ab praesentium quidem reiciendis.","ab-praesentium-quidem-reiciendis.","Deleniti hic occaecati maiores. Facilis occaecati autem a cumque pariatur mollitia est. At nisi assumenda dolorem. Amet sit eos perspiciatis possimus tempore autem.","23","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Aspernatur est aut vero. Enim vero non adipisci suscipit consequatur repellendus ad. Non aperiam officia quae vel. Libero eaque voluptatem quaerat quaerat illo.","19","7","40.00","38.00","2","public/uploads/product/pr_1.jpg","3","30404168","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("97","Nisi quos labore consequatur ducimus.","nisi-quos-labore-consequatur-ducimus.","Autem sint odit quis et aliquid ducimus quos. Harum ipsam quia voluptate aperiam. Tempore voluptas impedit recusandae aperiam laborum. Ut fugit ex fugiat magni molestias et occaecati omnis.","24","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Et numquam sint consequuntur ut. Voluptatem aspernatur eius veniam incidunt. Debitis architecto et veritatis eveniet provident voluptate expedita.","19","6","41.00","39.00","2","public/uploads/product/pr_1.jpg","2","15036339","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("98","Accusamus id perferendis molestiae hic exercitationem.","accusamus-id-perferendis-molestiae-hic-exercitationem.","Eos consequatur nostrum est harum recusandae voluptatem. In sunt aut et nobis placeat odit est. Quam vitae odio maiores eius labore dolor similique.","25","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Et et quis ipsam fugit corporis quasi voluptates. Minima velit quibusdam ut sed voluptate hic. Numquam id impedit neque ullam voluptate.","19","20","42.00","40.00","2","public/uploads/product/pr_1.jpg","2","76610899","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("99","Dolor laboriosam fugit ipsum.","dolor-laboriosam-fugit-ipsum.","Cum natus quia sit est est. Ut veniam saepe magnam. Et ut delectus explicabo laboriosam error. Ducimus nesciunt tempore doloribus consequatur.","26","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Fugiat recusandae sequi in sed. Est aperiam odio aperiam sed vero. Nesciunt saepe et corporis earum.","19","11","43.00","41.00","2","public/uploads/product/pr_1.jpg","2","65940969","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("100","Placeat ut quod vitae eos debitis eaque.","placeat-ut-quod-vitae-eos-debitis-eaque.","Dolor earum quia dolores quas hic numquam. Est nesciunt id cupiditate numquam culpa totam enim. Facere expedita voluptatem sunt molestias eum asperiores cum.","27","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Occaecati qui esse veritatis quis blanditiis. Nihil quia dolores impedit quisquam et aliquam. Et dolorem consequatur et cupiditate.","19","15","44.00","42.00","2","public/uploads/product/pr_1.jpg","2","47175303","7","7","7","7","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("101","Non quasi sit atque voluptatem a in illum.","non-quasi-sit-atque-voluptatem-a-in-illum.","Iure quo est consequatur ut soluta repellat. Nesciunt error et beatae impedit nam dolorem maxime natus. At aspernatur adipisci velit nostrum.","3","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Magnam dolorem alias dolorum aut sequi. Modi doloremque et deserunt adipisci nostrum repudiandae cum. Quia officiis consequatur culpa corrupti incidunt voluptatem provident.","19","10","20.00","18.00","2","public/uploads/product/pr_1.jpg","1","72389218","6","6","6","6","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("102","Sint aut placeat et a et.","sint-aut-placeat-et-a-et.","Blanditiis et assumenda dolore quibusdam. Est aut similique nostrum dicta atque voluptas ut. Soluta quia nostrum minima a nihil ut.","4","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Unde ipsum facere corporis corrupti accusamus omnis autem ex. Et voluptate aspernatur quod omnis rerum quasi. Expedita voluptatibus non dolor. Consequatur pariatur quis dolor omnis quo sequi neque.","19","17","21.00","19.00","2","public/uploads/product/pr_1.jpg","3","46597168","6","6","6","6","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("103","Placeat cum et aliquam consequatur ipsam minus sed velit.","placeat-cum-et-aliquam-consequatur-ipsam-minus-sed-velit.","Autem id et dignissimos itaque natus consequatur. Vero aut rerum soluta sit voluptas adipisci explicabo. Ipsam quas animi consequatur et amet vitae. Itaque sapiente repellat vel sit.","5","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Qui ut ab nihil ipsam voluptatum dicta. Eum fugiat quos voluptas. Eum id consequatur corporis magnam odit consectetur. Ullam optio cumque veritatis voluptatum voluptatum.","19","3","22.00","20.00","2","public/uploads/product/pr_1.jpg","1","31798624","6","6","6","6","1","2020-07-12 21:37:08","2020-07-12 21:37:08");
INSERT INTO products VALUES("104","Et quia voluptatibus aut quia.","et-quia-voluptatibus-aut-quia.","Iste labore atque numquam officia consectetur non molestiae deleniti. Quia ex incidunt illo quam quo et asperiores. Enim nulla qui rerum libero iure eaque amet nobis.","6","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Vel sunt consectetur quis et. Velit hic illo iusto odit. Vitae asperiores maiores non sunt. Culpa quis et modi placeat. Consequuntur et non optio voluptas exercitationem omnis perspiciatis dolorem.","19","5","23.00","21.00","2","public/uploads/product/pr_1.jpg","2","29351060","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("105","Sit iste sunt suscipit maxime atque.","sit-iste-sunt-suscipit-maxime-atque.","Accusamus autem minus eum ullam voluptas quasi ex. Accusamus dignissimos magni quis possimus accusantium. Quod rerum ipsam et ipsa. Voluptatem consequatur et dolorem blanditiis.","7","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Laborum quae quidem esse aliquid suscipit. In facere temporibus voluptatem earum eligendi quos aut aut.","19","6","24.00","22.00","2","public/uploads/product/pr_1.jpg","3","14068348","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("106","Dolorem sunt consequatur in optio.","dolorem-sunt-consequatur-in-optio.","Ullam dolor dolor voluptatem voluptatem similique. Facere dolores itaque odio. Et eligendi quia sint et.","8","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Reiciendis totam aut quidem et. Quo ut minima placeat quos rerum adipisci velit. Pariatur hic quam quod fugit qui perferendis. Et quia hic molestiae quasi.","19","16","25.00","23.00","2","public/uploads/product/pr_1.jpg","3","60468413","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("107","Doloremque quas voluptatum eaque illum animi.","doloremque-quas-voluptatum-eaque-illum-animi.","Ullam consequatur eaque eaque et. Accusamus sit repudiandae aliquam. A fugiat numquam eos minima distinctio.","9","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Sed veritatis accusantium in quis mollitia aspernatur aspernatur. Atque ducimus in eligendi. Repellendus ad veritatis qui modi veniam. Voluptatem minima maiores iure ea provident delectus.","19","10","26.00","24.00","2","public/uploads/product/pr_1.jpg","1","08571540","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("108","Nihil et quaerat ut laborum rerum.","nihil-et-quaerat-ut-laborum-rerum.","Nulla provident totam a repudiandae velit ut tempore. Est hic et accusantium praesentium deleniti consequatur. Itaque consequuntur aut voluptas et ea necessitatibus enim porro.","10","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Delectus rerum nesciunt ratione tempore et. Rerum voluptates nihil quis assumenda. Ut cupiditate molestiae quisquam labore magnam aut.","19","15","27.00","25.00","2","public/uploads/product/pr_1.jpg","3","06593957","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("109","Minima blanditiis inventore expedita nostrum temporibus ea aut excepturi.","minima-blanditiis-inventore-expedita-nostrum-temporibus-ea-aut-excepturi.","Laboriosam aut et est aliquam. Voluptas labore amet praesentium esse aspernatur numquam nostrum. Minus ea eos quia voluptates adipisci adipisci libero.","11","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Ullam dolor necessitatibus deserunt et harum ipsa. Iure nostrum rerum incidunt et iste nesciunt. Expedita neque aut iure voluptas. Eos pariatur et animi et.","19","20","28.00","26.00","2","public/uploads/product/pr_1.jpg","3","77544292","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("110","Quae voluptates rerum blanditiis blanditiis.","quae-voluptates-rerum-blanditiis-blanditiis.","Dignissimos qui at alias quis eos deleniti nihil. Et assumenda nesciunt consequatur fugiat. Numquam animi dicta hic. Dolorem rerum impedit eum voluptatem.","12","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Eveniet qui voluptatibus expedita corporis excepturi suscipit omnis. Hic qui dolorem inventore aut. Ea vitae placeat rerum et. Cum ad corrupti corrupti incidunt corporis quas.","19","5","29.00","27.00","2","public/uploads/product/pr_1.jpg","3","07614422","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("111","Ut perspiciatis velit eum voluptas ad sit accusamus.","ut-perspiciatis-velit-eum-voluptas-ad-sit-accusamus.","Vel laboriosam minus ratione beatae. Vel illo eius alias expedita quibusdam totam qui. Dicta dolor ipsa iusto.","13","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Aliquid aut explicabo iste rerum consequatur. Molestiae at qui tempora ea neque natus.","19","20","30.00","28.00","2","public/uploads/product/pr_1.jpg","2","43916955","6","6","6","6","1","2020-07-12 21:37:09","2020-07-12 21:37:09");
INSERT INTO products VALUES("112","Ea animi inventore minus dicta et soluta.","ea-animi-inventore-minus-dicta-et-soluta.","Aut tempora laboriosam doloribus nulla dignissimos illum. Error temporibus in et ullam neque nulla sint. Sunt nostrum impedit labore nihil sapiente illum. Laborum quo facere molestiae et.","14","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Nostrum quos dolores at sint et. Libero ad assumenda aut iste culpa nesciunt quia. Facere iste et voluptatem tenetur commodi iste perspiciatis quaerat.","19","17","31.00","29.00","2","public/uploads/product/pr_1.jpg","2","78308916","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("113","Sit et reiciendis vero magni consequuntur alias at.","sit-et-reiciendis-vero-magni-consequuntur-alias-at.","Ea totam impedit numquam enim inventore id est non. Non blanditiis veniam non et. Voluptatibus dolor hic aut tempora.","15","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Et temporibus autem et inventore sunt. Aut et consequatur sapiente eos omnis id et maiores.","19","15","32.00","30.00","2","public/uploads/product/pr_1.jpg","3","18389951","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("114","Nemo aut accusantium cum et cupiditate quaerat placeat.","nemo-aut-accusantium-cum-et-cupiditate-quaerat-placeat.","Rem incidunt rem esse maiores aut est quidem. Aut id omnis voluptatem et. Ad rerum sit fugit.","16","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Vel qui aut commodi velit excepturi velit. Suscipit dolor quo sed earum. Dolorem et ratione deleniti officiis temporibus mollitia nihil. Ab saepe quaerat qui laboriosam.","19","16","33.00","31.00","2","public/uploads/product/pr_1.jpg","1","20897888","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("115","Est dolores qui iste provident.","est-dolores-qui-iste-provident.","Consequatur eaque vel numquam. Expedita impedit totam et ipsum. Ipsum voluptas nisi aut ut dolor consequatur et. Nam autem velit architecto libero pariatur.","17","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Esse possimus et iusto ipsa adipisci deserunt qui. Rerum molestiae occaecati enim non qui rem. Inventore beatae assumenda maiores soluta provident fugit magni.","19","20","34.00","32.00","2","public/uploads/product/pr_1.jpg","1","94151381","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("116","Incidunt aspernatur et ut perspiciatis.","incidunt-aspernatur-et-ut-perspiciatis.","Doloribus quaerat sed qui nihil rerum. Possimus dolore sed qui tempora nulla. Voluptas dolorum molestiae sit et. Nemo perferendis quis deserunt ipsam eos eum voluptas.","18","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Qui temporibus non facere. Itaque minima aspernatur neque minus vitae quos velit. Quas et incidunt cum ut aut voluptates quisquam. Soluta omnis aut perferendis rerum et enim aliquid.","19","1","35.00","33.00","2","public/uploads/product/pr_1.jpg","3","85873551","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("117","Eaque voluptate libero et illo explicabo recusandae quo delectus.","eaque-voluptate-libero-et-illo-explicabo-recusandae-quo-delectus.","Quis itaque officiis libero corporis excepturi quibusdam sed. In voluptatibus doloremque qui sequi porro. Dolorem placeat in asperiores enim sequi dolor et. Quae assumenda eum maiores qui et nemo.","19","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Tempore quae mollitia rerum illo sed. Veritatis enim dolorem facere veniam. Non ipsa totam tempore incidunt esse aut cumque.","19","16","36.00","34.00","2","public/uploads/product/pr_1.jpg","1","25014136","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("118","Id nam hic vel aut voluptas dolor sit.","id-nam-hic-vel-aut-voluptas-dolor-sit.","Eius voluptatem quo voluptatem expedita possimus. Quam autem ea ut ratione nisi numquam.","20","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Et a voluptatem sed omnis sit aut laboriosam saepe. Autem labore sed nisi eum.","19","4","37.00","35.00","2","public/uploads/product/pr_1.jpg","3","38060564","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("119","Autem ipsa recusandae omnis at temporibus a quibusdam minus.","autem-ipsa-recusandae-omnis-at-temporibus-a-quibusdam-minus.","Mollitia ut adipisci ex quae sit. Alias dolores suscipit doloremque quia modi.","21","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Dignissimos quae aut sunt nam aliquid aut. Laboriosam voluptas enim optio quia at voluptas tempore. Quasi non voluptas in amet. Ad distinctio ut aut eveniet corporis est quasi sit.","19","7","38.00","36.00","2","public/uploads/product/pr_1.jpg","3","90759574","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("120","Reprehenderit consequatur impedit omnis voluptatem doloribus debitis provident.","reprehenderit-consequatur-impedit-omnis-voluptatem-doloribus-debitis-provident.","Repudiandae et assumenda et et ut earum. Voluptatem totam nemo et et debitis. Et aut nemo repellendus cumque ex. A odio nihil id omnis.","22","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Aspernatur voluptas est suscipit error qui consequatur hic. Ea atque esse non reiciendis. Eaque ea eos enim.","19","1","39.00","37.00","2","public/uploads/product/pr_1.jpg","3","47727502","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("121","Dolorem nemo nisi quasi voluptas voluptate.","dolorem-nemo-nisi-quasi-voluptas-voluptate.","Dolores odio delectus cum. Iure id atque placeat ullam et. Maiores veniam non cum qui expedita vel asperiores. Est odio aut reprehenderit. Similique autem qui quisquam autem et quo.","23","13","2020-07-12 00:00:00","2020-08-12 00:00:00","Et veniam est voluptatem et nemo sit expedita. Repellendus cumque dicta tenetur rerum quis quasi. Minus reprehenderit totam laboriosam.","19","13","40.00","38.00","2","public/uploads/product/pr_1.jpg","2","77672551","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("122","Et esse sed rem nemo similique nam tempora.","et-esse-sed-rem-nemo-similique-nam-tempora.","Beatae repudiandae est accusamus harum iure. Rerum doloribus voluptas at velit corporis. Tempora sed voluptas delectus animi et. Temporibus error assumenda est dolorum commodi.","24","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Natus consequatur et non ullam nam non. Explicabo aspernatur nihil ipsam maxime vero odit quasi non. Quia sit autem magni explicabo dolores tempora ut.","19","9","41.00","39.00","2","public/uploads/product/pr_1.jpg","1","04596134","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("123","Aut dicta et consequuntur dolorem.","aut-dicta-et-consequuntur-dolorem.","Sed quibusdam sed accusamus vel. Saepe nemo ratione dignissimos ratione inventore tenetur perspiciatis. Commodi quidem ut dolores repellendus iste.","25","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Asperiores ut dolorem et dolor adipisci officiis. Error accusamus sapiente adipisci. Quis voluptatem praesentium ea cupiditate ad. Aliquam et numquam deleniti eveniet perspiciatis harum.","19","10","42.00","40.00","2","public/uploads/product/pr_1.jpg","3","40874166","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("124","Quia consectetur sit molestiae doloremque libero tenetur.","quia-consectetur-sit-molestiae-doloremque-libero-tenetur.","Expedita sed sint quasi aut impedit provident aut. Perspiciatis porro et tenetur sed dolorem autem aut. Illum quod excepturi officia velit.","26","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Cupiditate pariatur nam architecto laborum. Iusto ab consequatur aut numquam sit. Voluptates tempore est quaerat in nulla voluptas. Voluptatem qui minus in nihil ipsum vero id.","19","17","43.00","41.00","2","public/uploads/product/pr_1.jpg","1","87745900","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("125","Sed accusamus odit quas perspiciatis impedit provident qui.","sed-accusamus-odit-quas-perspiciatis-impedit-provident-qui.","Commodi nemo quae dolores doloribus. Maiores nihil dolores et et officiis sequi autem. Repudiandae magnam est possimus est at sed sed explicabo. At est corrupti saepe quo sapiente saepe qui.","27","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis sed aliquam perferendis minus neque odit. Dolorem beatae officiis et. Non veritatis aut voluptatem expedita veniam facere molestias.","19","10","44.00","42.00","2","public/uploads/product/pr_1.jpg","2","97111337","6","6","6","6","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("126","Assumenda qui et eligendi sapiente perferendis.","assumenda-qui-et-eligendi-sapiente-perferendis.","At asperiores quos architecto qui. Sint harum rerum quam rerum in culpa quis.","3","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Autem nihil sint explicabo quidem ullam ad architecto sed. Rerum et amet est amet quos aut et consequatur. Ratione placeat earum vel sed repellat sit.","19","16","20.00","18.00","2","public/uploads/product/pr_1.jpg","3","46265968","5","5","5","5","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("127","Ipsa velit omnis illum ut.","ipsa-velit-omnis-illum-ut.","Voluptate soluta a repellat ab reiciendis culpa. Neque natus molestiae aspernatur qui dolores et excepturi voluptas. Sed adipisci et ab enim quae voluptatem. Omnis repellat asperiores debitis.","4","8","2020-07-12 00:00:00","2020-08-12 00:00:00","In rem pariatur iure iure. Aliquam et aut eos cupiditate ex debitis. Accusantium autem exercitationem et nostrum impedit sit architecto pariatur. Libero impedit praesentium necessitatibus et maiores.","19","8","21.00","19.00","2","public/uploads/product/pr_1.jpg","2","27180112","5","5","5","5","1","2020-07-12 21:37:10","2020-07-12 21:37:10");
INSERT INTO products VALUES("128","Aut aut optio facilis qui sed dolor facere.","aut-aut-optio-facilis-qui-sed-dolor-facere.","Et aliquam maxime rerum totam laborum. Quo ut eum iste deserunt soluta. Magnam inventore veritatis veritatis nesciunt.","5","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Alias qui consequatur architecto quia omnis porro. Ut eos tempore voluptatem voluptas itaque sit. Est aut nisi ut fugiat. Quo et rem tempore nihil a debitis perferendis.","19","20","22.00","20.00","2","public/uploads/product/pr_1.jpg","2","38834158","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("129","Quae dolorem quas totam tempore et et necessitatibus.","quae-dolorem-quas-totam-tempore-et-et-necessitatibus.","Laboriosam quo eos dolor consequatur qui harum dolorem quo. Sequi rerum sunt aliquam cumque. Nesciunt doloremque eveniet voluptate beatae est.","6","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Cupiditate quis ullam nesciunt in. Nihil aspernatur non blanditiis voluptates omnis. Dolore ipsa deserunt nihil excepturi adipisci.","19","3","23.00","21.00","2","public/uploads/product/pr_1.jpg","1","62709651","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("130","Et omnis asperiores qui et.","et-omnis-asperiores-qui-et.","Laboriosam doloremque totam fuga sed nostrum praesentium dolorum incidunt. Corporis autem eaque vel eos ut quis est. Ab ut laudantium ipsa eligendi. Placeat aut beatae a.","7","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Est a dolorem quia. Ea ut eaque ratione deleniti. Distinctio odio in sit sed velit est ipsa.","19","10","24.00","22.00","2","public/uploads/product/pr_1.jpg","1","70517408","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("131","Illo eaque explicabo eaque molestiae.","illo-eaque-explicabo-eaque-molestiae.","Praesentium iusto aut quos est aliquam natus ut. Quo voluptas enim commodi ea. Ut dolorum totam blanditiis similique esse quam officia. Quas consequatur veniam nulla sed autem enim.","8","15","2020-07-12 00:00:00","2020-08-12 00:00:00","In blanditiis sit animi omnis voluptas perferendis voluptas. Sunt aperiam dolore sed dolorem vitae sint et consequatur. Ut voluptates ea repellendus labore voluptas eius.","19","15","25.00","23.00","2","public/uploads/product/pr_1.jpg","2","54419407","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("132","Omnis distinctio beatae voluptatum quia modi.","omnis-distinctio-beatae-voluptatum-quia-modi.","Aliquam impedit porro consequatur. Dolore voluptas hic nesciunt. Nobis similique assumenda tempora porro sapiente officia. Dolor veritatis beatae aliquam facere voluptatem amet ratione.","9","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Minima id expedita dolor id et. Consectetur nostrum omnis nobis dolorem praesentium consequatur dolores. Voluptatem id rerum distinctio asperiores.","19","11","26.00","24.00","2","public/uploads/product/pr_1.jpg","3","89314166","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("133","Asperiores error porro aliquid ea aut optio.","asperiores-error-porro-aliquid-ea-aut-optio.","Velit quis distinctio voluptatum illo soluta molestias. Voluptatum eius dolores quas fuga dolores magnam doloremque. Itaque sapiente quo aut dolorem quas. Eos iusto laborum perferendis dolores et.","10","19","2020-07-12 00:00:00","2020-08-12 00:00:00","At quod possimus consectetur saepe odit est reiciendis. Sint error expedita accusamus eum. Sed qui eaque sunt eum quaerat nostrum iste. Aut laudantium rerum veritatis blanditiis.","19","19","27.00","25.00","2","public/uploads/product/pr_1.jpg","2","75613013","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("134","Reprehenderit est et aut et.","reprehenderit-est-et-aut-et.","At voluptatibus eum nulla. Pariatur vitae voluptatum ut molestiae consectetur. Dolorem similique ut et sapiente sed illum nam. Quod odit enim qui voluptates perspiciatis exercitationem unde.","11","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Explicabo ad quo dolorem qui reprehenderit corporis. Alias blanditiis omnis perferendis soluta nesciunt aut. Eos omnis perspiciatis nobis atque.","19","6","28.00","26.00","2","public/uploads/product/pr_1.jpg","3","32352627","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("135","Quisquam vel et est.","quisquam-vel-et-est.","Molestiae similique ut omnis harum libero et omnis. Sint animi doloribus accusantium nemo consequatur reprehenderit. Cum culpa ex et dignissimos voluptas.","12","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Est aliquid saepe eum ut. Ratione dolore aut aperiam et. Dolor cupiditate dolores sapiente harum id minima sunt.","19","3","29.00","27.00","2","public/uploads/product/pr_1.jpg","3","06280864","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("136","Eos qui eligendi aperiam velit qui magnam.","eos-qui-eligendi-aperiam-velit-qui-magnam.","Dolor nihil deleniti ea ducimus et perferendis architecto. Delectus qui ea occaecati doloremque itaque dolorem iusto dolore. Nostrum unde rerum animi saepe reprehenderit et.","13","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Aut libero quasi voluptas culpa velit magnam assumenda. Quibusdam itaque sed tempora quo. Aperiam laborum rerum nihil asperiores quod.","19","8","30.00","28.00","2","public/uploads/product/pr_1.jpg","1","89588918","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("137","Officiis est qui doloremque aspernatur tenetur magni.","officiis-est-qui-doloremque-aspernatur-tenetur-magni.","Assumenda atque est assumenda iusto ipsum fuga. Illum quidem earum et sint rem. Libero qui ducimus natus sequi reprehenderit ratione et.","14","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Corporis accusamus repudiandae quis. Doloremque voluptatem qui aliquid dicta aliquid. Quia id optio temporibus voluptatem neque nemo quos. Facere libero voluptatem eum quia modi rerum repellendus.","19","7","31.00","29.00","2","public/uploads/product/pr_1.jpg","3","74194452","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("138","Et modi totam eligendi itaque eligendi.","et-modi-totam-eligendi-itaque-eligendi.","Dolorem non delectus similique id. Perferendis facere voluptatibus sequi eum. Dolores et quaerat est itaque quia pariatur porro. Harum rerum quasi nobis quis atque.","15","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Aliquid qui sint blanditiis blanditiis repellat eos. Doloribus incidunt qui ea quod dolores autem dolore. Voluptates quo sunt possimus cupiditate.","19","1","32.00","30.00","2","public/uploads/product/pr_1.jpg","1","16996151","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("139","Modi et dignissimos dolore.","modi-et-dignissimos-dolore.","Enim nobis porro et consequatur consequatur esse. Ea et dolores corporis atque sed. Expedita dolorum numquam minus sit ut dolore.","16","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Sit minus aliquid et soluta dolores mollitia asperiores. Ipsa debitis illo illum qui odio. Quod aut quia sint rerum molestias accusamus.","19","6","33.00","31.00","2","public/uploads/product/pr_1.jpg","2","53769497","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("140","Assumenda velit nihil cum nesciunt soluta possimus placeat vel.","assumenda-velit-nihil-cum-nesciunt-soluta-possimus-placeat-vel.","Cumque quos exercitationem magnam fugit tenetur. Cum cum quia aliquam inventore dignissimos voluptas. Distinctio odio deleniti odio aut facere nam.","17","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Doloribus rerum est cum aut ut aut. Voluptatem asperiores laboriosam enim. Enim sed repellendus et excepturi.","19","19","34.00","32.00","2","public/uploads/product/pr_1.jpg","1","97013631","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("141","Vel aut aliquam dolor recusandae.","vel-aut-aliquam-dolor-recusandae.","Id est sed eum quam mollitia nulla facere aliquid. Ad sunt rem ea maxime nobis ad.","18","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Modi eos recusandae at fugiat et et. Deserunt sequi ab qui ipsam. Voluptate officia molestias vero aut repudiandae. Sed architecto rerum vel.","19","19","35.00","33.00","2","public/uploads/product/pr_1.jpg","3","54588554","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("142","Sapiente quidem culpa minus beatae ipsam sunt.","sapiente-quidem-culpa-minus-beatae-ipsam-sunt.","Quis qui ullam ipsa. Omnis sunt esse fugiat pariatur dolor assumenda. Aut labore doloribus sed qui.","19","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Non ducimus sequi atque quia omnis nihil ab maxime. Ullam aut sunt quia quae et quisquam distinctio. Laborum rerum numquam excepturi totam dolores.","19","2","36.00","34.00","2","public/uploads/product/pr_1.jpg","2","22128980","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("143","Officiis nulla et fuga iure.","officiis-nulla-et-fuga-iure.","Reiciendis provident molestias nam deleniti non nostrum. Voluptas sit est et doloribus nemo aut officia minima. Eveniet optio accusamus asperiores ea quis sint.","20","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Laborum atque nihil consequuntur sit et ipsum. Ut aut commodi sed alias nisi culpa. Quam omnis mollitia rerum repellat magni ut corporis et. Itaque laudantium quibusdam tempore odio porro ipsa.","19","2","37.00","35.00","2","public/uploads/product/pr_1.jpg","1","03638446","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("144","Ut quasi in repudiandae deleniti quia.","ut-quasi-in-repudiandae-deleniti-quia.","Voluptate possimus repellat sequi eligendi. Odit sint sint odit. Voluptatem sed magnam aliquam.","21","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Aperiam velit in ut. Quis dolor nulla perferendis esse eos id. Maiores eveniet nihil eveniet.","19","14","38.00","36.00","2","public/uploads/product/pr_1.jpg","3","20868628","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("145","Ab dolores ratione molestias dicta.","ab-dolores-ratione-molestias-dicta.","Sed non repellendus harum voluptas enim aut sint. Sunt ex provident porro. Nostrum voluptates laudantium est saepe.","22","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Expedita tempore cumque debitis. Incidunt voluptas blanditiis numquam officiis optio. Est repellat quia totam ducimus consectetur.","19","12","39.00","37.00","2","public/uploads/product/pr_1.jpg","1","99771874","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("146","Deserunt est quia recusandae voluptate possimus pariatur aliquid.","deserunt-est-quia-recusandae-voluptate-possimus-pariatur-aliquid.","Itaque est ipsam ratione aut. At excepturi at qui tempora consequatur quam. Maiores consectetur saepe assumenda.","23","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Sequi consequatur consectetur saepe repellendus nisi cum. Et eum dolorum cum amet a. Quasi fugit et velit id debitis soluta et. Qui laboriosam adipisci ad labore.","19","9","40.00","38.00","2","public/uploads/product/pr_1.jpg","3","26983547","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("147","Eos quos impedit minima deleniti dolore.","eos-quos-impedit-minima-deleniti-dolore.","Placeat rerum temporibus quaerat autem deleniti vel. Corporis asperiores iste et ut facere officiis. Nulla voluptatibus autem assumenda cumque et. Quam libero unde iste vitae veritatis dicta qui.","24","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Repellat distinctio voluptatem sunt provident quod animi dignissimos. Nesciunt sed quia atque nobis expedita nobis. Voluptas est minus alias adipisci.","19","8","41.00","39.00","2","public/uploads/product/pr_1.jpg","3","46078384","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("148","Officiis autem qui cum quae iure.","officiis-autem-qui-cum-quae-iure.","Non est autem molestiae aut voluptates itaque quos. Qui rerum excepturi quasi et earum. Atque labore et iure earum dignissimos recusandae.","25","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis expedita voluptate harum reiciendis illum. Maiores fuga dolorem sit deserunt et. Est a omnis ut.","19","16","42.00","40.00","2","public/uploads/product/pr_1.jpg","3","95155869","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("149","Similique illo dolorum facere inventore dolorem.","similique-illo-dolorum-facere-inventore-dolorem.","Et fugiat necessitatibus architecto ea ut explicabo ratione aut. Architecto pariatur error dolore quisquam sed non. Sit quis repellat distinctio officia ut praesentium.","26","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Possimus nihil labore eius doloribus hic. Ullam recusandae aut autem animi a eveniet quas. Molestiae autem nihil quae repudiandae dignissimos velit voluptas. Et nisi fugit rerum deleniti est est eum.","19","14","43.00","41.00","2","public/uploads/product/pr_1.jpg","2","16714397","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("150","Omnis vel voluptas et hic sint quia quos.","omnis-vel-voluptas-et-hic-sint-quia-quos.","Nam voluptatem sint voluptate eligendi ipsam. Sed cum omnis recusandae provident facere quaerat. Vel expedita illo expedita reprehenderit. Nesciunt velit sint dolorum quisquam.","27","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Non iusto ea quos soluta eum voluptatem. Repellendus molestias inventore vel dignissimos autem. Non est velit adipisci harum sequi voluptatem consequatur. Esse nostrum omnis qui.","19","17","44.00","42.00","2","public/uploads/product/pr_1.jpg","3","37789794","5","5","5","5","1","2020-07-12 21:37:11","2020-07-12 21:37:11");
INSERT INTO products VALUES("151","Aperiam et alias sequi ab sit doloribus facilis.","aperiam-et-alias-sequi-ab-sit-doloribus-facilis.","Alias voluptate aut quos dolor impedit dolorum eaque. Odio voluptatem repellendus hic perspiciatis. Repellat pariatur voluptas et veritatis. Repudiandae fugit quia nam officiis.","3","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Est voluptatum vel labore quibusdam. Cum et sint molestias molestias. Veniam perferendis ut eligendi odit eaque molestiae. Consequatur aut fuga omnis voluptatem non et.","19","5","20.00","18.00","2","public/uploads/product/pr_1.jpg","1","37400118","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("152","Perferendis autem ad quam rerum velit ut voluptatum quam.","perferendis-autem-ad-quam-rerum-velit-ut-voluptatum-quam.","Adipisci dolores eum non exercitationem. Hic laboriosam excepturi ab cum sunt iste. Vero asperiores quisquam nesciunt. Facere et qui est deleniti.","4","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis aut qui dolor et nihil. Sit sed molestiae asperiores quam perspiciatis enim et. Reiciendis iure itaque repellat et dolorem.","19","12","21.00","19.00","2","public/uploads/product/pr_1.jpg","3","88568423","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("153","Dolores rem rerum ut nam magni praesentium nihil sequi.","dolores-rem-rerum-ut-nam-magni-praesentium-nihil-sequi.","Commodi est praesentium corrupti. Nesciunt dolorum vel ipsa dolore repellat omnis dolor. Molestiae ea delectus maiores voluptas quae sit eum. Eveniet voluptatem et minima ea praesentium quia.","5","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Quis velit nemo recusandae molestias impedit exercitationem reiciendis. Aperiam qui aliquam ut hic. Iusto quas consequuntur ut ipsum. Exercitationem rerum asperiores hic ipsum illum maxime.","19","4","22.00","20.00","2","public/uploads/product/pr_1.jpg","1","00975995","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("154","Fugiat quas rerum quaerat distinctio quisquam omnis voluptatem blanditiis.","fugiat-quas-rerum-quaerat-distinctio-quisquam-omnis-voluptatem-blanditiis.","Et voluptatem minus asperiores harum. Qui consequatur itaque modi ad itaque voluptates. Autem voluptates laboriosam consequatur voluptas culpa quia. Magni omnis magnam reiciendis a aut autem.","6","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Sint eos magni repellat in est laboriosam. Quibusdam saepe consequatur ut itaque dignissimos iure. Tempore vel in quisquam asperiores dolorum numquam.","19","10","23.00","21.00","2","public/uploads/product/pr_1.jpg","2","17593243","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("155","Aut velit cum voluptas porro non ratione quia odio.","aut-velit-cum-voluptas-porro-non-ratione-quia-odio.","Repellat fugiat sed dicta nulla non. Sit repellat quaerat eveniet tempore nobis. Itaque optio quod officiis voluptas et et ab. Doloribus ea quae praesentium id voluptatem aperiam.","7","13","2020-07-12 00:00:00","2020-08-12 00:00:00","Repudiandae quae voluptas in omnis omnis ut nesciunt pariatur. Repudiandae blanditiis a hic temporibus laboriosam cum quia. Ea dignissimos iusto rerum tempora beatae officiis.","19","13","24.00","22.00","2","public/uploads/product/pr_1.jpg","3","05553624","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("156","Quidem labore eaque voluptate laborum.","quidem-labore-eaque-voluptate-laborum.","Omnis et quia sapiente animi sit. Quis corrupti natus ut dicta mollitia. Est reprehenderit ipsam maxime ullam.","8","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Dolores tempore vel sed nesciunt sequi magni. Qui sunt sed amet consequatur. Ut maiores ad eaque et inventore odit non cum.","19","2","25.00","23.00","2","public/uploads/product/pr_1.jpg","3","31194655","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("157","Qui doloribus eos ipsa ea odio.","qui-doloribus-eos-ipsa-ea-odio.","Quia placeat nihil blanditiis itaque enim. Ut ut est earum illum deserunt. Explicabo fugiat minima voluptatum quas ut non velit eos.","9","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Ut placeat provident error neque illo. Et ut voluptas eius sit in alias. Sit nobis facere laborum architecto et qui ea dolorem.","19","6","26.00","24.00","2","public/uploads/product/pr_1.jpg","1","81910397","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("158","Vero nihil quo totam nam dolorem eum.","vero-nihil-quo-totam-nam-dolorem-eum.","Enim corporis vel error dolor soluta magni. Unde perferendis ut ut sed ut. Corporis cupiditate tempora veritatis dolorum accusantium illum a. Aperiam sed consequatur rerum numquam quisquam quasi.","10","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Nesciunt aspernatur eligendi modi quidem quas tempore et et. Atque et optio natus voluptatem saepe ducimus. Nostrum est cupiditate placeat repellendus blanditiis odit blanditiis quasi.","19","9","27.00","25.00","2","public/uploads/product/pr_1.jpg","2","69438301","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("159","Enim et excepturi corporis nesciunt dolorem.","enim-et-excepturi-corporis-nesciunt-dolorem.","Non libero laboriosam necessitatibus dolor dignissimos aut. Qui dolor exercitationem aut voluptas. Quis incidunt ratione necessitatibus similique optio eius.","11","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Sapiente odit assumenda similique aperiam error. Minima nisi molestias commodi non modi. Libero qui nulla quaerat et illum. Tempore eum est voluptates voluptate similique hic.","19","16","28.00","26.00","2","public/uploads/product/pr_1.jpg","1","23967687","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("160","Voluptas assumenda nostrum perferendis ex sint.","voluptas-assumenda-nostrum-perferendis-ex-sint.","Quia suscipit vero nihil doloremque sed. Dignissimos nobis tempora similique et voluptas sit qui similique. Similique et velit nihil sequi omnis facilis omnis.","12","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Illo atque voluptas veniam sint et. Veniam in at id accusamus.","19","16","29.00","27.00","2","public/uploads/product/pr_1.jpg","2","60255693","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("161","Unde fuga placeat neque voluptatibus.","unde-fuga-placeat-neque-voluptatibus.","Et sit sint molestias aliquam dolores dolor atque. Repudiandae fugit aut provident quis id. Consequatur voluptates aut odit ut laborum vero molestiae. Voluptatem iste error quaerat ea labore.","13","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Fuga dolorem et sed soluta nam possimus aut. Deserunt veritatis est alias quibusdam dolorem. Nihil quia necessitatibus veniam non error. Nihil ut facilis quam aut vero.","19","11","30.00","28.00","2","public/uploads/product/pr_1.jpg","2","36172153","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("162","Nostrum est est distinctio unde.","nostrum-est-est-distinctio-unde.","Fugit suscipit qui voluptatem temporibus dolor sint illum. Non vero sint est ut. Nobis expedita vel ea rerum occaecati dolore. Magnam natus veritatis eos eligendi.","14","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Ullam similique aliquam dolore qui neque. Occaecati aut deserunt distinctio qui est non ut cumque. Accusantium exercitationem molestias mollitia ea. Quis cupiditate similique ipsum voluptatibus.","19","5","31.00","29.00","2","public/uploads/product/pr_1.jpg","1","12753765","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("163","Qui consequatur consequatur commodi eius provident ut.","qui-consequatur-consequatur-commodi-eius-provident-ut.","Maxime cumque est numquam nulla enim cum. Nisi voluptatum et id.","15","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Corrupti sed et autem sunt voluptas. Distinctio id quis deleniti dolores earum. Ut doloremque amet id inventore qui doloribus aut. Dolor quia neque quas natus.","19","17","32.00","30.00","2","public/uploads/product/pr_1.jpg","1","39405494","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("164","Illum aut earum mollitia sed dolores ducimus excepturi consequatur.","illum-aut-earum-mollitia-sed-dolores-ducimus-excepturi-consequatur.","Iste aut molestias sint deleniti error. Voluptate est ut et ullam sapiente sed sit. Dolores molestias fuga in ut provident itaque. Quod velit cupiditate voluptatibus eligendi.","16","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Soluta voluptatem alias voluptatibus voluptatibus magni consequatur. Vero atque sunt error voluptas. Temporibus in molestias rem voluptatem eius.","19","11","33.00","31.00","2","public/uploads/product/pr_1.jpg","1","25295382","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("165","Omnis et ipsa error fugit.","omnis-et-ipsa-error-fugit.","Ex sunt voluptatem ea autem eius praesentium. Cum dolor dicta pariatur adipisci. Non ea molestiae ducimus numquam vero sed. Quos omnis laboriosam dolor est repudiandae eos numquam.","17","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Error ut alias officia error iure dignissimos. Modi eos vel vel excepturi harum. Corrupti quam quasi dignissimos est non.","19","8","34.00","32.00","2","public/uploads/product/pr_1.jpg","1","29660995","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("166","Suscipit non recusandae impedit velit id ratione quidem.","suscipit-non-recusandae-impedit-velit-id-ratione-quidem.","Ut est labore veritatis eum aut voluptatum repellat. Et eum numquam quo sint et tempora sunt. Et vitae omnis amet quia et eius nihil non. Perspiciatis totam exercitationem vitae vero.","18","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Et et neque reiciendis dignissimos molestiae aliquid unde. Molestiae quis qui aut nobis qui. Laboriosam vero itaque aut ipsa ducimus vero rerum.","19","11","35.00","33.00","2","public/uploads/product/pr_1.jpg","3","25975833","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("167","Et natus iusto in qui ipsam eum aut.","et-natus-iusto-in-qui-ipsam-eum-aut.","Qui et illo commodi. Modi qui consectetur quas reprehenderit veritatis dolor reiciendis. Rerum incidunt aut laudantium sit molestiae aut est.","19","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Officia voluptatem iure sed. Ut dolorem veritatis id ipsam rerum praesentium modi saepe. Est fuga ut dolores enim qui. Soluta minima aut beatae doloremque dicta aut assumenda.","19","12","36.00","34.00","2","public/uploads/product/pr_1.jpg","3","79192545","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("168","Voluptatibus totam animi iusto qui rem vel voluptatum.","voluptatibus-totam-animi-iusto-qui-rem-vel-voluptatum.","Sed ipsum architecto sed animi atque eius esse. Ut dolor in fugiat dolores facere illum. Vel sunt perferendis iste consectetur.","20","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Excepturi perferendis eligendi illo repudiandae maiores laborum placeat. Consequatur rem voluptas facilis voluptas qui aut. Voluptatibus ratione iste omnis ea nihil.","19","17","37.00","35.00","2","public/uploads/product/pr_1.jpg","2","63322903","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("169","Provident temporibus iste sit eaque reprehenderit.","provident-temporibus-iste-sit-eaque-reprehenderit.","Praesentium qui dolorem odit amet omnis voluptas. Et et iste amet nam. Excepturi corrupti eos enim a aspernatur. Tempore quia ut optio consequatur.","21","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Illum at porro ut. Ut neque nesciunt ut sapiente. Incidunt ut itaque distinctio reiciendis neque. Perferendis et blanditiis aut. Quibusdam est dolores ullam voluptatum magni eveniet sunt.","19","4","38.00","36.00","2","public/uploads/product/pr_1.jpg","1","94530827","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("170","Voluptatum quia dolores mollitia omnis eligendi.","voluptatum-quia-dolores-mollitia-omnis-eligendi.","Suscipit doloribus neque non et vero et. Et fugiat quia architecto. Quibusdam omnis ipsa omnis quis error excepturi non vel. Possimus dicta et tempora cumque et nisi aut cumque.","22","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Quia ut et ad maiores. Molestias maxime quis assumenda. Nobis deleniti voluptatum qui tenetur.","19","5","39.00","37.00","2","public/uploads/product/pr_1.jpg","1","37966447","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("171","Sint ea impedit dolorem.","sint-ea-impedit-dolorem.","Et possimus et deserunt nam. Suscipit sequi soluta quos itaque. Atque ullam commodi provident soluta. Nihil quo dolore doloribus eaque est quidem.","23","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Quasi qui ut et praesentium voluptas cumque. Accusamus et blanditiis eos velit rerum laborum fugit. Aut incidunt ea et est reprehenderit neque.","19","14","40.00","38.00","2","public/uploads/product/pr_1.jpg","3","89951668","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("172","Ducimus enim provident modi consequuntur dolor voluptatem at aut.","ducimus-enim-provident-modi-consequuntur-dolor-voluptatem-at-aut.","Ut repellat quae nam sit quia consequatur. Sed neque quia est consequuntur cupiditate explicabo. Amet ad ipsam doloremque dolores sit culpa.","24","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Consequatur qui asperiores aliquid. Et consequatur suscipit culpa saepe. Iusto est expedita modi inventore officiis. Velit placeat earum ex sed aut non expedita.","19","18","41.00","39.00","2","public/uploads/product/pr_1.jpg","3","07571848","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("173","Impedit maiores harum harum a.","impedit-maiores-harum-harum-a.","Impedit nihil dolorem beatae aut eos. Nemo et quidem ipsum iste nihil eos cupiditate rem.","25","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Rerum odio quia placeat cumque. Pariatur numquam odit voluptatem cupiditate ducimus. Sequi sit dolorum quia ex fuga.","19","16","42.00","40.00","2","public/uploads/product/pr_1.jpg","1","22608161","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("174","Ab ipsa rerum voluptatem culpa exercitationem laboriosam odio.","ab-ipsa-rerum-voluptatem-culpa-exercitationem-laboriosam-odio.","Omnis molestiae quis tempore non libero. Culpa necessitatibus aperiam nemo ut et facilis dolor. Fugiat eos repellendus ea quia.","26","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis et magnam eum aut. Voluptatem eum blanditiis aliquam possimus. Sunt ab sapiente minus accusantium soluta. Quo temporibus maxime asperiores consequatur in sapiente.","19","1","43.00","41.00","2","public/uploads/product/pr_1.jpg","1","68759384","4","4","4","4","1","2020-07-12 21:37:12","2020-07-12 21:37:12");
INSERT INTO products VALUES("175","At aut dolor nam recusandae voluptas.","at-aut-dolor-nam-recusandae-voluptas.","Est delectus et hic sunt quo et. Quos ipsa labore laborum ad et quae. Tempora non modi vel.","27","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Sed facere et possimus consequuntur excepturi minus unde. Molestias occaecati saepe animi repellat. Similique vel minima assumenda deleniti numquam facilis. Non qui aut autem sunt culpa quaerat sunt.","19","1","44.00","42.00","2","public/uploads/product/pr_1.jpg","1","20475918","4","4","4","4","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("176","Nemo expedita odit est velit sapiente exercitationem et.","nemo-expedita-odit-est-velit-sapiente-exercitationem-et.","Qui quia et dolor nesciunt architecto quae. Quae sint cupiditate impedit. Voluptatem dolore aperiam enim est suscipit repudiandae impedit. Facilis esse molestiae et et rerum.","3","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Optio et in est et ipsam. Et molestias aut accusantium. Adipisci sequi quasi at ab magnam facilis. Nihil assumenda est reprehenderit assumenda excepturi sed possimus deleniti.","19","4","20.00","18.00","2","public/uploads/product/pr_1.jpg","3","98283569","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("177","Incidunt quia quam dolorem voluptates veniam.","incidunt-quia-quam-dolorem-voluptates-veniam.","Qui sint vel ipsum omnis sunt. Vel distinctio qui voluptate vel rerum. Aut nam tenetur omnis. Unde aut architecto corporis minus.","4","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Sed rerum dolores perferendis velit qui recusandae et temporibus. Magni iure consequatur sint vero. At enim voluptas pariatur aut.","19","10","21.00","19.00","2","public/uploads/product/pr_1.jpg","3","06529314","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("178","Quae explicabo autem est.","quae-explicabo-autem-est.","Distinctio quis libero exercitationem quis quas. Voluptas inventore nostrum molestiae quasi non. Odit saepe qui perspiciatis et.","5","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Quia labore quis sint voluptatem praesentium consequuntur voluptates. Eius illo et nisi distinctio. Possimus perferendis excepturi sint est eos dolorum quo. Temporibus doloremque nihil et iste.","19","7","22.00","20.00","2","public/uploads/product/pr_1.jpg","1","62752954","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("179","Qui voluptas sapiente deleniti et ut.","qui-voluptas-sapiente-deleniti-et-ut.","Exercitationem expedita nulla ducimus reprehenderit. Distinctio laborum qui repellendus ea maxime.","6","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Et et ratione sint fugiat fuga numquam. At eveniet fuga ea et debitis dolorum explicabo. Quas quia non in odit.","19","2","23.00","21.00","2","public/uploads/product/pr_1.jpg","2","20945862","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("180","Ipsum nisi totam dolores harum dolorem praesentium.","ipsum-nisi-totam-dolores-harum-dolorem-praesentium.","Aut aliquid culpa repellendus quidem. Et facere voluptas eos et. Atque harum eaque qui.","7","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Maiores ut unde delectus vel. Nihil quo eaque ipsum voluptas. Sed id omnis ut cumque possimus autem culpa. Repellat sunt nulla quam laboriosam tempore molestiae.","19","1","24.00","22.00","2","public/uploads/product/pr_1.jpg","2","03559710","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("181","Tenetur unde quidem fuga maiores nisi quasi eos.","tenetur-unde-quidem-fuga-maiores-nisi-quasi-eos.","Laudantium eum doloremque ex cupiditate ab et quisquam. Eos inventore consequatur cumque. Vero molestias id voluptates quia dolorem.","8","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Ullam fugit tempora omnis. Voluptatem minus fugit dignissimos similique.","19","16","25.00","23.00","2","public/uploads/product/pr_1.jpg","3","71666075","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("182","Reiciendis reprehenderit maiores architecto et natus omnis quia quae.","reiciendis-reprehenderit-maiores-architecto-et-natus-omnis-quia-quae.","Facilis et doloremque consequatur dolore est sed iste sed. Et quae quidem minus eum porro et natus. Inventore quo vero vitae eos est et beatae rem. Inventore cum et dignissimos.","9","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Et similique nobis error ut aut ex. Inventore ea tenetur consequatur amet et. Veritatis quia necessitatibus corporis. Dolorem ipsa sit necessitatibus et.","19","15","26.00","24.00","2","public/uploads/product/pr_1.jpg","3","35730606","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("183","Ullam repudiandae voluptatibus expedita praesentium earum.","ullam-repudiandae-voluptatibus-expedita-praesentium-earum.","Consequuntur quidem numquam alias debitis autem. Omnis incidunt earum officia. Et eos et consectetur exercitationem consequatur.","10","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Consequatur ducimus distinctio culpa quos. Aut nemo libero ratione fugit sint. Rem et deleniti autem aut.","19","15","27.00","25.00","2","public/uploads/product/pr_1.jpg","1","25469820","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("184","A totam odio culpa aliquam sed quod.","a-totam-odio-culpa-aliquam-sed-quod.","Dolorum laboriosam illum rem eius sit quod perspiciatis. Facilis nam deserunt dolores quia id. Et qui qui voluptatum repellendus sint quaerat voluptatem. Maxime non fugiat et sed.","11","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Facilis perspiciatis expedita veritatis laudantium placeat adipisci. Natus autem aut laboriosam culpa laudantium adipisci. Et nihil sint aut.","19","14","28.00","26.00","2","public/uploads/product/pr_1.jpg","1","09631366","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("185","Voluptas quidem temporibus et dolore.","voluptas-quidem-temporibus-et-dolore.","Voluptatem molestias sit accusantium aliquid. Et necessitatibus quasi non quia doloribus est est. Et sed sint vero temporibus nostrum ipsam deserunt. Eum porro et eum tenetur qui sit.","12","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Enim dolores ab pariatur. Neque voluptas quia temporibus eos earum molestiae sed. Dolores earum omnis sed accusantium perferendis quia.","19","3","29.00","27.00","2","public/uploads/product/pr_1.jpg","2","30722927","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("186","At sed adipisci ducimus non libero.","at-sed-adipisci-ducimus-non-libero.","Repudiandae natus dolorem quidem libero vel. Sunt asperiores voluptatem ipsum odio qui aut exercitationem. Aut placeat perferendis eligendi sed earum. Omnis voluptatem ut assumenda optio.","13","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Aut alias odio incidunt rem est sed fugit. Enim delectus dolore praesentium qui. Odio nisi voluptate ut excepturi aut adipisci odit. Qui quam voluptates eaque adipisci enim iusto.","19","2","30.00","28.00","2","public/uploads/product/pr_1.jpg","3","64652245","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("187","Sunt expedita ducimus veritatis dolor id omnis soluta.","sunt-expedita-ducimus-veritatis-dolor-id-omnis-soluta.","Culpa ad repellat accusamus placeat. Adipisci qui et et molestias et dolores. Aliquam eius rerum voluptate est. Rem iusto rem voluptas iusto esse voluptas.","14","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Consequatur optio aut sint molestiae et. Aut et doloremque unde perferendis maiores. Enim impedit culpa nulla. Architecto ea non assumenda accusantium et.","19","16","31.00","29.00","2","public/uploads/product/pr_1.jpg","3","55276658","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("188","Qui quia rem error velit.","qui-quia-rem-error-velit.","Occaecati aliquid voluptatem sint reprehenderit optio quia ut. Et sed est non quo aut tempora. Ut tempore ratione qui nihil nihil reprehenderit tenetur deleniti. Ut quis nesciunt sit aperiam cum.","15","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Tempora optio at eos quam eum. Aut qui ut sed nemo quia nobis veniam. Ratione unde cum est. Consequatur fugit molestiae vero qui atque suscipit velit. Dolores quo et quo.","19","3","32.00","30.00","2","public/uploads/product/pr_1.jpg","1","04253747","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("189","Ut quae voluptas non id dignissimos animi eum.","ut-quae-voluptas-non-id-dignissimos-animi-eum.","Omnis earum quam eos sint soluta ad quia. Omnis id illo ratione debitis. Placeat at provident at voluptatum aut laboriosam reprehenderit.","16","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Cum autem et eos quaerat repellendus nihil. Dolorum iure aspernatur deserunt. Impedit qui et aliquid quo at.","19","19","33.00","31.00","2","public/uploads/product/pr_1.jpg","2","66653523","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("190","Velit odit sit architecto et animi.","velit-odit-sit-architecto-et-animi.","Et dolor aut illum omnis. Perferendis nisi porro et placeat est eaque vitae. Qui minus explicabo accusamus sed ut nobis. Quo quidem nesciunt distinctio quo.","17","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Dolore minus et doloremque illo aliquid. Dolorum nihil dolorum omnis voluptate in dignissimos qui. Ut beatae nesciunt quibusdam corporis.","19","10","34.00","32.00","2","public/uploads/product/pr_1.jpg","2","46523785","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("191","Molestiae nam est natus veritatis voluptatibus asperiores.","molestiae-nam-est-natus-veritatis-voluptatibus-asperiores.","Dicta non aut exercitationem blanditiis dolor optio laborum. Ut libero voluptate recusandae doloribus aut sed. Sed perferendis eligendi dolor et id quod distinctio. Beatae veritatis harum recusandae.","18","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Expedita rerum aut quia ipsum neque autem. Reiciendis sequi optio dolorum ut autem expedita rerum. Qui voluptates iste maxime fuga nam earum facere. Officiis ipsa sed ab.","19","6","35.00","33.00","2","public/uploads/product/pr_1.jpg","3","29838356","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("192","Modi placeat quae delectus sed sit sed.","modi-placeat-quae-delectus-sed-sit-sed.","Fugit delectus aut quos blanditiis repellendus corrupti. Dolorum dolorem soluta at. Quas provident labore aut at odio molestias quisquam ut.","19","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Quos alias earum deserunt totam. Quaerat ut laboriosam omnis qui quae. Ut pariatur et qui qui dolor quo perferendis. Esse omnis doloremque quo hic.","19","9","36.00","34.00","2","public/uploads/product/pr_1.jpg","1","49535471","3","3","3","3","1","2020-07-12 21:37:13","2020-07-12 21:37:13");
INSERT INTO products VALUES("193","Nihil ut aspernatur distinctio at et quis.","nihil-ut-aspernatur-distinctio-at-et-quis.","Quam dolore aliquid maiores atque fuga ut. A rem itaque eaque recusandae libero. Dolores qui sed veniam ea sit. Libero rem sint a voluptates voluptates incidunt hic.","20","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Aut eaque nostrum dolores. Placeat officiis nihil voluptas est. Atque itaque ut officiis commodi et repellat suscipit.","19","6","37.00","35.00","2","public/uploads/product/pr_1.jpg","3","41919095","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("194","Aut quos est itaque veritatis qui deserunt fugiat.","aut-quos-est-itaque-veritatis-qui-deserunt-fugiat.","Alias cum eum officiis. Labore velit enim quos odit reiciendis quasi saepe et. Quis occaecati eaque aliquam quasi iusto id. Sint exercitationem impedit autem ut quos molestiae delectus.","21","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Velit reiciendis fugit quis numquam distinctio dignissimos aut. Voluptates ipsam distinctio sunt nihil et. Voluptatum tempora temporibus qui earum.","19","15","38.00","36.00","2","public/uploads/product/pr_1.jpg","2","90192227","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("195","Officia earum cum non neque deserunt non.","officia-earum-cum-non-neque-deserunt-non.","Quam vel ipsam qui quam necessitatibus. Inventore id quas enim voluptatem odit dolorum. Qui quasi quis eos autem magnam. Deleniti vitae neque blanditiis molestiae doloremque et mollitia.","22","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Pariatur ut aliquam architecto ab alias corrupti qui laborum. Libero aliquid sunt maxime quia rerum sunt.","19","4","39.00","37.00","2","public/uploads/product/pr_1.jpg","1","86292023","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("196","Sed est vitae animi laudantium cumque ut.","sed-est-vitae-animi-laudantium-cumque-ut.","Eos placeat similique omnis eligendi. Eum similique alias occaecati atque. Iusto optio praesentium voluptas quo. Iusto est et non quo voluptas.","23","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Est qui neque velit et est animi est dolores. Neque tenetur ullam sed similique. Et voluptatibus inventore commodi ea.","19","5","40.00","38.00","2","public/uploads/product/pr_1.jpg","1","33113289","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("197","Magnam culpa similique sequi cum consequatur veniam consequatur.","magnam-culpa-similique-sequi-cum-consequatur-veniam-consequatur.","Quibusdam est dolor veniam sunt modi. Ad et sit minus repellat nobis a natus. Inventore adipisci recusandae aut dolor labore.","24","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Ea enim minus excepturi totam ut molestiae. Ratione error dolorem et eveniet omnis quo necessitatibus. Quisquam eligendi qui eum perspiciatis quia asperiores.","19","16","41.00","39.00","2","public/uploads/product/pr_1.jpg","1","96667866","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("198","Nostrum asperiores recusandae doloribus.","nostrum-asperiores-recusandae-doloribus.","Laudantium omnis voluptatem voluptatem recusandae neque. Iusto beatae quidem magni deleniti est. Hic ut necessitatibus doloribus blanditiis accusantium sed.","25","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Culpa eos adipisci officiis optio ut deleniti id. Molestiae molestias qui autem qui accusamus. Consequatur sunt alias recusandae quia aut. Eum illo quos distinctio rerum voluptatem quam.","19","6","42.00","40.00","2","public/uploads/product/pr_1.jpg","1","15569073","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("199","Animi et neque omnis odio aspernatur quam.","animi-et-neque-omnis-odio-aspernatur-quam.","Dolore corrupti officiis molestiae tempore commodi. In aut quos reprehenderit voluptatibus voluptates aperiam commodi. Aut voluptas inventore error dolores praesentium.","26","16","2020-07-12 00:00:00","2020-08-12 00:00:00","Beatae eaque excepturi sapiente. Omnis exercitationem ut repudiandae ut odit. Voluptates molestiae sed officia vel aperiam eligendi minus. Sequi rem deserunt rerum magni.","19","16","43.00","41.00","2","public/uploads/product/pr_1.jpg","1","69530302","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("200","Accusamus assumenda deleniti eius.","accusamus-assumenda-deleniti-eius.","Laborum cupiditate quia ad est esse. Hic minima distinctio odit error. Modi ea aut et qui. Illum quia blanditiis adipisci quisquam architecto aliquid animi illo. Mollitia ab hic ut pariatur.","27","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Autem quo omnis excepturi velit deleniti quia veritatis. Debitis quod ut quia sint. Itaque quasi atque et officia. Recusandae enim id ad dolores.","19","11","44.00","42.00","2","public/uploads/product/pr_1.jpg","1","09288843","3","3","3","3","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("201","Facere ducimus ut natus quo a.","facere-ducimus-ut-natus-quo-a.","Ut fugit voluptatem sapiente aut modi est amet. Optio voluptatem modi voluptatem ut velit qui. Maiores consequuntur natus soluta.","3","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Incidunt molestiae ut natus voluptatibus maiores unde. Quis nihil quia omnis quod est nam. Qui facere omnis blanditiis expedita veritatis.","19","2","20.00","18.00","2","public/uploads/product/pr_1.jpg","2","23857896","2","2","2","2","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("202","Est consequatur ut et quas non impedit.","est-consequatur-ut-et-quas-non-impedit.","Ipsa enim quod culpa ducimus et pariatur tenetur. Odit tempora asperiores qui aut quas odit blanditiis.","4","20","2020-07-12 00:00:00","2020-08-12 00:00:00","Libero necessitatibus recusandae voluptatum quis officiis et ab. Quidem sequi voluptatem facere et. Blanditiis quia itaque autem error quia iste quisquam.","19","20","21.00","19.00","2","public/uploads/product/pr_1.jpg","3","34767887","2","2","2","2","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("203","Quia est expedita repudiandae officiis necessitatibus officiis molestiae.","quia-est-expedita-repudiandae-officiis-necessitatibus-officiis-molestiae.","Quis possimus eligendi deleniti rem. Rerum placeat doloremque quos aut amet. Voluptas at totam reiciendis ab tenetur. Dolores aut eum dolores dolorem harum.","5","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Esse molestiae aut fugit. Optio tenetur sunt qui autem quia unde. Saepe dolorum architecto nihil repudiandae labore animi.","19","18","22.00","20.00","2","public/uploads/product/pr_1.jpg","1","90491696","2","2","2","2","1","2020-07-12 21:37:14","2020-07-12 21:37:14");
INSERT INTO products VALUES("204","Possimus impedit voluptate omnis dolorum officiis mollitia velit.","possimus-impedit-voluptate-omnis-dolorum-officiis-mollitia-velit.","Aspernatur et quas sint facilis. Modi eos provident quasi recusandae quam non.","6","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Et voluptas ut debitis suscipit velit odit doloremque. Assumenda illum quis inventore ut ducimus. Consequatur veritatis perferendis omnis ea eum quasi. Odit quia nam asperiores sit dolore et.","19","15","23.00","21.00","2","public/uploads/product/pr_1.jpg","2","04116387","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("205","A fugiat ut eius quidem hic maiores et.","a-fugiat-ut-eius-quidem-hic-maiores-et.","Enim perferendis ipsum sit hic distinctio cupiditate dolor. Exercitationem quos voluptates aut consequatur nihil et. Dolor rerum quaerat sint quo iure.","7","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Accusamus libero ipsam et inventore quo repudiandae sed. Iure aliquam aut maiores officiis rem quia. Quaerat qui autem maiores et ab ipsam corrupti.","19","2","24.00","22.00","2","public/uploads/product/pr_1.jpg","2","75281069","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("206","Labore a consequuntur ullam maiores saepe soluta quia.","labore-a-consequuntur-ullam-maiores-saepe-soluta-quia.","Et doloremque et praesentium. Eum porro eius dolor delectus expedita eum. Delectus rerum sunt debitis quo voluptatem.","8","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Ut quisquam unde perferendis expedita eos est velit. Aut in error in nemo. Odit aspernatur consequatur et. Ea dolore deleniti est.","19","2","25.00","23.00","2","public/uploads/product/pr_1.jpg","3","91211040","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("207","Doloribus quidem libero vitae.","doloribus-quidem-libero-vitae.","Nesciunt in numquam repellat praesentium earum nisi quas. Optio odit placeat ratione accusamus eos suscipit asperiores labore. Aspernatur officiis accusamus eius reiciendis.","9","17","2020-07-12 00:00:00","2020-08-12 00:00:00","Rerum vero vel voluptatem similique dolores. Voluptates eum sit a voluptatem et vel tempore occaecati. Est beatae enim velit libero voluptatem maxime. Dolores et cumque delectus et culpa quidem.","19","17","26.00","24.00","2","public/uploads/product/pr_1.jpg","1","51376536","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("208","Explicabo blanditiis incidunt quod modi et.","explicabo-blanditiis-incidunt-quod-modi-et.","Quaerat voluptas qui beatae velit aut. In voluptas eum voluptatem tempora consequuntur architecto molestiae. Quasi corrupti sapiente iste enim est est qui.","10","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Aperiam rem rerum nam consequuntur harum rerum quia. Aut in quis eaque vero enim labore. Inventore fugiat distinctio adipisci magni sint. Velit et blanditiis molestias nesciunt.","19","7","27.00","25.00","2","public/uploads/product/pr_1.jpg","3","63630787","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("209","Assumenda aut repellat sed ea illum.","assumenda-aut-repellat-sed-ea-illum.","Ea quam provident voluptatem aut illum voluptas. Atque consequatur non sed eos est. Adipisci ut voluptates aut ipsa.","11","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Non voluptas ut laudantium ipsum et qui qui. Ex qui ut quia velit soluta. Nisi perspiciatis porro occaecati a. Soluta eum nobis eos ut.","19","18","28.00","26.00","2","public/uploads/product/pr_1.jpg","2","93896825","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("210","Consequatur et occaecati hic quia occaecati.","consequatur-et-occaecati-hic-quia-occaecati.","Placeat ipsam quia et dolor omnis omnis neque. Vero dolor aspernatur nemo rerum nobis quia. Sequi qui vel vel sapiente est doloremque voluptates.","12","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Ducimus repellat quo eius. Est eum quasi repellat sed consectetur ducimus minus maiores. Sunt sit ad totam porro alias molestias ut. Consequuntur libero dignissimos cum enim.","19","7","29.00","27.00","2","public/uploads/product/pr_1.jpg","1","55517720","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("211","In pariatur id non amet nulla dolor delectus harum.","in-pariatur-id-non-amet-nulla-dolor-delectus-harum.","Illum sit eum nostrum sit corporis exercitationem. Beatae cupiditate porro aut inventore qui adipisci occaecati. Est saepe atque eaque quia. Culpa est consequatur deleniti rerum sint facere.","13","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Dicta minus officiis facilis impedit ut debitis deserunt. Aut quia laborum ut eveniet tempora est voluptatem. Eum quos labore est consequatur dolor. Nihil qui similique aliquid aut.","19","18","30.00","28.00","2","public/uploads/product/pr_1.jpg","2","10129029","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("212","Qui voluptas qui sed doloribus tenetur ipsa animi.","qui-voluptas-qui-sed-doloribus-tenetur-ipsa-animi.","Explicabo vitae dolorem voluptates quidem. Non veniam temporibus perferendis quasi sed a delectus. At sunt fugiat ab.","14","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Nesciunt ipsum qui et est. Accusantium itaque repellendus et. Quis nemo assumenda et excepturi alias neque.","19","7","31.00","29.00","2","public/uploads/product/pr_1.jpg","2","19958194","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("213","Et expedita ut voluptas quidem beatae inventore.","et-expedita-ut-voluptas-quidem-beatae-inventore.","Libero quasi doloribus accusamus nobis. Eveniet quo quas iure eos et quidem nam. Temporibus rerum in animi delectus.","15","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Dolor sunt ut reiciendis accusantium qui in. Harum iusto qui vitae rem laborum officia. Culpa quia sint veritatis rerum.","19","11","32.00","30.00","2","public/uploads/product/pr_1.jpg","2","33739601","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("214","Nulla sapiente quod quia exercitationem omnis.","nulla-sapiente-quod-quia-exercitationem-omnis.","Eos sed qui ut totam omnis ut. Quae magnam vel cumque et. Porro eius quis nemo ea. Possimus qui porro voluptas tenetur soluta officiis. Hic sint optio voluptas sequi modi.","16","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptatem est nisi officiis molestiae. Vel repellendus consequatur corrupti sapiente explicabo. Sit nam molestiae voluptatem architecto molestiae fuga hic.","19","4","33.00","31.00","2","public/uploads/product/pr_1.jpg","3","35306184","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("215","Ex repudiandae occaecati eum quas sed minima in.","ex-repudiandae-occaecati-eum-quas-sed-minima-in.","Laudantium asperiores qui at dicta vero. Optio libero aut distinctio sunt fugiat. Occaecati necessitatibus voluptatem maiores quaerat.","17","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Quas ducimus fugiat assumenda iste. Expedita aliquid deleniti autem fugit eos. Voluptatem dolorem dolorem eos natus corporis.","19","1","34.00","32.00","2","public/uploads/product/pr_1.jpg","1","39550446","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("216","Et dolor nesciunt aut fugiat modi.","et-dolor-nesciunt-aut-fugiat-modi.","Accusantium dolor eum eos explicabo ut aperiam occaecati doloremque. Tempora quod aliquid aspernatur est mollitia magnam. Sunt totam perferendis non labore nulla.","18","18","2020-07-12 00:00:00","2020-08-12 00:00:00","Maiores non odio praesentium dolorem sapiente alias. Nesciunt natus temporibus nobis molestias eos est. Sed unde fugiat qui omnis.","19","18","35.00","33.00","2","public/uploads/product/pr_1.jpg","2","53865557","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("217","Fuga et sed in qui.","fuga-et-sed-in-qui.","Dolorem at sit placeat. Dolorum id repudiandae quia qui minima dicta. Sit cum ab a pariatur alias ipsa ab qui.","19","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Amet deserunt voluptatibus ut quia asperiores. Quae facere minus eaque id aut quia molestiae. Magni quia veniam doloremque et. Dignissimos exercitationem aspernatur velit maiores.","19","14","36.00","34.00","2","public/uploads/product/pr_1.jpg","3","28303985","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("218","Voluptate amet et neque dignissimos dignissimos molestias.","voluptate-amet-et-neque-dignissimos-dignissimos-molestias.","Laboriosam quaerat voluptas provident aut est suscipit eum quis. Cumque eos maiores atque sint quia. Rem a quisquam quo. Voluptas cum dolores ipsum qui aut quo officiis.","20","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Aliquam aut qui et labore eos quo ut. Dolorum eos magni magni blanditiis. Saepe soluta est molestiae officiis est quisquam quibusdam. Voluptatem et qui in voluptatem distinctio.","19","3","37.00","35.00","2","public/uploads/product/pr_1.jpg","3","76101847","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("219","Beatae voluptatem fugit temporibus aut vitae error alias.","beatae-voluptatem-fugit-temporibus-aut-vitae-error-alias.","Aut consequatur consequatur sit ut quos eveniet. Accusamus quo nobis deleniti inventore eos. Et non animi corrupti sint eaque enim qui. Quas id sunt culpa architecto.","21","11","2020-07-12 00:00:00","2020-08-12 00:00:00","Et quia consequatur et in sed enim est. Dolorum quasi molestiae nulla provident aut et aliquam provident. Rerum fugiat tenetur velit eaque sint modi nostrum rerum. Ut quia libero saepe quia alias.","19","11","38.00","36.00","2","public/uploads/product/pr_1.jpg","3","49418583","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("220","Exercitationem odio voluptates blanditiis aut odit reiciendis.","exercitationem-odio-voluptates-blanditiis-aut-odit-reiciendis.","Ducimus praesentium culpa soluta provident velit distinctio earum. Dolore enim inventore ullam optio. Velit reprehenderit quidem numquam sapiente eveniet est velit. Aut autem eum rerum repellat.","22","13","2020-07-12 00:00:00","2020-08-12 00:00:00","Qui quaerat hic ipsam alias asperiores illo. Perspiciatis quo et nam nostrum sit recusandae repellat. Et labore nostrum consequuntur.","19","13","39.00","37.00","2","public/uploads/product/pr_1.jpg","2","35503309","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("221","Eos nesciunt voluptate perferendis asperiores omnis velit.","eos-nesciunt-voluptate-perferendis-asperiores-omnis-velit.","Dolorum asperiores suscipit non quidem illo. Inventore et dolorem at veniam quod officiis. Expedita est iusto aut. Ipsam eum unde aut sit minus perferendis et delectus.","23","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Dolor natus ex vitae aut sequi laboriosam. Fugiat hic fuga occaecati corporis harum cupiditate in. Fugit a perferendis nesciunt. Tempora laboriosam quibusdam ratione dolores molestias atque suscipit.","19","2","40.00","38.00","2","public/uploads/product/pr_1.jpg","2","71084121","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("222","Iure harum dolorum hic vitae vitae.","iure-harum-dolorum-hic-vitae-vitae.","Nobis laboriosam nostrum dignissimos ipsam expedita. Qui tenetur vel at fuga. Magnam perspiciatis necessitatibus rem ab dignissimos eius. Et rem natus sint iusto molestiae sit vero vel.","24","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Consequatur occaecati consectetur adipisci ratione consequatur. Nulla laudantium nihil aut. Ut praesentium quasi voluptatem provident cum. Nisi unde maiores eveniet ratione.","19","19","41.00","39.00","2","public/uploads/product/pr_1.jpg","1","53008688","2","2","2","2","1","2020-07-12 21:37:15","2020-07-12 21:37:15");
INSERT INTO products VALUES("223","Recusandae possimus minima ducimus autem velit reprehenderit.","recusandae-possimus-minima-ducimus-autem-velit-reprehenderit.","Et excepturi illum cum quia. Optio sed facilis et. Placeat quo nihil veritatis natus ut. Consequatur est eos mollitia pariatur. Voluptatem est a ratione unde excepturi.","25","8","2020-07-12 00:00:00","2020-08-12 00:00:00","Beatae assumenda vero non et earum facere. Ad illum maiores ut non sed eos. Omnis libero repellendus eum ad provident a rerum.","19","8","42.00","40.00","2","public/uploads/product/pr_1.jpg","1","41296059","2","2","2","2","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("224","Sint eligendi sunt qui esse laboriosam.","sint-eligendi-sunt-qui-esse-laboriosam.","Atque minima est neque soluta facere rerum. Consequatur dolorum animi totam quas exercitationem. Autem aut asperiores quisquam enim eveniet.","26","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Minima eius cum magnam et dolores voluptatem libero. Quam ipsum quaerat qui occaecati molestiae. Odit rerum corporis occaecati adipisci. Eos aspernatur et est eos aut.","19","7","43.00","41.00","2","public/uploads/product/pr_1.jpg","3","35853596","2","2","2","2","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("225","Esse rerum quam dicta laudantium autem accusamus.","esse-rerum-quam-dicta-laudantium-autem-accusamus.","Officia sunt libero nisi illo vel exercitationem. Voluptatum repudiandae eveniet aspernatur impedit eaque sed. Dolorem beatae iusto veritatis eos. Et sunt voluptatem optio.","27","10","2020-07-12 00:00:00","2020-08-12 00:00:00","Beatae vel distinctio eligendi aut saepe molestiae commodi. Enim provident omnis minus et a. Hic ut quis tempore dolorum minus aut et eaque. Iure maxime temporibus nisi ducimus repellat.","19","10","44.00","42.00","2","public/uploads/product/pr_1.jpg","1","15120113","2","2","2","2","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("226","Qui est ipsum eveniet distinctio provident.","qui-est-ipsum-eveniet-distinctio-provident.","Et provident ipsum ipsam ab. In qui est qui consequuntur ad consequatur. Quis quod earum voluptatem. Incidunt voluptas occaecati nihil reprehenderit dolores.","3","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Temporibus dolores vel sint deleniti reprehenderit. Totam qui nobis et quia. Repellat neque omnis quisquam.","19","15","20.00","18.00","2","public/uploads/product/pr_1.jpg","1","43903252","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("227","Suscipit autem fugit necessitatibus nihil sunt nulla.","suscipit-autem-fugit-necessitatibus-nihil-sunt-nulla.","Earum accusamus ut eum aut voluptatum fugiat repellat. Saepe veritatis voluptatum architecto aut enim laboriosam qui. Dolor consequatur ut quos.","4","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Repellat molestiae qui dolor facere natus. Eveniet architecto iure debitis deleniti et voluptatem repellat. Eius aut facere praesentium sit.","19","5","21.00","19.00","2","public/uploads/product/pr_1.jpg","2","11928522","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("228","Asperiores fugit nemo nam nemo earum.","asperiores-fugit-nemo-nam-nemo-earum.","Consequatur molestias alias dolor consequatur voluptatem alias aut. Harum delectus excepturi voluptatem eum qui aliquid. Neque dolorum optio dolorum rerum et.","5","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Repudiandae sit facere aut aut. Magnam voluptatibus odit est veniam quis eum reprehenderit assumenda. Sint non voluptatum dolor porro laborum quia.","19","4","22.00","20.00","2","public/uploads/product/pr_1.jpg","3","91104663","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("229","Voluptas dolor provident ut quaerat non dolor.","voluptas-dolor-provident-ut-quaerat-non-dolor.","Est dolore aut numquam et eum id et quia. Voluptas quaerat officia cumque. Rerum id et qui facilis dolores enim. Molestiae voluptates et autem consectetur.","6","12","2020-07-12 00:00:00","2020-08-12 00:00:00","Iure fuga illo ea ipsa dolorum atque. Deleniti similique dolores laborum aut aut. Esse esse quas quaerat aperiam rerum.","19","12","23.00","21.00","2","public/uploads/product/pr_1.jpg","2","98196296","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("230","Harum porro enim ex nam soluta occaecati dolores.","harum-porro-enim-ex-nam-soluta-occaecati-dolores.","Doloribus officia numquam pariatur deleniti. Architecto temporibus unde consectetur enim et. Consequatur quo eum est saepe consequatur.","7","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Itaque ducimus quaerat sit. Rerum et et facilis nobis. Placeat autem qui accusantium voluptates perspiciatis non ut. Inventore nisi et sit suscipit quaerat sed.","19","9","24.00","22.00","2","public/uploads/product/pr_1.jpg","3","14965531","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("231","Quia ea perspiciatis necessitatibus ullam nulla consequuntur in.","quia-ea-perspiciatis-necessitatibus-ullam-nulla-consequuntur-in.","Dignissimos adipisci adipisci maiores officia. Alias repellat maiores assumenda illo tenetur doloremque est. Excepturi dolores officia cumque doloremque qui. Hic voluptas modi eum voluptatem.","8","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptates tempore provident libero unde. Quaerat unde quos dolorum modi ut. Enim quo excepturi amet numquam eius nisi. Ipsum voluptatibus quo quis aperiam vel velit aspernatur.","19","9","25.00","23.00","2","public/uploads/product/pr_1.jpg","1","63219043","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("232","Est vel aut non dolor et eum fuga.","est-vel-aut-non-dolor-et-eum-fuga.","Placeat ipsa impedit rerum eum. Odit incidunt necessitatibus deserunt commodi. Optio quos possimus omnis ut fugiat et. Corporis pariatur incidunt sunt aut.","9","14","2020-07-12 00:00:00","2020-08-12 00:00:00","Non ut quos assumenda quam asperiores sit sit. Debitis velit ipsam pariatur eveniet voluptatem. Perspiciatis at dolores quia libero modi. Exercitationem vel cumque sint est et et.","19","14","26.00","24.00","2","public/uploads/product/pr_1.jpg","2","58340806","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("233","Aut et dolorum quidem sit odit enim praesentium.","aut-et-dolorum-quidem-sit-odit-enim-praesentium.","Sint rerum qui illum vel neque. Quasi illo eligendi iste distinctio quam.","10","9","2020-07-12 00:00:00","2020-08-12 00:00:00","Beatae eum necessitatibus neque asperiores quidem. Sint veniam et in ut quod architecto ut. Et id architecto et inventore eaque laboriosam nostrum.","19","9","27.00","25.00","2","public/uploads/product/pr_1.jpg","3","18757422","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("234","Sed natus quae qui deserunt in.","sed-natus-quae-qui-deserunt-in.","Quo rerum enim similique. Aut facilis molestiae earum qui.","11","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Occaecati ratione assumenda qui. Aut ut nisi ut minima maiores aut iste. Sed quis corrupti veritatis rem. Est assumenda nostrum modi et aut quas. Atque omnis tenetur accusamus delectus.","19","6","28.00","26.00","2","public/uploads/product/pr_1.jpg","2","88099217","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("235","Est at omnis quam.","est-at-omnis-quam.","Labore doloribus aut temporibus deleniti nihil sit necessitatibus. Voluptatem dignissimos ipsam amet et sequi libero. Saepe totam eaque repellat impedit atque ea aut.","12","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Aut tempore cupiditate sit harum. Corporis modi odio ratione tempora eos.","19","1","29.00","27.00","2","public/uploads/product/pr_1.jpg","3","67725038","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("236","Vel sed error nihil voluptatem in sit.","vel-sed-error-nihil-voluptatem-in-sit.","Corporis fugit atque est voluptas. Aut corrupti enim earum culpa provident veritatis ut. Debitis cupiditate asperiores tempore rerum delectus consectetur.","13","7","2020-07-12 00:00:00","2020-08-12 00:00:00","Quam laudantium magni fugiat aut. Magnam qui sunt omnis a. Libero perferendis animi architecto quo vitae dolore.","19","7","30.00","28.00","2","public/uploads/product/pr_1.jpg","1","56517125","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("237","Odit eaque sed porro et ab.","odit-eaque-sed-porro-et-ab.","Molestias ipsam explicabo dignissimos veniam. Magni quo nulla pariatur quam in impedit. Molestiae molestiae ipsa autem sit suscipit iure laborum. Nulla iure neque nulla est ullam.","14","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Et commodi est assumenda et et voluptas reiciendis qui. Quia est aliquid soluta magnam ipsam at quas. Ut unde sed qui voluptatibus voluptas.","19","5","31.00","29.00","2","public/uploads/product/pr_1.jpg","1","60461629","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("238","Nulla tempore cumque sed autem consequatur.","nulla-tempore-cumque-sed-autem-consequatur.","Eos molestiae et ut aut non aut voluptas. Quos dolores omnis in esse ut consequuntur.","15","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Ut nesciunt ut quam harum tempore placeat. Quibusdam maxime cupiditate architecto. Porro porro et deserunt laborum. Modi occaecati aliquam ad nobis voluptas rem.","19","4","32.00","30.00","2","public/uploads/product/pr_1.jpg","3","70562019","10","10","10","10","1","2020-07-12 21:37:16","2020-07-12 21:37:16");
INSERT INTO products VALUES("239","Asperiores repellendus consequatur eveniet consequatur omnis laudantium.","asperiores-repellendus-consequatur-eveniet-consequatur-omnis-laudantium.","Ut tenetur esse qui ducimus. Totam et earum aperiam commodi et accusantium ut. Ut quam repudiandae ipsa. Officia quas consectetur ut reprehenderit quam odio laudantium.","16","5","2020-07-12 00:00:00","2020-08-12 00:00:00","Est reiciendis voluptatem eius reprehenderit. Ipsam sunt fuga omnis voluptate.","19","5","33.00","31.00","2","public/uploads/product/pr_1.jpg","3","45081927","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("240","Nemo est necessitatibus minima amet est.","nemo-est-necessitatibus-minima-amet-est.","Dignissimos molestiae praesentium quae debitis repellat atque. Dolorem nobis autem aspernatur. Explicabo adipisci qui molestias magnam in. Blanditiis culpa voluptate soluta culpa saepe totam et.","17","1","2020-07-12 00:00:00","2020-08-12 00:00:00","Officiis animi optio et corrupti molestiae est rerum. Quo dolorem beatae est voluptate deleniti est tempora tenetur. Totam quasi amet consequatur.","19","1","34.00","32.00","2","public/uploads/product/pr_1.jpg","3","51943356","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("241","Officiis dignissimos quis eos iste totam ipsum tempore.","officiis-dignissimos-quis-eos-iste-totam-ipsum-tempore.","Enim autem quis molestiae deleniti dolor voluptas. Omnis delectus molestiae rerum. Et officiis mollitia illo quos dicta totam.","18","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Illo velit illo eos ea laboriosam. In rerum nihil impedit. Blanditiis at id quas error cumque labore. Similique sequi nisi non quia ipsum voluptatem.","19","6","35.00","33.00","2","public/uploads/product/pr_1.jpg","3","00268851","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("242","Laudantium et atque molestiae consequatur.","laudantium-et-atque-molestiae-consequatur.","Laborum sit unde est. Optio quo quia exercitationem est minima eum. Sit incidunt quia et sequi. Non commodi officiis ut distinctio id doloribus. Illo qui neque est ut tempora ut.","19","15","2020-07-12 00:00:00","2020-08-12 00:00:00","Omnis laborum animi sit assumenda. Non esse nisi natus eum vel consequuntur. Id aliquam qui harum inventore esse est delectus.","19","15","36.00","34.00","2","public/uploads/product/pr_1.jpg","2","71918617","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("243","Quia est quasi asperiores occaecati consequuntur maxime.","quia-est-quasi-asperiores-occaecati-consequuntur-maxime.","Blanditiis dolores dolores eligendi occaecati odio delectus perferendis. Ut pariatur ad quis et. Fugiat aut neque fugiat molestiae aut nobis iure. Aperiam iste aliquid nobis quis dolores.","20","19","2020-07-12 00:00:00","2020-08-12 00:00:00","Qui aut a deleniti. Non dolore quod fugit magni ducimus. Pariatur eligendi itaque qui aut et omnis.","19","19","37.00","35.00","2","public/uploads/product/pr_1.jpg","3","85797512","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("244","Voluptate voluptatibus eum omnis maiores iusto nemo pariatur.","voluptate-voluptatibus-eum-omnis-maiores-iusto-nemo-pariatur.","Assumenda atque similique sit neque. Possimus qui sit culpa ad. Voluptatum quasi velit nostrum eligendi sunt et quibusdam et. Magni saepe eum ut aperiam illum molestiae.","21","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Laborum a sint facilis nihil dolore sed asperiores. Qui aliquid consequuntur aut quasi non culpa sint.","19","2","38.00","36.00","2","public/uploads/product/pr_1.jpg","3","20446741","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("245","Nobis cupiditate ut quo voluptatibus.","nobis-cupiditate-ut-quo-voluptatibus.","Voluptatem omnis aliquam ea. Temporibus ab veritatis modi enim quia. Rerum aut sunt sed libero odit sit natus consectetur.","22","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Est qui ut et in. Ad ut dolorem veritatis et similique doloribus quisquam.","19","6","39.00","37.00","2","public/uploads/product/pr_1.jpg","3","55731614","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("246","Perferendis necessitatibus explicabo consequatur.","perferendis-necessitatibus-explicabo-consequatur.","Ut tempora accusantium odio officia quam ullam. Repellendus explicabo cumque beatae dignissimos et deserunt.","23","6","2020-07-12 00:00:00","2020-08-12 00:00:00","Explicabo quia consequuntur quae amet sit. Necessitatibus laboriosam temporibus excepturi ut facere. Aperiam et deleniti commodi culpa. Rerum blanditiis commodi beatae molestiae rerum.","19","6","40.00","38.00","2","public/uploads/product/pr_1.jpg","3","13023812","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("247","Recusandae praesentium suscipit quod voluptas repudiandae aut.","recusandae-praesentium-suscipit-quod-voluptas-repudiandae-aut.","Deserunt praesentium et dignissimos vel. Ut delectus a quam odio quaerat amet et. Sapiente voluptatem quia placeat numquam cumque.","24","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Odit consequatur corporis minus et. Non nam laborum hic ipsum ut aspernatur commodi. Velit et aut harum quas corporis eos ut.","19","3","41.00","39.00","2","public/uploads/product/pr_1.jpg","2","68545192","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("248","Sit dolorum sunt consequatur aut non minus est.","sit-dolorum-sunt-consequatur-aut-non-minus-est.","Repudiandae aliquam ut in in et dolorum dolores est. Quidem molestiae magni dolores accusamus non. Sapiente in enim corrupti nihil aspernatur quo. Aut commodi veniam odit.","25","4","2020-07-12 00:00:00","2020-08-12 00:00:00","Voluptate et doloribus quaerat corrupti omnis. Voluptas incidunt tempore laudantium consequuntur saepe odit. Maxime quae est neque occaecati quo fugiat eligendi. Consequatur laborum dolorem vero hic.","19","4","42.00","40.00","2","public/uploads/product/pr_1.jpg","2","76414961","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("249","Molestias dolorem officiis qui aut quibusdam voluptatibus maiores porro.","molestias-dolorem-officiis-qui-aut-quibusdam-voluptatibus-maiores-porro.","Voluptates expedita qui sed qui. Quod et corrupti ut sapiente eum at. Quod est id quod qui molestiae rerum tenetur. Ut voluptas vero voluptates labore et.","26","3","2020-07-12 00:00:00","2020-08-12 00:00:00","Minima perferendis enim quia eos exercitationem. Eaque consequatur dignissimos in rerum fuga dolore qui. Sed voluptas qui ipsam voluptatem similique tenetur. Ducimus placeat vero soluta.","19","3","43.00","41.00","2","public/uploads/product/pr_1.jpg","1","87408072","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");
INSERT INTO products VALUES("250","Magni accusantium doloribus commodi laborum repellendus quis ipsam est.","magni-accusantium-doloribus-commodi-laborum-repellendus-quis-ipsam-est.","Molestias et voluptatum dicta sequi. Nobis rerum qui voluptates error. Molestiae voluptas id alias non corrupti.","27","2","2020-07-12 00:00:00","2020-08-12 00:00:00","Quibusdam quo natus officiis saepe animi tempora similique. Sequi est tempore excepturi accusantium odit. Iste numquam consequatur nihil aspernatur ab. Architecto eos qui facilis et et.","19","2","44.00","42.00","2","public/uploads/product/pr_1.jpg","1","74677061","10","10","10","10","1","2020-07-12 21:37:17","2020-07-12 21:37:17");



DROP TABLE purchases;

CREATE TABLE `purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `total_qty` int(11) DEFAULT NULL,
  `total_discount` double DEFAULT NULL,
  `total_tax` double DEFAULT NULL,
  `total_cost` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `grand_total` double DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `due` double DEFAULT NULL,
  `payment_method` int(11) DEFAULT NULL,
  `bank` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchases_supplier_id_foreign` (`supplier_id`),
  CONSTRAINT `purchases_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE roles;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO roles VALUES("1","superadmin","A Superadmin User","","");
INSERT INTO roles VALUES("2","admin","A Admin User","","");



DROP TABLE roles_user;

CREATE TABLE `roles_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `roles_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO roles_user VALUES("1","1","1","","");



DROP TABLE sales;

CREATE TABLE `sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `total_qty` int(11) DEFAULT NULL,
  `total_discount` double DEFAULT NULL,
  `total_tax` double DEFAULT NULL,
  `total_cost` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `grand_total` double DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `due` double DEFAULT NULL,
  `payment_method` int(11) DEFAULT NULL,
  `bank` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_customer_id_foreign` (`customer_id`),
  CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE service_types;

CREATE TABLE `service_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO service_types VALUES("1","Demo service 1","1","2020-07-12 21:35:45","");
INSERT INTO service_types VALUES("2","Demo service 2","1","2020-07-12 21:35:45","");



DROP TABLE services;

CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tax` double DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `tax_id` int(10) unsigned NOT NULL,
  `service_type_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_tax_id_foreign` (`tax_id`),
  KEY `services_service_type_id_foreign` (`service_type_id`),
  CONSTRAINT `services_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `services_tax_id_foreign` FOREIGN KEY (`tax_id`) REFERENCES `taxes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE settings;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `software_version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zone_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_activated_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '10',
  `system_domain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO settings VALUES("1","Jos-Pharma","Jos Pharmacy Management System","en","1","Dhaka,Bangladesh","+01303159886","josh@pharma.com","xxxxxxxxx","1","2","public/uploads/settings/logo.png","public/uploads/settings/favicon.png","Copyright &copy; 2020 All rights reserved | This template is made by Codethemes","QRCODE‎","4.4","51","2020-07-12","10","http://localhost","","");



DROP TABLE suppliers;

CREATE TABLE `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO suppliers VALUES("1","Jevon Mayer II","10844 Stephan Hills Apt. 933","882451","Ryan-Emard","723 Reinger Heights Apt. 203
Donnellfurt, WY 17116","cassandre65@auer.biz","19","1","","");
INSERT INTO suppliers VALUES("2","Petra Wiegand","986 Daphney Path","641","Glover, Walker and Koepp","46792 Josefa Station Apt. 611
Steubermouth, UT 33139","bklocko@gmail.com","19","1","","");
INSERT INTO suppliers VALUES("3","Ms. Elenor Considine V","4572 Davon Point Apt. 031","771","Bernier-Klein","825 Prohaska Estates
Millsborough, CO 43411-6593","kianna76@yahoo.com","19","1","","");
INSERT INTO suppliers VALUES("4","Evie Emard","9469 Aylin Lock Apt. 556","0","Hudson, Mante and Kautzer","6491 Jessika Corner Apt. 343
Raynorville, OH 14197-3059","henriette91@goyette.info","19","1","","");
INSERT INTO suppliers VALUES("5","Prof. Lisette Collier III","105 Chet Stravenue","508","Friesen-Quigley","5495 Streich Mountain
Jaymechester, DE 73083-7987","grimes.krystel@hotmail.com","19","1","","");
INSERT INTO suppliers VALUES("6","Lance Goldner","264 Zora Club","812293","Pagac-Becker","627 Penelope Ridge Apt. 555
Hamillbury, RI 68605-7678","gloria.hagenes@yahoo.com","19","1","","");
INSERT INTO suppliers VALUES("7","Esmeralda Marks","409 Upton Keys Apt. 491","1","Welch, Skiles and White","1707 Amya Village
Kuhnport, AR 08467","lavada19@gmail.com","19","1","","");
INSERT INTO suppliers VALUES("8","Ellen Medhurst Sr.","827 Reva Isle Apt. 686","1","Stanton Inc","2781 Eryn Circles Suite 045
Lake Lavonne, CA 25090","isaac.kozey@gleichner.info","19","1","","");
INSERT INTO suppliers VALUES("9","Kelsie Thiel","9975 Lehner Throughway Suite 260","725","Gleason, Runolfsson and Flatley","603 Makenzie Branch
Smithmouth, IA 91462-2909","immanuel09@yahoo.com","19","1","","");
INSERT INTO suppliers VALUES("10","Prof. Dixie Aufderhar I","397 Lafayette Viaduct Suite 015","697","Rath, O\'Kon and Christiansen","11733 Gorczany Avenue
New Judsonfort, RI 73069","fiona.greenfelder@hotmail.com","19","1","","");



DROP TABLE taxes;

CREATE TABLE `taxes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO taxes VALUES("1","10%","10","1","2020-07-12 21:35:06","");
INSERT INTO taxes VALUES("2","20%","20","1","2020-07-12 21:35:06","");
INSERT INTO taxes VALUES("3","30%","30","1","2020-07-12 21:35:06","");



DROP TABLE users;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES("1","laurus","laurus@ph.net","$2y$10$PC03rU0C/63.OQwRwP1YRuOAl3SCHqykKUP89bUO9Q16TlOU/3QOq","","","");



