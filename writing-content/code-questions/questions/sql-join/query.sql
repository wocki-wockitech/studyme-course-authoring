SELECT u.name, o.total
FROM users u
___ orders o ON o.user_id = ___
WHERE o.total > 100
ORDER BY o.total ___;
