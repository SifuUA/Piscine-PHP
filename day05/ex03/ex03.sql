INSERT
INTO
    ft_table(`login`, `creation_date`, `group`)
SELECT
    `last_name`,
    `birthdate`,
    'other'
FROM
    `user_card`
WHERE
    `user_card`.`last_name` LIKE '%a%' AND LENGTH(`user_card`.`last_name`) < 9
ORDER BY
    `user_card`.`last_name` ASC
LIMIT 10