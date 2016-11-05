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
) ENGINE=InnoDB DEFAULT CHARSET=utf8
```

Sample data

```sql
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Hello', 'This one post', '2016-11-03 22:35:38', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Some title', 'Hi my dear friend', '2016-11-03 22:36:13', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Another title', 'My name is Vladimir Kamuz', '2016-11-03 22:36:49', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('This is third post', 'It''s awesome PHP framework for web application', '2016-11-04 07:07:02', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('This is five post', 'Something wrong and I will change it', '2016-11-04 07:07:56', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('New post', 'Hello, Codeigniter', '2016-11-04 11:18:55', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Hidden post', 'Test message to you!', '2016-11-04 11:20:21', 0, 0);
```

Create table user

```sql
CREATE TABLE `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','author','user','') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8
```

Added some users

```sql
INSERT INTO ci.users (email, username, password, user_type) VALUES ('v.kamuz@gmail.com', 'vladimir', '12345', 'user');
INSERT INTO ci.users (email, username, password, user_type) VALUES ('i.kamuz@gmail.com', 'igor', '12345', 'author');
```