
# DROP DATABASE nombre; //es para eliminar una base de datos
# DROP TABLE nombre; // es para eliminar una tabla
# DELETE FROM nombre; //es para eliminar el contenido de una tabla
# TRUNCATE TABLE nombre; //es para limpiar totalmente una tabla, el index vuelve a 0

CREATE DATABASE IF NOT EXISTS drugstore;
USE drugstore;

CREATE TABLE IF NOT EXISTS usuarios(
	id_usuario INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre_apellido VARCHAR(50) NOT NULL,
    usuario VARCHAR(20) NOT NULL,
    contrasenia VARCHAR(20) NOT NULL,
    PRIMARY KEY(id_usuario)
)ENGINE=INNODB;

INSERT INTO usuarios(nombre_apellido,usuario,contrasenia) VALUES ('Javier Lerma','admin','1234');

CREATE TABLE IF NOT EXISTS clientes(
	id_cliente INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre_apellido VARCHAR(50) NOT NULL,
    dni VARCHAR(10) NOT NULL,
    telefono VARCHAR(20),
    PRIMARY KEY(id_cliente)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS proveedores(
	id_proveedor INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre_proveedor VARCHAR(50) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    direccion VARCHAR(50),
    localidad VARCHAR(50),
    provincia VARCHAR(50),
    PRIMARY KEY(id_proveedor)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS marcas(
	id_marca INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre_marca VARCHAR(20) NOT NULL,
    habilitada INT(1) NOT NULL,
    PRIMARY KEY(id_marca)
)ENGINE=INNODB;

INSERT INTO marcas(nombre_marca,habilitada) VALUES ("Arcor",1);
INSERT INTO marcas(nombre_marca,habilitada) VALUES ("Bagley",1);
INSERT INTO marcas(nombre_marca,habilitada) VALUES ("Quilmes",0);

CREATE TABLE IF NOT EXISTS articulos(
	id_articulo INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre_articulo VARCHAR(20),
    PRIMARY KEY(id_articulo),
    marcas_id_marca INT(11) UNSIGNED NOT NULL,
    FOREIGN KEY(marcas_id_marca) REFERENCES marcas(id_marca)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS facturas(
	id_factura INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
	num_factura INT(11),
	total INT(11),
    PRIMARY KEY(id_factura),
    usuarios_id_usuario INT(11) UNSIGNED NOT NULL,
    clientes_id_cliente INT(11) UNSIGNED NOT NULL,
    FOREIGN KEY(usuarios_id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY(clientes_id_cliente) REFERENCES clientes(id_cliente)
)ENGINE=INNODB; 

CREATE TABLE IF NOT EXISTS detalle_facturas(
	#id_detalle INT(11) UNSIGNED NOT NULL,
	cantidad INT(11) UNSIGNED NOT NULL,
	precio INT(111) UNSIGNED NOT NULL,
    facturas_id_factura INT(11) UNSIGNED NOT NULL,
    articulos_id_articulo INT(11) UNSIGNED NOT NULL,
    PRIMARY KEY(facturas_id_factura,articulos_id_articulo),
    FOREIGN KEY(facturas_id_factura) REFERENCES facturas(id_factura),
    FOREIGN KEY(articulos_id_articulo) REFERENCES articulos(id_articulo)
)ENGINE=INNODB;