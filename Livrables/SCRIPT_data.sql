INSERT INTO garage.rights (name) VALUES
('ADMIN'),
('STAFF');

INSERT INTO garage.users (right_id, firstname, lastname, email, password) VALUE
('1', 'Vincent', 'Parrot', 'vincent.parrot@garagevparrot.com', '$2y$10$Oz6iUzWHBD5y68h6zsQPo.TaJjS2D6BAyzNMZDaGEbbFuTrbsge4W'),
('2', 'Marie', 'LUUN', 'marie.luun@garagevparrot.com', '$2y$10$VMwH31XhITQoOEbcVVUJfOPxvRJYmJqKoNwHdB2TSCA2o7HCTXUr6');

INSERT INTO garage.timetables (hours) VALUES
('8h-12h et 14h-19h'),
('8h-19h'),
('9h-18h'),
('9h-12h et 14h-18h');

INSERT INTO garage.days (name, timetable_id) VALUES
('Lundi', 1),
('Mardi', 4),
('Mercredi', 3),
('Jeudi', 1),
('Vendredi', 2),
('Samedi', 1);

INSERT INTO garage.services (name, description) VALUES
('Entretien', 'Purge et changement des liquides de freins et de refroidissement'),
('Freins', 'Disques et plaquettes'),
('Pneus', 'Achat, pose et parallélisme'),
('Climatisation', 'Révision et recharge');

INSERT INTO garage.validations (valid) VALUES
('Non'),
('Oui');

INSERT INTO garage.commentaries (firstname, commentary, rating, valid_id) VALUES
('Hélène', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 5, 2),
('Raoul', 'Lorem ipsum dolor sit amet, adipiscing elit', 5, 1),
('Paul', 'Lorem ipsum dolor sit amet', 4, 2);

INSERT INTO garage.options (name) VALUES
('Peinture personnalisée'),
('Jantes'),
('Intérieur cuir'),
('Régulateur de vitesse');

INSERT INTO garage.equipments (name) VALUES
('Attache caravane'),
('Boite automatique'),
('Siège Chauffant'),
('Toit ouvrant');

INSERT INTO garage.cars_models (name,brand_id) VALUES
('Clio', 1),
('911', 2),
('R8', 3),
('TT', 3),
('Corvette', 4);

INSERT INTO garage.brands (name) VALUES
('Renault'),
('Porsche'),
('Audi'),
('Chevrolet');

INSERT INTO garage.colors (name) VALUES
('Rouge'),
('Jaune'),
('Bleu'),
('Blanche'),
('Noire');

INSERT INTO garage.doors (name) VALUES
('3 portes'),
('5 portes');

INSERT INTO garage.fuels (name) VALUES
('Essence'),
('Diesel'),
('Electrique');

INSERT INTO garage.cars (picture1, picture2, picture3, picture4, picture5, description, price, year, mileage, brand_id, model_id, color_id, door_id, fuel_id) VALUES
('views/pictures/corvette-1', 'views/pictures/corvette-2', 'views/pictures/corvette-3', 'views/pictures/corvette-4', 'views/pictures/corvette-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 50000, 2018, 100000, 4, 5, 2, 1, 1),
('views/pictures/audi-1', 'views/pictures/audi-2', 'views/pictures/audi-3', 'views/pictures/audi-4', 'views/pictures/audi-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 25000, 2015, 10000, 3, 3, 4, 1, 2),
('views/pictures/Clio-1', 'views/pictures/Clio-2', 'views/pictures/Clio-3', 'views/pictures/Clio-4', 'views/pictures/Clio-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 5000, 2018, 150000, 1, 1, 5, 2, 3);

INSERT INTO garage.car_option (option_id, car_id) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 2);

INSERT INTO garage.car_equipment (equipment_id, car_id) VALUES
(1, 1),
(1, 3),
(2, 2),
(3, 1);