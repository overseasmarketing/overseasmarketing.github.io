-- CREATE A 'admin_users' TABLE
CREATE TABLE
    `admin_users` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(32) NOT NULL,
        `username` VARCHAR(32) NOT NULL,
        `password` VARCHAR(32) NOT NULL,
        `date` VARCHAR(32) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

-- ADD TEST USER AT 'admin_users'
INSERT INTO
    `admin_users` (`id`, `name`, `username`, `password`, `date`)
VALUES
    (NULL, '', '', '', '');