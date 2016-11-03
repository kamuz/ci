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