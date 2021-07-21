SELECT RTRIM(LTRIM(CONCAT(evnt.newFirstName , ' ' , evnt.newLastName))) AS Name, evnt.newEmail AS Email, evnt.subscriber_question1 AS 'Mobile no', evnt.subscriber_question2 AS 'Parent DOB', evnt.subscriber_question9 AS 'Maternal Milk', evnt.subscriber_question3 AS 'Address', evnt.subscriber_question4 AS 'Postcode', evnt.subscriber_question5 AS 'City', evnt.subscriber_question7 AS 'State', evnt.subscriber_question12 AS 'TNC Nestlé Products Sdn Bhd', evnt.subscriber_question13 AS 'TNC Motherhood.com.my', evnt.subscriber_question14 AS 'Marketing and promotional information', IFNULL(bb.valid, 'incart') AS 'Item Status', evnt.subscriber_created_at AS 'Subscriber Date', bb.invoice_date as 'Checkout Date' FROM ps_events_subscriber AS evnt INNER JOIN motherhood_presta.ps_customer AS cust ON cust.email = evnt.newEmail LEFT JOIN ps_cart AS cart ON cart.id_customer = cust.id_customer LEFT JOIN ps_cart_product AS cart_prod ON cart.id_cart = cart_prod.id_cart LEFT JOIN ( select odr.id_order, odr.id_customer, odr.valid, odr.invoice_date , odr.current_state FROM ps_orders AS odr INNER JOIN ps_order_detail AS odr_detail ON odr.id_order = odr_detail.id_order WHERE odr_detail.product_id = 46857 ) bb ON bb.id_customer = cust.id_customer 

WHERE evnt.subscriber_event_id = 106 AND evnt.subscriber_created_at >= '2021-06-01 00:00:00' AND (cart_prod.id_product is null OR cart_prod.id_product = 46857) GROUP BY evnt.newEmail ORDER BY evnt.subscriber_created_at ASC LIMIT 0,1500









SELECT 
	cust.id_customer,
    evnt.subscriber_id,
    cart_prod.id_product,
    bb.current_state,
    RTRIM(LTRIM(CONCAT(evnt.newFirstName, ' ', evnt.newLastName))) AS Name,
    evnt.newEmail AS Email,
    evnt.subscriber_question1 AS 'Mobile no',
    evnt.subscriber_question2 AS 'Parent DOB',
    evnt.subscriber_question9 AS 'Maternal Milk',
    evnt.subscriber_question3 AS 'Address',
    evnt.subscriber_question4 AS 'Postcode',
    evnt.subscriber_question5 AS 'City',
    evnt.subscriber_question7 AS 'State',
    evnt.subscriber_question12 AS 'TNC Nestlé Products Sdn Bhd',
    evnt.subscriber_question13 AS 'TNC Motherhood.com.my',
    evnt.subscriber_question14 AS 'Marketing and promotional information',
    IFNULL(bb.valid, 'incart') AS 'Item Status',
    evnt.subscriber_created_at AS 'Subscriber Date',
    bb.invoice_date AS 'Checkout Date'
FROM
    ps_events_subscriber AS evnt
        INNER JOIN
    motherhood_presta.ps_customer AS cust ON cust.email = evnt.newEmail
        LEFT JOIN
    ps_cart AS cart ON cart.id_customer = cust.id_customer
        LEFT JOIN
    ps_cart_product AS cart_prod ON cart.id_cart = cart_prod.id_cart
        LEFT JOIN
    (SELECT 
        odr.id_order,
            odr.id_customer,
            odr.valid,
            odr.invoice_date,
            odr.current_state
    FROM
        ps_orders AS odr
    INNER JOIN ps_order_detail AS odr_detail ON odr.id_order = odr_detail.id_order
    WHERE
        odr_detail.product_id = 46857) bb ON bb.id_customer = cust.id_customer
WHERE
    evnt.subscriber_event_id = 106
        AND evnt.subscriber_created_at >= '2021-06-01 00:00:00'
        AND (cart_prod.id_product IS NULL
        OR cart_prod.id_product = 46857)
        AND (cart_prod.id_product is null)
        AND (bb.current_state = 0 OR bb.current_state is null)
        AND cust.id_customer NOT IN (
        
				SELECT cart1.id_customer FROM  ps_cart AS cart1 LEFT JOIN   
				 ps_cart_product AS cart_prod1 ON cart1.id_cart = cart_prod1.id_cart
				WHERE cart_prod1.id_product = 46857
        )
GROUP BY evnt.newEmail
ORDER BY evnt.subscriber_created_at ASC

