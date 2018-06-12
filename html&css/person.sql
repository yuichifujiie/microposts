Create table kadaidb.person(
    id int(11) Not Null Primary key AUTO_INCREMENT,
    name varchar(50),
    age int(11),
    created_at timestamp Not Null Default current_timestamp
);
