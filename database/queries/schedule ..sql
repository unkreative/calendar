CREATE TABLE `students` (
  `id` int,
  `first_name` varchar(255),
  `second_name` varchar(255),
  `iam` varchar(255),
  `schoolyear` int
);

CREATE TABLE `classes` (
  `id` int,
  `name` varchar(255),
  `schoolyear` int
);

CREATE TABLE `houses` (
  `id` int,
  `name` varchar(255),
  `house_number` int,
  `schoolyear` int
);

CREATE TABLE `entreprise` (
  `id` int,
  `name` varchar(255),
  `CEO` varchar(255),
  `schoolyear` int
);

CREATE TABLE `timetable` (
  `id` int,
  `interval` varchar(255),
  `schoolyear` int
);

CREATE TABLE `staff` (
  `id` int,
  `first_name` varchar(255),
  `second_name` varchar(255),
  `schoolyear` int
);

CREATE TABLE `students_classes` (
  `id` int,
  `student_id` int,
  `classes_id` int,
  `schoolyear` int
);

CREATE TABLE `classes_houses` (
  `id` int,
  `house_id` int,
  `classes_id` int,
  `schoolyear` int
);

CREATE TABLE `house_staff` (
  `id` int,
  `house_id` int,
  `staff_id` int,
  `function` varchar(255),
  `schoolyear` int
);

CREATE TABLE `student_entreprise` (
  `id` int,
  `student_id` int,
  `entreprise_id` int,
  `plage_1` int,
  `plage_2` int,
  `plage_3` int,
  `plage_4` int,
  `plage_5` int,
  `plage_6` int,
  `plage_7` int,
  `plage_8` int,
  `schoolyear` int
);

CREATE TABLE `tuteur` (
  `id` int,
  `first_name` varchar(255),
  `second_name` varchar(255),
  `house` varchar(255),
  `entreprise` varchar(255),
  `schoolyear` int
);

CREATE TABLE `tuteur_student` (
  `id` int,
  `student_id` int,
  `tuteur_id` int,
  `schoolyear` int
);

CREATE TABLE `entreprise_staff` (
  `id` int,
  `staff_id` int,
  `entreprise_id` int,
  `post` varchar(255),
  `schoolyear` int
);

CREATE TABLE `tuteur_house` (
  `id` int,
  `house_id` int,
  `tuteur_id` int,
  `schoolyear` int
);

ALTER TABLE `students_classes` ADD FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

ALTER TABLE `house_staff` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_1`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_2`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_3`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_4`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_5`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_6`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_7`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`plage_8`) REFERENCES `timetable` (`id`);

ALTER TABLE `student_entreprise` ADD FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

ALTER TABLE `classes_houses` ADD FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`);

ALTER TABLE `classes_houses` ADD FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`);

ALTER TABLE `house_staff` ADD FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`);

ALTER TABLE `students_classes` ADD FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`);

ALTER TABLE `tuteur_student` ADD FOREIGN KEY (`tuteur_id`) REFERENCES `tuteur` (`id`);

ALTER TABLE `tuteur_student` ADD FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

ALTER TABLE `entreprise_staff` ADD FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

ALTER TABLE `entreprise_staff` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `tuteur_house` ADD FOREIGN KEY (`tuteur_id`) REFERENCES `tuteur` (`id`);

ALTER TABLE `tuteur_house` ADD FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`);
