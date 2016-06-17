-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 08:48 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `Password`) VALUES
(1, 'harshitsinha1102@gmail.com', 'h@rsh1102');

-- --------------------------------------------------------

--
-- Table structure for table `fanswer`
--

CREATE TABLE `fanswer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fanswer`
--

INSERT INTO `fanswer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(2, 1, 'Harshit Sinha', 'harsitsinha1102@yahoo.in', 'Yeah its true', '23/11/15 15:52:02'),
(4, 1, 'Harshit Sinha', 'harshitsinha1102@gmail.com', 'It was a test on capitals of the country', '23/11/15 19:36:50'),
(4, 2, 'Abhishek', 'abhicse94@gmail.com', 'It was an easy one', '23/11/15 19:40:57'),
(3, 1, 'Harshit Sinha', 'harshitsinha1102@gmail.com', '\r\ncan someone anser my ', '27/11/15 11:24:23'),
(3, 2, 'Harshit Sinh', '', '', '27/11/15 11:24:57'),
(3, 3, 'Abhishek', 'abhicse94@gmail.com', 'Yes of course', '27/11/15 11:25:21'),
(5, 1, 'Harshit Sinha', 'harshitsinha1102@gmail.com', 'The test went pretty will', '28/11/15 19:49:17'),
(4, 3, 'Harshit Sinha', 'harshitsinha1102@gmail.com', 'I have a doubt in question 2', '30/11/15 18:55:14'),
(5, 2, 'My Account', 'har@gmail.com', 'Hey', '26/01/16 20:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE `fquestions` (
  `id` int(4) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `fquestions` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(2, 'This site is awesome', 'This is a new site I have discovered.', 'Harshit Sinha', 'harshitsinha1102@gmail.com', '23/11/15 03:51:04', 6, 1),
(3, 'Discussion on Test-1', 'Qustions will be discussed from Test-1', 'Abhishek', 'abhicse94@gmail.com', '23/11/15 05:37:15', 9, 3),
(4, 'Discussion on Test-2', 'All the queries regarding Test-2 can be asked here', 'Sahil Khaneja', 'luvsahil@yahoo.in', '23/11/15 07:04:26', 24, 3),
(5, 'Discussion on Test-3', 'All queries related to Test-3 will be discussed here.', 'Harshit', 'harshitsinha1102@gmail.com', '28/11/15 07:33:37', 7, 2),
(6, 'Hello', 'This site is refreshing', '$name', '$email', '26/01/16 08:52:17', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `ID` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Previous` int(10) NOT NULL,
  `Total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`ID`, `Email`, `Previous`, `Total`) VALUES
(1, 'harshitsinha1102@gmail.com', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `ID` int(10) NOT NULL,
  `Qustion` char(200) NOT NULL,
  `Option1` char(70) NOT NULL,
  `Option2` char(70) NOT NULL,
  `Option3` char(70) NOT NULL,
  `Option4` char(70) NOT NULL,
  `Answer` char(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`ID`, `Qustion`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(1, 'How will you free the allocated memory ?', 'remove(var-name);', 'free(var-name);', 'delete(var-name);', 'dalloc(var-name);', 'free(var-name);'),
(2, 'What is the similarity between a structure, union and enumeration?', 'All of them let you define new values', 'All of them let you define new data types', 'All of them let you define new pointers', 'All of them let you define new structures', 'All of them let you define new data types'),
(3, 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', 'return'),
(4, 'What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?', 'The element will be set to 0.', 'The compiler would report an error.', 'The program may crash if some important data gets overwritten.', 'The array size would appropriately grow.', 'The program may crash if some important data gets overwritten.'),
(5, 'In C, if you pass an array as an argument to a function, what actually gets passed?', 'Value of elements in array', 'First element of the array', 'Base address of the array', 'Address of the last element of array', 'Base address of the array'),
(6, 'How will you print \\n on the screen?', 'printf("\\n");', 'echo "\\\\n";', 'printf(''\\n'');', 'printf("\\\\n");', 'printf("\\\\n");'),
(7, 'Which header file should be included to use functions like malloc() and calloc()?', 'memory.h', 'stdlib.h', 'string.h', 'dos.h', 'stdlib.h'),
(8, 'Which of the following is not logical operator?', '&', '&&', '||', '!', '&'),
(9, 'In mathematics and computer programming, which is the correct order of mathematical operators ?', 'Addition, Subtraction, Multiplication, Division', 'Division, Multiplication, Addition, Subtraction', 'Multiplication, Addition, Division, Subtraction', 'Addition, Division, Modulus, Subtraction', 'Division, Multiplication, Addition, Subtraction'),
(10, 'Which of the following cannot be checked in a switch-case statement?', 'Character', 'Integer', 'Float', 'enum', 'Float');

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `ID` int(10) NOT NULL,
  `Qustion` char(200) NOT NULL,
  `Option1` char(70) NOT NULL,
  `Option2` char(70) NOT NULL,
  `Option3` char(70) NOT NULL,
  `Option4` char(70) NOT NULL,
  `Answer` char(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`ID`, `Qustion`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(1, 'What is the capital of Spain?', 'Madrid', 'Barcelona', 'Tokyo', 'Moscow', 'Madrid'),
(2, 'What is the capital of Netherlands?', 'Rome', 'Antwerp', 'Prague', 'Amsterdam', 'Amsterdam'),
(3, 'What is the capital of Iran?', 'Baghdad', 'Ankara', 'Tehran', 'Kabul', 'Tehran'),
(4, 'What is the capital of North Korea?', 'Seoul', 'Kyoto', 'Shanghai', 'Pyongyang', 'Pyongyang'),
(5, 'What is the capital of Greece?', 'Athens', 'Berlin', 'Glasgow', 'Rome', 'Athens'),
(6, 'What is the capital of Nigeria?', 'Abuja', 'Ankara', 'Rwanda', 'Pretoria', 'Abuja'),
(7, 'What is the capital of Russia?', 'St. Perersburg', 'Moscow', 'Kiev', 'Kabul', 'Moscow'),
(8, 'What is the capital of China?', 'Shanghai', 'Beijing', 'Hong Kong', 'Tokyo', 'Beijing'),
(9, 'What is the capital of USA?', 'New York', 'San Francisco', 'Los Angeles', 'Washington D.C', 'Washington D.C'),
(10, 'What is the capital of Australia?', 'Canberra', 'Durban', 'Sydney', 'Auckland', 'Canberra');

-- --------------------------------------------------------

--
-- Table structure for table `test3`
--

CREATE TABLE `test3` (
  `ID` int(10) NOT NULL,
  `Qustion` char(200) NOT NULL,
  `Option1` char(70) NOT NULL,
  `Option2` char(70) NOT NULL,
  `Option3` char(70) NOT NULL,
  `Option4` char(70) NOT NULL,
  `Answer` char(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test3`
