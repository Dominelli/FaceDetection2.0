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
| 08:20 - 11:35 | scrittura codice delle query per collegare il form al database (insert sulla tabella inserimento_facce, che tiene traccia del nome e di un identificatore e insert sulla tabella tempo_visita, che tiene traccia della data e del tempo che una faccia rimane davanti alla webcam). |
| 13:15 - 15:00 | prova del file .exe sul rasberry usando mono |
| 15:00 - 16:30 | ricerca di un modo per esportare il progetto in un file eseguibile compatibile con rasbian e installazione di un'altra libreria che migliora leggermente il facedetection (EmguCV.CvEnum) |



##  Problemi riscontrati e soluzioni adottate
1. Windows IoT non funziona quindi ho installato raspbian
2. Mono non funzionava perche la guida che stavo seguendo era del 2013 e nel frattempo hanno aggiornato il pacchetto mono cambiando le configurazioni. Cercando guide dell ultimo hanno ho trovato che il nuovo comando per la compliazione é mcs.

##  Punto della situazione rispetto alla pianificazione
- Nei tempi

## Programma di massima per la prossima giornata di lavoro
- Finire il progetto

