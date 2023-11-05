SELECT 
    c.name AS CategoryName,
    SUM(ip.quantity * p.price) AS TotalRevenue
FROM 
    categories c
JOIN 
    products p ON c.id = p.categories_id
JOIN 
    order_item ip ON p.id = ip.product_id
GROUP BY 
    c.name
ORDER BY 
    TotalRevenue DESC;