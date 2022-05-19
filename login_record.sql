CREATE TABLE login_record {
    record_id AUTO_INCREMENT PRIMARY KEY,
    person_name VARCHAR(10) NOT NULL,
    record timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL
};