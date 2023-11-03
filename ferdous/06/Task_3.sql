-- Active: 1698985470847@@127.0.0.1@3306@assignment_6
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