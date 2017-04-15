SELECT
    `last_name`,
    `first_name`,
    DATE_FORMAT(`birthdate`, '%Y-%m-%d')
FROM
    `user_card`
WHERE
    YEAR(`birthdate`) = 1989