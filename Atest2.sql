SELECT department.name 
FROM `department` 
LEFT JOIN 
    (SELECT count(id) as countworker, department_id 
        FROM worker 
        GROUP BY department_id) as workerc 
    ON (department.id=workerc.department_id) 
WHERE workerc.countworker >=5;







SELECT name, GROUP_CONCAT(t.id SEPARATOR ', ') as ids_worker
    FROM department LEFT JOiN (
        SELECT department_id, id
        FROM worker
    ) AS t ON department.id=t.department_id
GROUP BY name