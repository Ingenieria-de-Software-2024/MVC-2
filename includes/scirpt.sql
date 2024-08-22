CREATE TABLE PRODUCTOS(
    PRODUCTO_ID SERIAL NOT NULL,
    PRODUCTO_NOMBRE VARCHAR(200),
    PRODUCTO_PRECIO DECIMAL(10, 2),
    PRODUCTO_SITUACION SMALLINT DEFAULT 1,
    PRIMARY KEY (PRODUCTO_ID)
);

CREATE TABLE USUARIO(
    USU_ID SERIAL NOT NULL,
    USU_NOMBRE VARCHAR(50),
    USU_CATALOGO INTEGER,
    USU_PASSWORD VARCHAR(50),
    USU_SITUACION SMALLINT DEFAULT 1,
    PRIMARY KEY (USU_ID)
);

CREATE TABLE APLICACION(
    APP_ID SERIAL NOT NULL,
    APP_NOMBRE VARCHAR(75),
    APP_SITUACION SMALLINT DEFAULT 1,
    PRIMARY KEY (APP_ID)
);

CREATE TABLE ROL (
    ROL_ID SERIAL NOT NULL,
    ROL_NOMBRE VARCHAR(75),
    ROL_NOMBRE_CT VARCHAR(25),
    ROL_APP INTEGER,
    ROL_SITUACION SMALLINT DEFAULT 1,
    PRIMARY KEY (ROL_ID),
    FOREIGN KEY (ROL_APP) REFERENCES APLICACION(APP_ID)
);

CREATE TABLE PERMISO (
    PERMISO_ID SERIAL NOT NULL,
    PERMISO_USUARIO INTEGER,
    PERMISO_ROL INTEGER,
    PERMISO_SITUACION SMALLINT DEFAULT 1,
    PRIMARY KEY (PERMISO_ID),
    FOREIGN KEY (PERMISO_USUARIO) REFERENCES USUARIO (USU_ID),
    FOREIGN KEY (PERMISO_ROL) REFERENCES ROL (ROL_ID)
);
