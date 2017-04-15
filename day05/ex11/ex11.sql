SELECT
    UPPER(`user_card`.`last_name`) AS `NAME`,
    `first_name`,
    `price`
FROM
    `member`
INNER JOIN `subscription` ON `subscription`.`id_sub` = `member`.`id_sub`
INNER JOIN `user_card` ON `user_card`.`id_user` = `member`.`id_user_card`
WHERE `subscription`.`price` > 40
ORDER BY
	UPPER(`user_card`.`last_name`), `user_card`.`first_name`
	