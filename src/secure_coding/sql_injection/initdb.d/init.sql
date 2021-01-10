CREATE TABLE user
(
    id              INT NOT NULL AUTO_INCREMENT,
    name            CHAR(30),
    nickname        CHAR(30),
    birthday        DATE,
    last_login_date DATE,
    PRIMARY KEY (id)
);
INSERT INTO user (name,nickname,birthday,last_login_date) VALUES ('name_1', 'nickname_1','1995-01-01','2019-05-21');
INSERT INTO user (name,nickname,birthday,last_login_date) VALUES ('name_2', 'nickname_2','1995-01-02','2019-05-22');
INSERT INTO user (name,nickname,birthday,last_login_date) VALUES ('name_3', 'nickname_3','1995-01-03','2019-05-23');
INSERT INTO user (name,nickname,birthday,last_login_date) VALUES ('name_4', 'nickname_4','1995-01-04','2019-05-24');
INSERT INTO user (name,nickname,birthday,last_login_date) VALUES ('name_5', 'nickname_5','1995-01-05','2019-05-25');