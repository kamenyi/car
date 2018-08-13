-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2016 at 05:17 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `acb-car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminFirstName` varchar(255) NOT NULL,
  `adminLastName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPassword` text NOT NULL,
  `adminCreatedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminFirstName`, `adminLastName`, `adminEmail`, `adminPassword`, `adminCreatedDate`) VALUES
  (1, 'Kewal', 'Kewal', 'kewal@admin.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carID` int(11) NOT NULL,
  `carDetails` varchar(255) NOT NULL,
  `carPrice` varchar(255) NOT NULL,
  `carImageName` varchar(255) NOT NULL,
  `carImage` text NOT NULL,
  `carInfo` text NOT NULL,
  `CarType` varchar(255) NOT NULL,
  `CarTransmssion` varchar(255) NOT NULL,
  `carOdometer` varchar(255) NOT NULL,
  `carLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carID`, `carDetails`, `carPrice`, `carImageName`, `carImage`, `carInfo`, `CarType`, `CarTransmssion`, `carOdometer`, `carLocation`) VALUES
  (1, '2014 Skoda Octavia Elegance 103TSI Auto MY14', '$28100', 'car_1.png', 'img/', 'TECH PACK AND SUNROOF. My 2014 Skoda Octavia has great fuel economy at 5.2L per 100km. 9 airbags to give you added safety. Only travelled 31000 km. This Skoda Octavia 2014 has adaptive cruise control, USB audio input, park assist, front parking sensors, bluetooth functionality and memory card reader. It represents great value at $28,100. \n\nFEATURES\n- Map/reading lamps\n- Key less Entry\n- Automatic boot open/close\n- Satellite navigation (GPS)\n- Leather seats\n- Dual zone climate control air conditioning\n- Voice recognition\n- Electronic stability control (ESC)\n- Electronic brake force distribution (EBD)', 'USED', 'Automatic', '31,000 km', 'NSW'),
  (2, '2010 Mercedes-Benz C250 CGI Avantgarde Auto MY10', '$25110', 'car_2.png', 'img/', 'Feel like driving with class? This excellent 2010 example with only 88614 km on the clock, has just had B service and registration until July 2017! All 4 Pirelli Zero tyres have only approx 10,000km \r\n\r\nFully optioned with Vision package, Command package and Harmon Kardon Logic 7 premium sound. The car has always been garaged and serviced by Mercedes Dealership. Excellent obsidian black with beige interior, the premium colour combination.  \r\n\r\nSafety features include:\r\nThis car has 9 airbags fitted for your safety with an ANCAP safety rating of 5. Equipped with ABS brakes. This Mercedes-Benz C250 CGI 2010 Avantgarde has rear parking sensors, driver & passenger airbags, knee airbag for driver, brake assist and side airbags. \r\n\r\nSPECIAL FEATURES:\r\n- Satellite navigation (GPS)\r\n- Leather gear knob\r\n- Cruise control\r\n- Rain sensor wipers\r\n- Front colour display screen\r\n- Leather steering wheel\r\n- Electric front seats\r\n- 18" alloy wheels\r\n- Front & rear power windows\r\n- Hill holder\r\n- Remote central locking\r\n- USB audio input', 'USED', 'Automatic', '88,614 km', 'NSW'),
  (3, '2012 Toyota Camry Hybrid H Auto', '$15590', 'car_3.png', 'img/', 'This Toyota Camry 2012 is in excellent condition both inside and out. Company Vehicle.One owner since new, this car has been cared for fastidiously and is sure to impress any serious buyers. The car has been regularly serviced through Toyota and will be sold with full log books and service history. \n\nProtect yourself with these features:\nThis car has 7 airbags fitted for your protection with an ANCAP safety rating of 5. The car is also fitted with a reversing camera and speed alert warning. \n\nOTHER FEATURES:\n- Front & rear power windows\n- 16" alloy wheels\n- Information display\n- Cruise control\n- Central locking\n- Bluetooth enabled system\n- Rear air conditioning\n- Regenerative brakes \n- Remote central locking\n- Hill holder\n- Electric power assisted steering\n- USB audio input', 'USED', 'Automatic', '125,854 km', 'QLD'),
  (4, '2011 Toyota Aurion Sportivo ZR6 Auto MY10', '$13800', 'car_4.png', 'img/', 'This 2011 Toyota Aurion sportivo XR6. This car is for the enthusiastic car driver who can appreciated a sportive car driving feeling. With TRD mag Wheels 17\' .Air conditioner.  This car is a dream to drive and it seems it can do the driving and cornering by it self.  Inside and out looks like new and feels like a new car.  I regretfully have to sell this car.  As I had to buy a 4x4 vehicle to tow my caravan.  This car has a 10\' screen GPS on dash board, reverse camera, DVD CD player.  This Car is 100% recommended by the seller, it will not disappoint, this car had being serviced by Toyota work shop, The automatic transmission was also serviced recently, new brake pads fitted recently  and wheel alignment also done. Receipts available.\r\n\r\nDON\'T MISS ANY OF THESE FEATURES IN YOUR FIRST CAR:\r\n- Cruise control\r\n- Front parking sensors\r\n- USB audio input\r\n- IPod connectivity\r\n- Front cup holders\r\n- Power steering\r\n- Bluetooth connectivity\r\n- Speed alert warning\r\n- Front & rear power windows\r\n- Full body kit\r\n- Rear spoiler', 'USED', 'Automatic', '136,000 km', 'VIC'),
  (5, '2013 BMW 318d F31 Auto MY13.5', '$37500', 'car_5.png', 'img/', 'It has 6 airbags fitted for your safety. Rear parking assistance gives you the extra confidence when reversing through its distance signalling alerts. This BMW 318d (No Badge) has side airbags, ABS brakes, driver & passenger airbags and brake assist. The wagon has done its kilometers on country roads and has been serviced at the local BMW dealership. \r\n\r\nINCLUDED FEATURES:\r\n- Roof rails\r\n- Dual zone climate control air conditioning\r\n- Regenerative brakes \r\n- Leather steering wheel\r\n- Cargo tie down hooks/Rings\r\n- Rear air conditioning\r\n- USB audio input\r\n- Key/fob proximity starter button\r\n- Hands free- powered tailgate\r\n- Front & rear power windows\r\n- 18" alloy wheels (style 397)\r\n- Cargo tie down rails\r\n- Rain sensor wipers\r\n- Limited slip diff (LSD)\r\n- Panorama Glass sunroof\r\n- Smartphone connectivity', 'USED', 'Automatic', '43,000 km', 'NSW'),
  (6, '2014 Ford Falcon XR8 FG X Auto', '$46888', 'car_6.png', 'img/', 'This stunning Super Charged FGX Falcon XR8, fitted with FPV GTF/Rspec Running Gear & suspension, ABN Holders are Welcome with Chattel Mortgages available, This one owner XR8 will not last.  Call now for an immediate appointment & Test Drive, ask about our Easy weekly Repayments & Over the phone Approval\'s. \r\nFeaturing : \r\n\r\n- Lowered Pedders Suspension \r\n- 2017 Factory Warranty \r\n- Custom Mustang Style Graphics\r\n- 6 Speed Automatic Transmission \r\n- 5.0 ltr 32 Valve V8 Supercharged Engine \r\n- Brembo Brakes  \r\n- Staggered 19" FPV Alloy Wheels\r\n- Reverse Camera\r\n- SYNC 2 \r\n- Sat/Nav ( GPS ) \r\n- Tinted Windows \r\n- Bluetooth \r\n- IPod & USB Connectivity \r\n- One Owner \r\n- Log Books Complete Ford History \r\n- Spare Key', 'USED', 'Automatic', '14,072 km', 'NSW'),
  (7, '2015 Ford Falcon XR6 Turbo FG X Manual', '$37880', 'car_7.png', 'img/', 'Easy Weekly Re-Payments with this Ex Demo Manual FGX XR6 Turbo, 19" Alloy Wheels, we can Have you in this Beautiful Kenetic Blue XR6 Turbo Today, Call now for an immediate appointment & Test Drive, ask about our Easy weekly Repayments & Over the phone Approval\'s. \r\nFeaturing : \r\n\r\n- 2018 Factory Warranty\r\n- 4.0 ltr 24 Valve (VVT) Turbo Charged Engine \r\n- 6 Speed Manual Transmission \r\n- 19" Alloy Wheels \r\n- Leather Interior\r\n- Tinted Windows \r\n- Sat/Nav (GPS) \r\n- Bluetooth \r\n- IPod & USB Connectivity \r\n- Log Books Complete Ford History \r\n- Spare Key', 'USED', 'Manual', '30,810 km', 'QLD'),
  (8, '2014 Ford Territory Titanium SZ Auto', '$33460', 'car_8.png', 'img/', '2014 White Ford Territory Titanium! Turbo Diesel. 7 Seats! EXTRA CLEAN! One Owner. Automatic. SUV. \r\n\r\nFeatures:\r\n- Sat Nav\r\n- DVD Player\r\n- Reverse Camera\r\n- Parking Sensors\r\n- 7 Seater\r\n- Tow Pack\r\n- Leather\r\n- Heated Seats\r\n- Power Seats\r\n- Power Windows\r\n- Power Locks', 'USED', 'Automatic', '87,070 km', 'VIC'),
  (9, '2016 BMW 330e M Sport F30 LCI Auto', '$79888', 'car_9.png', 'img/', 'The electrifying BMW 330e Sedan. It features the revolutionary integrated eDrive system, developed for our ground-breaking BMW i8, the worlds most progressive sports car. It combines a high output, four cylinder petrol engine with a high efficiency emission free electric motor. Whilst driving this car youll enjoy BMW trademark performance, maximum fuel efficiency and the convenience of plug in charging. The future of driving is as electrifying as ever!', 'NEW', 'Automatic', '3,702 km', 'NSW'),
  (10, '2016 BMW 318i Luxury Line F30 LCI Auto', '$58888', 'car_10.png', 'img/', 'With the balance of BMW\'s 3 Year Warranty and Roadside Assistance this Company Demonstrator BMW 318i Luxury Line Sedan is finished in the very desirable and very sporty Black Sapphire with Black Leather and is available for immediate delivery!\r\n\r\nOptions on this beautiful vehicle include (but not limited to):\r\n\r\n- Luxury Line\r\n- Black Sapphire (metallic)\r\n- Electric Glass Sunroof\r\n- Ash Grain dash interior\r\n- Automatic Transmission\r\n- Petrol Engine\r\n- Black Leather', 'NEW', 'Automatic', '6,000 km', 'ACT'),
  (11, '2016 Holden Caprice V WN Series II Auto MY16', '$49990', 'car_11.png', 'img/', 'THAT\'S CORRECT! RENOVATIONS ARE COMPLETE AND OUR MITSUBISHI FRANCHISE JOINS US MONDAY SO FOR THIS SATURDAY ONLY WE ARE OFFERING $1,000 off OUR ALREADY VERY LOW PRICES ON OUR HUGE RANGE OF EX FACTORY DEMO AND QUALITY USED VEHICLE STOCK', 'NEW', 'Automatic', '5,288 km', 'SA'),
  (12, '2016 Holden Caprice V WN Series II Auto MY16', '$52990', 'car_12.png', 'img/', 'Satisfy your motoring needs with our easily accessible family owned Holden dealership. We offer a host of great products and services to provide a one stop outlet providing friendly efficient service. Proudly hosting Australias top service technical team to service your motoring dream.\r\n\r\n Free 6 year 175,000km Warranty with all New and Demonstrator vehicles!\r\n\r\n Ready to assist with every automotive need such as:\r\n-NEW AND USED VEHICLE SALES \r\n-TAILORED FINANCE OPTIONS', 'NEW', 'Automatic', '4,638 km', 'WA'),
  (13, '2016 Hyundai Santa Fe Active Auto 4x4 MY16', '$45990', 'car_13.png', 'img/', 'ANTILOCK BRAKING SYSTEM (ABS) WITH ELECTRONIC\r\nBRAKEFORCE DISTRIBUTION (EBD)\r\nTo help keep you out of danger in emergency situations, ABS\r\nwith EBD work to prevent the brakes from locking up, optimising\r\nbraking pressure between the front and rear wheels to shorten\r\nbraking distances.\r\nBRAKE ASSIST SYSTEM (BAS)\r\nBAS assesses how fast the brake pedal is pressed, then if an\r\nemergency is detected, instantly applies maximum force, thereby\r\nshortening braking distances.', 'NEW', 'Automatic', '5 km', 'NSW'),
  (14, '2016 Hyundai Elantra Active Auto MY17', '$28000', 'car_14.png', 'img/', '5 YEAR FREE SERVICING ON THIS BRAND NEW ELANTRA THIS NEW ELANTRA WILL COME WITH $500.00 WORTH OF FREE GENUINE HYUNDAI ACCESSORIES ONLY EXCLUSIVELY WHEN YOU MAKE AN INQUIRY', 'NEW', 'Automatic', '20 km', 'QLD'),
  (15, '2016 Suzuki Swift GL Auto MY15', '$14490', 'car_15.png', 'img/', 'We are Adelaide?s fastest growing Suzuki dealer with a large selection of Suzuki models in stock and available for immediate dery. Our award winning sales team pride themselves on dering exceptional customer service, and ensuring that your next vehicle purchase is an enjoyable and memorable experience.\r\n\r\nWe?ll happily take the time to not only source the right car for you but can also assist with competitive finance packages tailored to suit your personal or business needs. We look forward to welcoming you soon to our dealership', 'NEW', 'Automatic', '1,025 km', 'SA'),
  (16, '2016 Suzuki Celerio Manual', '$13990', 'car_16.png', 'img/', 'VIP SERVICING PACKAGE!!!! RACQ VOTED THIS CAR LEAST EXPENSIVE CAR TO OWN AND RUN 2yrs in a row 2015 & 2016!!! NO DEPOSIT FINANCE, drive away today! We are the Car Finance experts! WE are that confident we have a NO FINANCE APPLICATION REFUSED policy! Looking for your next car dont know where to start? Our highly trained professionals can take away the endless leg work and hoops the banks make you jump through and make the whole process a fun, stress free experience youll never forget! You can secure the vehicle of your choice with a simple, fully refundable, $200 holding deposit and then make a test drive appointment at a time that suits you. Cant get out to us? No problem! Let us bring the vehicle out to you! You have peace of mind with Suzukis three year warranty (extendable to five years at no cost just follow the capped price servicing schedule). All finance is to approved applicants and subject to lenders requirements.', 'NEW', 'Manual', '10 km', 'QLD'),
  (18, '2016 Volkswagen Golf Hatch', '30000', 'fghjk.png', '', '6 speed Manual | 7 speed Automatic | 6 speed Automatic', 'NEW', 'Automatic ', '50 km', 'NSW');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `customerFirstName` varchar(255) NOT NULL,
  `customerLastName` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerPassword` text NOT NULL,
  `customerCreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerFirstName`, `customerLastName`, `customerEmail`, `customerPassword`, `customerCreatedDate`) VALUES
  (8, 'Kewal', 'Kewal', 'kewal@me.com', '202cb962ac59075b964b07152d234b70', '2016-11-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationID` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL,
  `carPrice` text NOT NULL,
  `purchaseDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseID` int(11) NOT NULL AUTO_INCREMENT;