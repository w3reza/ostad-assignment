Write a SQL query to retrieve the product name, quantity, and total amount for each order item. Display the result in ascending order of the order ID.

SELECT 
    O.id AS OrderID, 
    P.name AS ProductName, 
    OI.quantity AS Quantity, 
    OI.quantity * OI.unit_price AS TotalAmount
FROM 
    orders O
JOIN 
    order_item OI ON O.id = OI.order_id
JOIN 
    products P ON OI.product_id = P.id
ORDER BY 
 O.id ASC;