-- CREATE A 'admin_users' TABLE
CREATE TABLE
    `admin_users` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(32) NOT NULL,
        `username` VARCHAR(32) NOT NULL,
        `password` VARCHAR(32) NOT NULL,
        `last_login_date` VARCHAR(32) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

-- ADD TEST USER AT 'admin_users'
INSERT INTO
    `admin_users` (
        `id`,
        `name`,
        `username`,
        `password`,
        `last_login_date`
    )
VALUES
    (
        NULL,
        'Harshit Raheja',
        'harshit',
        'Harshit@2003',
        ''
    ),
    (
        NULL,
        'Ishwar Chawla',
        'ishwar',
        'Ishwar@2004',
        ''
    );