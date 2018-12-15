-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 07:49 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disease`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL,
  `state` varchar(50) NOT NULL,
  `prevention` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `name`, `description`, `location`, `type`, `image`, `state`, `prevention`) VALUES
(5, 'Multistate Psittacosis Outbreak among Poultry Plant Workers, 2018', 'The most common way someone gets infected with the bacteria that cause psittacosis (Chlamydia psittaci) is by breathing in dust containing dried secretions (e.g., droppings, respiratory) from infected birds. There is no evidence that these bacteria can spread by preparing or eating chicken meat.\r\n\r\nIt is rare for psittacosis to spread from person to person. In this outbreak, infection among family members who are not workers at the affected plants has not been reported.', 'Aba', 'Epidermic', '##201809220725532042443521.jpg', 'Abia', ' Contact a healthcare professional if you have fever, cough, headache, or muscle aches after working at a poultry slaughter plant involved in the outbreak. Tell your healthcare professional that you may have been exposed to psittacosis. Healthcare professionals can treat psittacosis with antibiotics.\r\nPlant management should implement steps to minimize exposures to bird droppings and respiratory secretions to protect their workers.\r\nLearn how people who work in poultry slaughter plants can prevent psittacosis.\r\nLatest Outbreak Information\r\nDuring Augustâ€“September 2018, psittacosis cases were reported among workers at two poultry slaughter plants in Virginia and Georgia. A single corporation owns both plants.\r\nChlamydia psittaci, the type of bacteria that causes psittacosis, was detected by a laboratory test in 10 people. Additional illnesses in workers at the two plants have been identified, although have not been confirmed by the laboratory.\r\nNo deaths have been reported.\r\nVirginia and Georgia departments of health are conducting an investigation, and the number of cases is likely to change.\r\nCurrent evidence indicates that all of the people who have psittacosis work at poultry slaughter plants in two states: Virginia and Georgia. Investigators are still working to understand why the outbreak occurred.\r\nThe affected plants in Virginia and Georgia voluntarily suspended operations for cleaning.\r\nOn September 8, 2018, the affected plant in Virginia suspended operations. The plant reopened on September 18, 2018.\r\nOn September 15, 2018, the affected plant in Georgia suspended operations. The plant reopened on September 19, 2018.\r\nPlant management held town hall meetings in both plants to inform their workers about the outbreak.\r\nCDC will provide updates when more information is available.'),
(6, 'Outbreak of Salmonella Infections Linked to Gravel Ridge Farms Shell Eggs', 'CDC, public health and regulatory officials in several states, and the U.S. Food and Drug Administration (FDA) are investigating a multistate outbreak of Salmonella Enteritidis infections linked to shell eggs produced by Gravel Ridge Farms.', 'Umuahia', 'Endermic', '##2018092207291852036223.jpg', 'Abia', 'Sorry, No Preventive Measure or Control Action Yet!'),
(7, 'Outbreak of Salmonella Infections Linked to Chicken', 'Most people infected with Salmonella develop diarrhea, fever, and stomach cramps 12 to 72 hours after being exposed to the bacteria.\nThe illness usually lasts 4 to 7 days, and most people recover without treatment.\nIn some people, the diarrhea may be so severe that the patient needs to be hospitalized. Salmonella infection may spread from the intestines to the bloodstream and then to other places in the body.\nIn rare cases, Salmonella infection can cause death unless the person is treated promptly with antibiotics.\nChildren younger than 5 years of age, adults older than 65 years of age, and people with weakened immune systems are more likely to have severe illness.\nFor more information, see the CDC Salmonella website.', 'Maiduguri', 'Endermic', '##20180922073112895969161.jpg', 'Borno', ' Always handle raw chicken carefully and cook it thoroughly to prevent food poisoning. This outbreak is a reminder that raw chicken products can have germs that spread around food preparation areas and can make you sick.\r\n\r\nCDC is not advising that people avoid eating kosher chicken or Empire Kosher brand chicken.\r\n\r\nCDC advises consumers to follow these steps to help prevent Salmonella infection from raw chicken:\r\n\r\nWash hands before and after preparing raw chicken.\r\nDonâ€™t spread germs from raw chicken around food preparation areas. Washing raw poultry before cooking is not recommended. Germs in raw poultry juices can spread to other areas and foods. Thoroughly wash hands, counters, cutting boards, and utensils with warm, soapy water after they touch raw chicken. Use a separate cutting board for raw chicken and other raw meats if possible.\r\nCook raw chicken thoroughly to kill harmful germs. Chicken breasts, whole chickens, and ground chicken should always be cooked to an internal temperature of 165Â°F to kill harmful germs. Leftovers should be reheated to 165Â°F. Use a food thermometer to check, and place it in the thickest part of the food.'),
(8, 'Multistate Outbreak of Salmonella Mbandaka Infections Linked to Kelloggâ€™s Honey Smacks Cereal', 'CDC continues to recommend consumers not eat any Kelloggâ€™s Honey Smacks cereal. People who recently became ill report eating Kelloggâ€™s Honey Smacks cereal that they had in their homes.\r\nIf you see Kelloggâ€™s Honey Smacks cereal for sale, do not buy it.\r\nThirty more ill people from 19 states were added to this outbreak since the last update on July 12, 2018.\r\nThree more states reported ill people: Delaware, Minnesota, and Maine.', 'Enugu', 'Epidermic', '##package-medium.jpg', 'Enugu', ' Do not eat or sell any Kelloggâ€™s Honey Smacks cereal. It has been linked to a multistate outbreak of Salmonella infections.\r\n\r\nImportant advice for consumers and retailers:\r\n\r\nDo not eat any Kelloggâ€™s Honey Smacks cereal, regardless of package size or best-by date. Check your home for it and throw it away or return it to the place of purchase for a refund. The Kellogg Company recalled the cereal on June 14, 2018.\r\nRetailers should not sell or serve any Kelloggâ€™s Honey Smacks cereal.\r\nEven if some of the cereal has been eaten and no one got sick, throw the rest of it away or return it for a refund.\r\nIf you store cereal that looks like Kelloggâ€™s Honey Smacks in a container without the packaging and donâ€™t remember the brand or type, throw it away. Kelloggâ€™s Honey Smacks is a sweetened puffed wheat cereal.\r\nThoroughly wash the container with warm, soapy water before using it again, to remove harmful germs that could contaminate other food.'),
(9, 'Yellow Fever in Nigeria', 'The Nigeria Centre for Disease Control has reported an ongoing outbreak of yellow fever that began in September 2017. Laboratory-confirmed yellow fever cases have been reported in at least seven states, and a number of people have died.\r\n\r\nIn response to this outbreak, Nigerian health authorities conducted mass vaccination campaigns in several affected states at the end of 2017. Additional mass vaccination campaigns are planned for other affected states starting in early 2018.', 'Owerri', 'Endermic', '##20180922073932622095516.jpg', 'Imo', ' CDC recommends anyone 9 months or older who travels to any part of Nigeria should be vaccinated against yellow fever. In addition, Nigerian authorities require proof of yellow fever vaccination from all people one year of age or older who are traveling to Nigeria and are arriving from a country with risk of yellow fever virus transmission.\r\n\r\nBecause of current limitations in the availability of yellow fever vaccine in the United States, travelers should contact a yellow fever vaccine provider well in advance of travel.'),
(10, 'Measles in owerri', 'Measles is a disease that can lead to serious complications, such as pneumonia (infection of the lungs), and even death. It is caused by a highly-contagious virus that is spread through the air by breathing, coughing, or sneezing. Signs and symptoms of measles include rash, high fever, and a cough, runny nose, or red, watery eyes.\r\n\r\nKey Points\r\nThere is an outbreak of measles in Owerri.\r\nWhat is the current situation?\r\nHealth officials in Owerri have reported an outbreak of measles.', 'Owerri', 'Endermic', '##201809220741571171434411.jpg', 'Imo', ' Make sure you are fully vaccinated or otherwise protected against measles.*\r\nPeople who cannot show that they were vaccinated or are otherwise protected against measles should get vaccinated before leaving the United States:\r\nInfants (6 through 11 months of age) should have 1 dose of MMR vaccine.\r\nAdults and children over 1 year of age should have 2 doses of MMR vaccine separated by at least 28 days.\r\nAvoid contact with people who are sick.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES
(3, 'Chiedozie', 'dozie', 'dozie@gmail.com', '12345', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
