-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 07:26 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online judge`
--

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE IF NOT EXISTS `contests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contest_id` text NOT NULL,
  `contest_name` text NOT NULL,
  `contest_type` text NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `contest_desc` text NOT NULL,
  `contests_admins` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`id`, `contest_id`, `contest_name`, `contest_type`, `start_time`, `end_time`, `contest_desc`, `contests_admins`) VALUES
(1, 'MAYLUNCH14', 'May Lunchtime', 'ICPC', 1405182100, 1405190000, 'May Lunchtime is for Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.', 'Triveni Mahatha'),
(2, 'MAYCOOK14', 'May Cook Off', 'ICPC', 1405180900, 1405182100, 'May Cook Off is for Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.', 'Proneet Verma'),
(3, 'MAYLONG14', 'May Long Challenge', 'ICPC', 1405031500, 1405131500, 'May Long Challenge is for Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.', 'Abhilash Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `problem_id` text NOT NULL,
  `problem_name` text NOT NULL,
  `contest_id` text NOT NULL,
  `contest_name` text NOT NULL,
  `problem_statement` text NOT NULL,
  `short_desc` text NOT NULL,
  `input_desc` text NOT NULL,
  `output_desc` text NOT NULL,
  `constraints` text NOT NULL,
  `sample_input` text NOT NULL,
  `sample_output` text NOT NULL,
  `total_submissions` int(11) NOT NULL,
  `accepted_submissions` int(11) NOT NULL,
  `time_limit` int(11) NOT NULL,
  `memory_limit` int(11) NOT NULL,
  `difficulty` int(11) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `problem_id`, `problem_name`, `contest_id`, `contest_name`, `problem_statement`, `short_desc`, `input_desc`, `output_desc`, `constraints`, `sample_input`, `sample_output`, `total_submissions`, `accepted_submissions`, `time_limit`, `memory_limit`, `difficulty`, `author`) VALUES
(1, 'COMPNPARSE', 'Compilers and Parsers', 'MAYLONG14', 'May Long Challenge', 'Lira is now very keen on compiler development. :) She knows that one of the most important components of a compiler, is its parser. A parser is, in simple terms, a software component that processes text, and checks it''s semantic correctness, or, if you prefer, if the text is properly built. As an example, in declaring and initializing an integer, in C/C++, you can''t do something like: int = x ;4 as the semantics of such statement is incorrect, as we all know that the datatype must precede an identifier and only afterwards should come the equal sign and the initialization value, so, the corrected statement should be: int x = 4; Given some expressions which represent some instructions to be analyzed by Lira''s compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there''s no such a prefix.', 'Given some expressions which represent some instructions to be analyzed by Lira''s compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there''s no such a prefix.', 'Input will consist of an integer T denoting the number of test cases to follow.\r\nThen, T strings follow, each on a single line, representing a possible expression in L++.', 'For each expression you should output the length of the longest prefix that is valid or 0 if there''s no such a prefix.', '1 <= T <= 500\n1 <= The length of a single expression <= 106\nThe total size all the input expressions is no more than 5*106', '3', '4', 107, 63, 3, 5, 1, 'Triveni Mahatha'),
(2, 'UPNDOWN', 'Ups and Downs', 'MAYLONG14', 'May Long Challenge', 'You will be given a zero-indexed array A. You need to rearrange its elements in such a way that the following conditions are satisfied:\nA[i] < A[i+1] if i is even.\nA[i] > A[i+1] if i is odd.\nIn other words the following inequality should hold: A[0] > A[1] < A[2] > A[3] < A[4], and so on. Operations > and < should alter.', 'Given some expressions which represent some instructions to be analyzed by Lira''s compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there''s no such a prefix.', 'The first line contains a single integer T denoting the number of test cases. The first line of each test case contains an integer N, that is the size of the array A. The second line of each test case contains the elements of array A', 'For each test case, output a single line containing N space separated integers, which are the elements of A arranged in the required order. If there are more than one valid arrangements, you can output any of them.', '1 <= N <= 100000\nSum of N in one test file <= 600000\n1 <= A[i] <= 10^9', '2\r\n2\r\n3 2\r\n3\r\n10 5 2', '2 3\r\n2 10 5\r\n', 157, 112, 2, 5, 2, 'Triveni Mahatha'),
(3, 'BTHETREE', 'Build The Tree', 'MAYLONG14', 'May Long Challenge', 'Given a rooted tree with N nodes. Nodes of the tree are numbered from 1 to N. Node 1 is the root. You need to add M nodes to it in the given order. All the nodes have values. Cost for adding a node A with value va to another node B with value vb is va*vb. There is an additional cost of y (so total cost of va*vb+y) if B has atleast x child nodes. After node A has been added to another node B it becomes a child of B.\r\nAfter adding a node A to the tree, nodes next in list can be added to A also. You need to calculate the total minimal cost to add all M nodes in given order.', 'Given some expressions which represent some instructions to be analyzed by Lira''s compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there''s no such a prefix.', 'The first line of input contains N. The second line of input contains N integers representing the values of nodes in order from node 1 to node N. N-1 lines follow, each line defines an edge. Each line has 2 integers, which says that those 2 nodes are connected.\r\nNext line of input contains an integer Q, denoting the number of queries you need to answer. Each query consists of 2 lines. The first line of each query has 3 integers, M x y. The second line of each query has M integers representing the values of the nodes to be added in order.\r\nNote that in each query, M nodes are added to the initial tree, and hence changes made in previous query should not be considered in later queries', 'For each query, output a single line containing the minimal total cost to add all the nodes in given order.', '1 <= N <= 100000\n1 <= x <= 1000\n1 <= y <= 1000\n1 <= Q <= 100\n1 <= M <= 100\n1 <= Values of all nodes in input <= 1000', '3\r\n2 2 3\r\n1 2\r\n2 3\r\n2\r\n2 2 10\r\n10 10\r\n3 2 10\r\n1 2 2', '40\r\n6', 68, 33, 5, 5, 3, 'Triveni Mahatha');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
