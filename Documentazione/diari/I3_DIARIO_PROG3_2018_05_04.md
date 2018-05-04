# PROGETTO | Diario di lavoro - 04.05.2018
##### Gionata Battaglioni
##### Lucas Previtali
### Canobbio, 04.05.2018]

## Lavori svolti


 [GIONATA](https://github.com/GioBat)

| Orario        | Lavoro svolto                                                |
| ------------- | ------------------------------------------------------------ |
| 08:15 - 11:35 | Ho provato a installare Windows 10 IoT sul raspberry scaricando i vari pacchetti e programmi, ma purtroppo non ha funzionato anche dopo svariati tentativi, quindi ho installato raspbian|
| 13:15 - 15:00 | Una volta installato raspbian mi sono informato su mono, un programma che permette di far partire gli .exe su linux|
| 15:00 - 16:30 | Dopo essermi informato e aver installato i pacchetti adeguati cioè mono-runtime e mono-complite ho seguito una guida e ho scoperto che prendendo un file .cs eseguendo il comando sudo mcs <nome file .cs> compliava il codice e poi facendo un sudo mono <nome file .exe> il tutto funziona, Ora il raspberry é pronto|


[LUCAS](https://github.com/lucasprevitali)


| Orario        | Lavoro svolto |
| ------------- | ------------- |
| 08:20 - 11:35 | prova di collegamento della pagina dei grafici al database .mdf (che funziona solo con l'estensione php_pdo_sqlsrv.dll e modificando il file php.ini|
| 13:15 - 15:00 | prova di inserimento di dati da c# verso il database e lettura dei dati dalla pagina dei grafici |
| 15:00 - 16:30 | risoluzione di errori generati dalla lettura dei dati (errore di compatibiità tra time, datetime e string) e di una query che prevede una join. |



##  Problemi riscontrati e soluzioni adottate
1. Windows IoT non funziona quindi ho installato raspbian
2. Mono non funzionava perche la guida che stavo seguendo era del 2013 e nel frattempo hanno aggiornato il pacchetto mono cambiando le configurazioni. Cercando guide dell ultimo hanno ho trovato che il nuovo comando per la compliazione é mcs.
3. Per potersi collegare a un database mdf (lato server) php usa la funzione sqlsrv_connect. Questa funzione non è implementata direttamente da php e necessita l'installazione dell'estensione php_pdo_sqlsrv.dll (versione 32 bit per php 7.0). Questo file va messo nella directory php/ext/ e va aggiunto alla lista di estensioni nel file php.ini (extension=php_pdo_sqlsrv_7_ts.dll).
4. per trasformare un oggetto datetime in string in php bisogna usare la funzione $date->format("formato").

##  Punto della situazione rispetto alla pianificazione
- Nei tempi

## Programma di massima per la prossima giornata di lavoro
- Finire il progetto

