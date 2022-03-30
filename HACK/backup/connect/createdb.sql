

USE hcp164831;

DROP TABLE IF EXISTS email;

CREATE TABLE email (
                      id INT NOT NULL AUTO_INCREMENT,

                      naam VARCHAR(50),

                      email VARCHAR(50),

                      randomString VARCHAR(50),



                      datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP,


                      PRIMARY KEY (id)
);