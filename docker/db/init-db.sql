-- CREATE USER docker;
-- CREATE DATABASE panam;
-- GRANT ALL PRIVILEGES ON DATABASE panam TO docker;
CREATE DATABASE panam;
CREATE table test(id serial, label text, primary key(id));
INSERT INTO test (label) VALUES ('test1');
INSERT INTO test (label) VALUES ('test2');
INSERT INTO test (label) VALUES ('test3');
INSERT INTO test (label) VALUES ('test4');