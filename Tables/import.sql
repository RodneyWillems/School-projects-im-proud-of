use `netland`;
drop table if exists `gebruikers`;
create TABLE `gebruikers` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usern VARCHAR(100) NOT NULL,
    passw VARCHAR(100) NOT NULL
);
INSERT INTO `gebruikers` (`usern`, `passw`) VALUES
('peter', 'ikbenpeter03');