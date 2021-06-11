CREATE DATABASE test;
USE test;
CREATE TABLE test(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    data VARCHAR(500)
);

INSERT into test(name,data) VALUES
 ('Ricardo','62,69,3'),
 ('Leonardo','56,116,25'),
 ('Luan','52,85,25');
INSERT INTO test(name,data) VALUES ('Rafael','17,33,0');
 
select * from test;
drop table test;