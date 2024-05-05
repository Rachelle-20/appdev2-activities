-- Creating a Database
CREATE DATABASE Company;

-- Selecting a Database
USE Company;

-- Creating a Table
CREATE TABLE IF NOT EXISTS Employees (
    EmployeeID INT PRIMARY KEY,
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    Age INT,
    Department VARCHAR(50)
);

-- Inserting Data into the Table
INSERT INTO Employees (EmployeeID, FirstName, LastName, Age, Department) VALUES
(1, 'John', 'Doe', 30, 'IT'),
(2, 'Jane', 'Smith', 25, 'HR'),
(3, 'Michael', 'Johnson', 35, 'Finance'),
(4, 'Emily', 'Brown', 28, 'Sales'),
(5, 'David', 'Williams', 32, 'Operations');

-- Viewing Data
SELECT * FROM Employees;

-- Updating Data
UPDATE Employees SET Department = 'Marketing' WHERE EmployeeID = 2;

-- Deleting Data
DELETE FROM Employees WHERE EmployeeID = 3;

-- Dropping the Table
DROP TABLE Employees;
