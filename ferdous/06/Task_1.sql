SELECT 
    COUNT(`orders`.id) AS TotalOrders, 
    customers.name AS Name, 
    customers.email AS Email, 
    customers.location AS Location 
FROM 
    `orders`
LEFT JOIN 
    customers 
ON 
    `orders`.customer_id = customers.id 
GROUP BY 
    customers.id
ORDER BY 
    TotalOrders DESC;