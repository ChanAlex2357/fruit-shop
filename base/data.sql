
-- Insérer des catégories
INSERT INTO Category (nom_category) VALUES 
('Fruits Tropicaux'),
('Fruits à Baies'),
('Agrumes'),
('Fruits à Noyau'),
('Fruits à Pépins');

-- Insérer des produits
INSERT INTO Products (nom_produit, description, illustration, price, sale_pourcentage, id_category) VALUES 
('Mangue', 'Une mangue juteuse et douce.', 'mangue.jpg', 1.50, 10, 1),
('Ananas', 'Un ananas frais et sucré.', 'ananas.jpg', 2.00, 15, 1),
('Papaye', 'Une papaye mûre et savoureuse.', 'papaye.jpg', 1.75, 5, 1),
('Banane', 'Des bananes fraîches et riches en potassium.', 'banane.jpg', 1.20, 20, 1),
('Fruit de la Passion', 'Un fruit exotique au goût unique.', 'fruit_passion.jpg', 3.00, 10, 1),
('Fraise', 'Des fraises sucrées et juteuses.', 'fraise.jpg', 2.50, 5, 2),
('Framboise', 'Des framboises riches en saveurs.', 'framboise.jpg', 3.00, 10, 2),
('Mûre', 'Des mûres délicieusement sucrées.', 'mure.jpg', 2.75, 8, 2),
('Bleuet', 'Des bleuets frais et juteux.', 'bleuet.jpg', 3.50, 15, 2),
('Groseille', 'Des groseilles acidulées et savoureuses.', 'groseille.jpg', 2.00, 20, 2),
('Orange', 'Des oranges juteuses et riches en vitamine C.', 'orange.jpg', 1.50, 10, 3),
('Citron', 'Des citrons acidulés et parfumés.', 'citron.jpg', 1.20, 5, 3),
('Pamplemousse', 'Des pamplemousses frais et juteux.', 'pamplemousse.jpg', 2.00, 12, 3),
('Clémentine', 'Des clémentines sucrées et juteuses.', 'clementine.jpg', 1.80, 10, 3),
('Mandarine', 'Des mandarines fraîches et savoureuses.', 'mandarine.jpg', 1.90, 8, 3),
('Pêche', 'Des pêches mûres et juteuses.', 'peche.jpg', 2.50, 10, 4),
('Prune', 'Des prunes sucrées et savoureuses.', 'prune.jpg', 2.20, 15, 4),
('Cerise', 'Des cerises fraîches et croquantes.', 'cerise.jpg', 3.00, 20, 4),
('Abricot', 'Des abricots doux et parfumés.', 'abricot.jpg', 2.75, 5, 4),
('Nectarine', 'Des nectarines sucrées et juteuses.', 'nectarine.jpg', 2.80, 10, 4),
('Pomme', 'Des pommes croquantes et savoureuses.', 'pomme.jpg', 1.50, 10, 5),
('Poire', 'Des poires douces et juteuses.', 'poire.jpg', 1.80, 12, 5),
('Coing', 'Des coings parfumés et savoureux.', 'coing.jpg', 2.50, 15, 5),
('Raisin', 'Des raisins frais et sucrés.', 'raisin.jpg', 3.00, 20, 5),
('Kaki', 'Des kakis doux et savoureux.', 'kaki.jpg', 2.75, 8, 5);