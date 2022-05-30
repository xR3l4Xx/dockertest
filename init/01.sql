CREATE TABLE users (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` varchar(32) NOT NULL,
    `name` varchar(100) NOT NULL,
    `password` varchar(32) NOT NULL
);

CREATE TABLE subjects (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(50) NOT NULL
);

CREATE TABLE grades (
    `userid` int(11) NOT NULL,
    `subjectid` int(11) NOT NULL,
    `grade` tinyint NOT NULL
);

INSERT INTO users(`username`, `name`, `password`) VALUES
('admin', 'Administrator', 'h4mm3rt1m3'),
('noahs17', 'Noah Smith', 'noahpw'),
('sophiaw17', 'Sophia White', 'sophiapw');

INSERT INTO subjects(`name`) VALUES
('Mathematics'),
('Science'),
('Music'),
('P.E.'),
('English'),
('Literature');

INSERT INTO grades(`userid`, `subjectid`, `grade`) VALUES
(2, 1, 5),
(2, 2, 5),
(2, 3, 3),
(2, 4, 3),
(2, 5, 4),
(2, 6, 3),
(3, 1, 3),
(3, 2, 4),
(3, 3, 5),
(3, 4, 4),
(3, 5, 5),
(3, 6, 5);