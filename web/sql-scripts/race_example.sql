CREATE TABLE event
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    "date" date
);

INSERT INTO event(name, location, "date") VALUES ('Color Run', 'Awesome Events Center', '2018-07-20');
INSERT INTO event(name, location) VALUES ('Turkey Trot', 'Porter Park');

CREATE TABLE participant
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE event_participant
(
    id SERIAL PRIMARY KEY,
    event_id INT REFERENCES event(id) NOT NULL,
    participant_id INT REFERENCES participant(id) NOT NULL
)

INSERT INTO participant(name) VALUES ('Jimmy'), ('Caleb'), ('Carl'), ('Kyle');

