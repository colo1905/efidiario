CREATE TABLE efidiario_competicion (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, pais_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX pais_id_idx (pais_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE efidiario_pais (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE efidiario_competicion ADD CONSTRAINT efidiario_competicion_pais_id_efidiario_pais_id FOREIGN KEY (pais_id) REFERENCES efidiario_pais(id) ON DELETE CASCADE;
