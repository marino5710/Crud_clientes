CREATE TABLE clientes (
    cliente_id serial primary key not null,
    cliente_nombre varchar(60) not null,
    cliente_nit varchar(10) not null,
    cliente_situacion smallint not null default 1
);