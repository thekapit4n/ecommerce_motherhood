SELECT 
    pc.`id_product_comment`,
    (SELECT 
            COUNT(*)
        FROM
            `ps_product_comment_usefulness` pcu
        WHERE
            pcu.`id_product_comment` = pc.`id_product_comment`
                AND pcu.`usefulness` = 1) AS total_useful,
    (SELECT 
            COUNT(*)
        FROM
            `ps_product_comment_usefulness` pcu
        WHERE
            pcu.`id_product_comment` = pc.`id_product_comment`) AS total_advice,
    IF(c.id_customer,
        CONCAT(c.`firstname`,
                ' ',
                LEFT(c.`lastname`, 1)),
        pc.customer_name) customer_name,
    pc.`content`,
    pc.`grade`,
    pc.`date_add`,
    pc.title,
    tcd.approved AS isTester,
    pc.highlight,
    pc.img_url
FROM
    `ps_product_comment` pc
        LEFT JOIN
    `ps_customer` c ON c.`id_customer` = pc.`id_customer`
        LEFT JOIN
    ps_tester_campaign_header tch ON (tch.tester_product_id = pc.id_product
        OR tch.tester_real_product_id = pc.id_product)
        LEFT JOIN
    ps_tester_campaign_detail tcd ON tcd.customer_id = c.id_customer
        AND tcd.tester_id = tch.tester_id
        AND tcd.approved = 1
WHERE
    pc.deleted = 0
        AND (pc.`id_product` = 35641
        OR tch.tester_real_product_id = 35641)
        AND pc.`validate` = 1 
UNION SELECT 
    1000000 + crawl_id,
    '' AS useful,
    '' AS total_adv,
    customer_name,
    CONVERT( content USING UTF8) AS content,
    grade,
    date_add,
    title,
    0,
    0,
    NULL
FROM
    ps_product_comment_crawl
WHERE
    id_product = 35641
ORDER BY highlight DESC , `date_add` DESC