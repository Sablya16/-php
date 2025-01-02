CREATE DATABASE student_management;


USE student_management;


CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    enrollment_date DATE NOT NULL,
    scholarship DECIMAL(10, 2) DEFAULT 0.00
);


CREATE TABLE debts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    subject VARCHAR(255) NOT NULL,
    debt_amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE
);


CREATE TABLE grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    subject VARCHAR(255) NOT NULL,
    grade INT CHECK (grade BETWEEN 1 AND 5),
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE
);


CREATE TABLE expulsion_list (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    reason TEXT NOT NULL,
    expulsion_date DATE NOT NULL,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE
);


INSERT INTO students (full_name, enrollment_date, scholarship) VALUES
('Иван Иванов', '2022-09-01', 1500.00),
('Петр Петров', '2021-09-01', 2000.00),
('Анна Смирнова', '2020-09-01', 1800.00),
('Мария Кузнецова', '2023-09-01', 0.00),
('Дмитрий Соколов', '2019-09-01', 2500.00),
('Ольга Морозова', '2021-09-01', 2200.00),
('Николай Козлов', '2022-09-01', 0.00),
('Екатерина Белова', '2020-09-01', 1700.00),
('Алексей Орлов', '2023-09-01', 0.00),
('Татьяна Иванова', '2018-09-01', 3000.00);

INSERT INTO debts (student_id, subject, debt_amount) VALUES
(1, 'Математика', 2),
(2, 'Физика', 3),
(3, 'Химия', 2),
(4, 'История', 1),
(5, 'Биология', 1),
(6, 'Информатика', 5),
(7, 'География', 1),
(8, 'Литература', 2),
(9, 'Английский язык', 4),
(10, 'Физическая культура', 10);

INSERT INTO grades (student_id, subject, grade) VALUES
(1, 'Математика', 4),
(2, 'Физика', 5),
(3, 'Химия', 3),
(4, 'История', 2),
(5, 'Биология', 5),
(6, 'Информатика', 4),
(7, 'География', 3),
(8, 'Литература', 4),
(9, 'Английский язык', 5),
(10, 'Физическая культура', 2);

INSERT INTO expulsion_list (student_id, reason, expulsion_date) VALUES
(4, 'Невыполнение учебного плана', '2024-01-10'),
(10, 'Прогулы', '2024-01-15');
