-- Tabla usuario
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    correo varchar(255) not null,
    usuario VARCHAR(50) UNIQUE not null,
    contrasena VARCHAR(255),
    tipo char(1),
    confirmado int,
    token varchar(255)
);

-- Tabla paciente
CREATE TABLE paciente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    fecha_nac VARCHAR(100),
    genero VARCHAR(10),
    direccion VARCHAR(255),
    telefono VARCHAR(20),
    id_ciudad INT,
    id_seguro INT,
    precion char(1),
    azucar char(1),
    renal char(1),
    FOREIGN KEY (id_ciudad) REFERENCES ciudad(id),
    FOREIGN KEY (id_seguro) REFERENCES seguro(id)
);

-- Tabla medico
CREATE TABLE medico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    especialidad VARCHAR(255),
    telefono VARCHAR(20)
);

-- Tabla medico_consultorio_ciudad
CREATE TABLE medico_consultorio_ciudad (
    id_medico INT,
    id_ciudad INT,
    id_clinica INT,
    FOREIGN KEY (id_medico) REFERENCES medico(id),
    FOREIGN KEY (id_ciudad) REFERENCES ciudad(id),
    FOREIGN KEY (id_clinica) REFERENCES clinica(id),
    PRIMARY KEY (id_medico, id_ciudad)
);

-- Tabla consulta
CREATE TABLE consulta (
    id_consulta INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT,
    id_medico INT,
    fecha_consulta DATE,
    diagnostico TEXT,
    tratamiento TEXT,
    costo DECIMAL(10, 2), -- Agregamos un campo para el costo de la consulta
    FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente),
    FOREIGN KEY (id_medico) REFERENCES medico(id_medico)
);

-- Tabla cita
CREATE TABLE cita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT,
    id_medico INT,
    fecha_cita DATE,
    hora_cita TIME,
    estado_cita VARCHAR(20),
    comentarios TEXT,
    FOREIGN KEY (id_paciente) REFERENCES paciente(id),
    FOREIGN KEY (id_medico) REFERENCES medico(id)
);

-- Tabla medico_seguro
CREATE TABLE medico_seguro (
    id_medico INT,
    id_seguro INT,
    FOREIGN KEY (id_medico) REFERENCES medico(id),
    FOREIGN KEY (id_seguro) REFERENCES seguro(id),
    PRIMARY KEY (id_medico, id_seguro)
);

-- Agregar una columna a las tablas paciente y medico para almacenar el ID de usuario
ALTER TABLE paciente
ADD COLUMN id_usuario INT,
ADD FOREIGN KEY (id_usuario) REFERENCES usuario(id);

ALTER TABLE medico
ADD COLUMN id_usuario INT,
ADD FOREIGN KEY (id_usuario) REFERENCES usuario(id);


CREATE TABLE horario_medico_consultorio (
    id_horario INT AUTO_INCREMENT PRIMARY KEY,
    id_medico INT,
    id_consultorio INT,
    dia_semana ENUM('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'),
    hora_inicio TIME,
    hora_fin TIME,
    FOREIGN KEY (id_medico) REFERENCES medico(id_medico),
    FOREIGN KEY (id_consultorio) REFERENCES consultorio(id_consultorio)
);

-- Tabla consultorio
CREATE TABLE consultorio (
    id_consultorio INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    direccion VARCHAR(255),
    id_clinica INT,
    FOREIGN KEY (id_clinica) REFERENCES clinica(id_clinica)
);