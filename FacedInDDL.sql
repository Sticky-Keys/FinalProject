/* DDL for LinkedIn Revamped */

CREATE TABLE user_to_user_connection(
	user1_id bigint REFERENCES user(user_id) ON DELETE CASCADE,
	user2_id bigint REFERENCES user(user_id) ON DELETE CASCADE,
	PRIMARY KEY(user1_id, user2_id)
) ENGINE = INNODB;

CREATE TABLE user(
  user_id bigint PRIMARY KEY,
  name varchar(100),
  date_of_birth date,
  edit_mode boolean, /* this is set when the user logs in. that way no other user can edit your stuff. */
  password varchar(1000) /* this is a hashed password, and I made enough space for however we want to salt/hash this thing */
) ENGINE = INNODB;

CREATE TABLE employer(
  employer_id bigint PRIMARY KEY,
  name varchar(50),
  description varchar(10000), /*should be large enough?*/
  rating int
) ENGINE = INNODB;

CREATE TABLE skills(
  title varchar (50),
  skill_id bigint PRIMARY KEY
) ENGINE = INNODB;

CREATE TABLE institution(
  inst_id bigint PRIMARY KEY,
  name varchar(150),
  location varchar(200),
  establishment_date date
) ENGINE = INNODB;

/*this is for the many to many relationship b/w user and employer*/
CREATE TABLE user_employer(
  user_id bigint REFERENCES user,
  employer_id bigint REFERENCES employer,
  PRIMARY KEY(user_id, employer_id)
) ENGINE = INNODB;

/*this is for the many to many relationship b/w user and institution*/
CREATE TABLE user_institution(
  user_id bigint REFERENCES user,
  inst_id bigint REFERENCES institution,
  PRIMARY KEY(user_id, inst_id)
) ENGINE = INNODB;

/*this is for the many to many relationship b/w user and skills*/
CREATE TABLE user_skills(
  user_id bigint REFERENCES user,
  skill_id bigint REFERENCES skills,
  PRIMARY KEY(user_id, skill_id)
) ENGINE = INNODB;
