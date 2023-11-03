SELECT 
    c.name AS CustomerName, 
    SUM(o.total_amount) AS TotalPurchaseAmount
FROM 
    customers c
JOIN 
    Orders o ON c.id = o.customer_id
GROUP BY 
    c.name
ORDER BY 
    TotalPurchaseAmount DESC
LIMIT 5;