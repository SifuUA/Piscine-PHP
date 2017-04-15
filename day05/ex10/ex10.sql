SELECT
    `title` AS `Title`,
    `summary` AS `Summary`,
    `prod_year`
FROM
    `film`
INNER JOIN `genre` ON `film`.`id_genre` = `genre`.`id_genre`
WHERE
    STRCMP(`genre`.`name`, 'erotic') = 0
ORDER BY
    `prod_year`
DESC
