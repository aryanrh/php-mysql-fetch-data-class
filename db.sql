/*
*Simple PHP class to fetch data from database
*@author Aryan R.H
*@instagram instagram.com/aryan_r_h
*@twitter twitter.com/aryan_r_h
*@github github.com/aryanrh
*@facebook facebook.com/aryanrh.official
*/

CREATE TABLE `git_repo_test` (
  `Id` int(3) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `git_repo_test` (`Id`, `value`) VALUES
(1, 'aryan_rh_is_testing');

ALTER TABLE `git_repo_test`
  ADD PRIMARY KEY (`Id`);
