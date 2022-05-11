CREATE TABLE profiles (
    id int,
    f_name varchar(255),
    m_name varchar(255),
    l_name varchar(255),
    marital_status varchar(255),
    email_add varchar(255),
    phone_line int(15),
    address1 varchar(255),
    address2 varchar(255),
    city varchar(255),
    country_of_residence(255),
    dob date,
    nationality varchar(255)
);

CREATE TABLE docs (
    id int,
    result_name1 varchar(255),
    result_name2 varchar(255),
    result_name3 varchar(255),
    email_add varchar(255)
);

CREATE TABLE applications (
    id int,
    purpose varchar(255),
    destination_country varchar(255),
    season_of_travel varchar(255),
    year_of_travel varchar(255),
    institution_of_study varchar(255),
    email_add varchar(255)
);

CREATE TABLE progress (
    id int,
    application_status varchar(255),
    admission_status varchar(255),
    visa_status varchar(255),
    flight_status varchar(255),
    flight_status_date varchar(255),
    email_add varchar(255)
);