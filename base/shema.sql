use FruitShop;

Create Table Category (
    id_category integer primary key auto_increment,
    nom_category varchar(100)
);

Create Table Products (
    id_product integer primary key auto_increment,
    nom_produit varchar(100) not null,
    description varchar(255) not null,
    illustration varchar(255) not null,
    price decimal(10,2) not null,
    sale_pourcentage integer not null,
    id_category integer not null, 
    foreign key (id_category) references Category(id_category)
);