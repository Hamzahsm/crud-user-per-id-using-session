CREATE TABLE `users` (  `user_id` int(11) NOT NULL,
  `username` text NOT NULL, 
`password` text NOT NULL,
  `full_name` text NOT NULL, 
`gender` text NOT NULL, 
`age` int(11) NOT NULL, 
`address` text NOT NULL)
ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- jangan lupa user_id di setting auto increment