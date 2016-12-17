# Simple CMS by CodeIgniter

Create a database, for example `ci`.

Create table `posts` and insert some data:

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

INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Hello', 'This one post', '2016-11-03 22:35:38', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Some title', 'Hi my dear friend', '2016-11-03 22:36:13', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Another title', 'My name is Vladimir Kamuz', '2016-11-03 22:36:49', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('This is third post', 'It''s awesome PHP framework for web application', '2016-11-04 07:07:02', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('This is five post', 'Something wrong and I will change it', '2016-11-04 07:07:56', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('New post', 'Hello, Codeigniter', '2016-11-04 11:18:55', 0, 1);
INSERT INTO posts (title, post, date_added, user_id, active) VALUES ('Hidden post', 'Test message to you!', '2016-11-04 11:20:21', 0, 0);
```

Create table user and insert some data:

```sql
CREATE TABLE `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','author','user','') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

Register new users

Create table comment and insert some data:

```sql
CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `comment`, `date_added`) VALUES
(1, 6, 18, 'Hello, man', '2016-11-10 07:32:06'),
(2, 6, 18, 'It''s very cool', '2016-11-10 07:32:59'),
(4, 6, 18, 'Test', '2016-11-10 09:51:59'),
(6, 6, 18, 'Test message', '2016-11-10 10:01:07');