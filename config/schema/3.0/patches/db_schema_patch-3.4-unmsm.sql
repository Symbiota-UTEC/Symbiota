INSERT INTO `schemaversion` (versionnumber) values ("3.4-unmsm");

ALTER TABLE `omoccurrences`
    ADD COLUMN microclimate VARCHAR(64) DEFAULT NULL,
    ADD COLUMN endemism_level VARCHAR(32) DEFAULT NULL;
