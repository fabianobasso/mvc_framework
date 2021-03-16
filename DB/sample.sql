-- SQLite
create table if not exists produto(
    id integer primary key autoincrement,
    descricao text not null,
    preco decimal(10,2) not null
);

insert into produto(descricao,preco) values('Cama Box', 1000.50);
insert into produto(descricao,preco) values('Guarda Roupa', 805.99);
insert into produto(descricao,preco) values('Armario', 350.00);
insert into produto(descricao,preco) values('TV 32 polegadas', 1500.85);
insert into produto(descricao,preco) values('Sofá de 5 lugares', 2800.30);
insert into produto(descricao,preco) values('Mesa de centro', 100.00);

create table if not exists sobre_nos(
    id integer primary key autoincrement,
    descricao text not null,
    titulo text not null
);

insert into sobre_nos(descricao,titulo) values('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam tempore fuga minus libero tempora tenetur aperiam necessitatibus illum. Facere, quo?','Visão');
insert into sobre_nos(descricao,titulo) values('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam tempore fuga minus libero tempora tenetur aperiam necessitatibus illum. Facere, quo?','Missão');
insert into sobre_nos(descricao,titulo) values('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam tempore fuga minus libero tempora tenetur aperiam necessitatibus illum. Facere, quo?','Valores');