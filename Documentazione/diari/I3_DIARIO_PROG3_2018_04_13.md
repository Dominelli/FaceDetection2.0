# PROGETTO | Diario di lavoro - 13.04.2018
##### Gionata Battaglioni
##### Lucas Previtali
### Canobbio, [13.04.2018]

## Lavori svolti


 [GIONATA](https://github.com/GioBat)

| Orario        | Lavoro svolto                                                |
| ------------- | ------------------------------------------------------------ |
| 08:15 - 11:35 | Messa a punto abiente di lavoro, download nuova libreria, aggiornamento docuementazione |
| 13:15 - 16:30 | Modifica Trello, scrittura schema ER, realizzazione del DataBase |


[LUCAS](https://github.com/lucasprevitali)


| Orario        | Lavoro svolto                                                |
| ------------- | ------------------------------------------------------------ |
| 08:20 - 09:05 | prove con c# per verificare il funzionamento della libreria Emgu|
| 9:05 - 15:00  | modifica e analisi di un [progetto](https://www.codeproject.com/Articles/239849/Multiple-face-detection-and-recognition-in-real) che permette di implementare il riconoscimento facciale (ad ogni faccia viene assegnato un nome) nel nostro face detection|
| 15:00 - 15:30 | commenti del docente riguardo al secondo progetto e assegnazione della nota |
| 15:30 - 16:30 | risoluzione di vari problemi che presenta il codice scaricato |



##  Problemi riscontrati e soluzioni adottate
1. La mia macchina virtuale (Gionata Battaglioni) non aveva abbastanza RAM per supportare il programma. Configurazioni cambiate, dando 8 GB di RAM al posto che 4 GB.
2. Alcuni problemi sulla progettazione del DB, risolto togliendo i campi superflui e aggiungendo una relazione molti-molti tra la tabella che salva il riconoscimento facciale e quella che memorizza il tempo della visita e la data.
3. Il progetto scaricato per il riconoscimento facciale usando c# presentava diversi errori riferiti a mancanze di riferimenti (il codice non era compatibile con la nostra versione di EmguCV). Per risolvere il problema ho cambiato la versione di Emgu e ho riaggiunto i riferimenti.
4. Il form non si aggiornava e quindi rendeva inutili le modifiche fatte (risoluzione al massimo e load del form con la finestra già ingrandita). Questo perchè c'erano degli errori di compilazione che non venivano notificati. Per risolverlo è bastato ricaricare il codice all'interno del progetto.
##  Punto della situazione rispetto alla pianificazione
- Nei tempi

## Programma di massima per la prossima giornata di lavoro
- Continuo scrittura del codice e implementazione DB 
- analisi del codice
- inizio collegamento con il database
