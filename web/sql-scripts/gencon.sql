CREATE TABLE users
(
    id SERIAL,
    first_name VARCHAR(40),
    last_name VARCHAR(100)
);

INSERT INTO users(first_name, last_name) VALUES ('Scott', 'Burton');