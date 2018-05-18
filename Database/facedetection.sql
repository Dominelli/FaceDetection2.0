-- Dump della struttura del database facedetection
DROP DATABASE IF EXISTS facedetection;
CREATE DATABASE IF NOT EXISTS facedetection
USE facedetection;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella facedetection.configurazione
DROP TABLE IF EXISTS impostazioni;
CREATE TABLE IF NOT EXISTS impostazioni (
  Testo varchar(50),
  Valore decimal(18, 0) DEFAULT NULL,
  PRIMARY KEY (Testo)
);

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella facedetection.configurazione
DROP TABLE IF EXISTS inserimento_facce;
CREATE TABLE IF NOT EXISTS inserimento_facce (
  ID_Facce int(11) NOT NULL AUTO_INCREMENT,
  Nome varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
);

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella facedetection.webcam
DROP TABLE IF EXISTS tempo_visita;
CREATE TABLE IF NOT EXISTS tempo_visita (
  ID_TempVis int(11) NOT NULL AUTO_INCREMENT,
  Inizio time DEFAULT NULL,
  Fine time DEFAULT NULL,
  DataCom date DEFAULT NULL,
  ID_Facce int(11) NOT NULL,
  PRIMARY KEY (ID_TempVis),
  FOREIGN KEY (ID_facce) REFERENCES inserimento_facce (ID_facce),
);