--

INSERT INTO `test3` (`ID`, `Qustion`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(1, 'Pointing to a photograph of a boy Suresh said, "He is the son of the only son of my mother." How is Suresh related to that boy?', 'Brother', 'Uncle', 'Cousin', 'Father', 'Father'),
(2, 'If A is the brother of B; B is the sister of C; and C is the father of D, how D is related to A?', 'Brother', 'Sister', 'Nephew', 'Cannot be determined', 'Cannot be determined'),
(3, 'Introducing a boy, a girl said, "He is the son of the daughter of the father of my uncle." How is the boy related to the girl?', 'Brother', 'Nephew', 'Uncle', 'Son-in-law', 'Brother'),
(5, '120, 99, 80, 63, 48, ?', '35', '38', '39', '40', '35');

-- --------------------------------------------------------

--
-- Table structure for table `test4`
--

CREATE TABLE `test4` (
  `ID` int(10) NOT NULL,
  `Qustion` char(200) NOT NULL,
  `Option1` char(70) NOT NULL,
  `Option2` char(70) NOT NULL,
  `Option3` char(70) NOT NULL,
  `Option4` char(70) NOT NULL,
  `Answer` char(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test4`
--

INSERT INTO `test4` (`ID`, `Qustion`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(1, 'The total of the ages of Amar, Akbar and Anthony is 80 years. What was the total of their ages three years ago ?', '71 years', '72 years', '74 years', '77 years', '71 years'),
(2, 'An institute organised a fete and 1/5 of the girls and 1/8 of the boys participated in the same. What fraction of the total number of students took part in the fete ?', '2/13', '13/40', 'Data inadequate', 'None of these', 'Data inadequate'),
(3, 'A student got twice as many sums wrong as he got right. If he attempted 48 sums in all, how many did he solve correctly ?', '12', '16', '18', '24', '16'),
(4, 'If a clock takes seven seconds to strike seven, how long will it take to strike ten ?', '7 seconds', '9 seconds', '10 seconds', 'None of these', 'None of these'),
(5, 'In a group of cows and hens, the number of legs are 14 more than twice the number of heads. The number of cows is', '5', '7', '10', '12', '7');

-- --------------------------------------------------------

--
-- Table structure for table `test5`
--

CREATE TABLE `test5` (
  `ID` int(10) NOT NULL,
  `Qustion` char(200) NOT NULL,
  `Option1` char(70) NOT NULL,
  `Option2` char(70) NOT NULL,
  `Option3` char(70) NOT NULL,
  `Option4` char(70) NOT NULL,
  `Answer` char(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test5`
--

INSERT INTO `test5` (`ID`, `Qustion`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(1, 'A father tells his son, "I was of your present age when you were born". If the father is 36 now, how old was the boy five years back ?', '13', '15', '17', '20', '13'),
(2, 'If a 1 mm thick paper is folded so that the area is halved at every fold, then what would be the thickness of the pile after 50 folds ?', '100 km', '1000 km', '1 million km', '1 billion km', '1 billion km'),
(3, 'A fires 5 shots to B''s 3 but A kills only once in 3 shots while B kills once in 2 shots. When B has missed 27 times, A has killed', '30 birds', '60 birds', '72 birds', '90 birds', '30 birds'),
(4, 'Find the number which when added to itself 13 times, gives 112.', '7', '8', '9', '11', '8'),
(5, 'A total of 324 coins of 20 paise and 25 paise make a sum of Rs. 71. The number of 25-paise coins is', '120', '124', '144', '200', '124');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Address`, `Contact`, `Email`, `Username`, `Password`) VALUES
(11, 'Harshit Sinha', 'New Delhi', 2147483647, 'harshitsinha1102@gmail.com', 'harsh11', 'h@rsh1102'),
(12, 'Abhishek', 'Mathura', 2147483647, 'abhicse94@gmail.com', 'abhi94', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fanswer`
--
ALTER TABLE `fanswer`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `fquestions`
--
ALTER TABLE `fquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test3`
--
ALTER TABLE `test3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test4`
--
ALTER TABLE `test4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test5`
--
ALTER TABLE `test5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fquestions`
--
ALTER TABLE `fquestions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test2`
--
ALTER TABLE `test2`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test3`
--
ALTER TABLE `test3`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `test4`
--
ALTER TABLE `test4`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `test5`
--
ALTER TABLE `test5`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
