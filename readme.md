# Simple CMS by CodeIgniter

Create a database, for example `ci` and new table `posts`

```sql
CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

Sample data

```sql
INSERT INTO `posts` VALUES
(1,'Hello','This one post','2016-11-03 20:35:38',0,1),
(2,'Some title','Hi my dear friend','2016-11-03 20:36:13',0,1),
(3,'Another title','My name is Vladimir Kamuz','2016-11-03 20:36:49',0,0);
```

Create table user

```sql
CREATE TABLE `users` (
  `user_id` INT(4) NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(255) NOT NULL ,
  `username` VARCHAR(40) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `user_type` ENUM('admin','author','user','') NOT NULL ,
  PRIMARY KEY (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;