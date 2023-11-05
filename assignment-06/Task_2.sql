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