# PROGETTO | Diario di lavoro - 27.04.2018
##### Gionata Battaglioni
##### Lucas Previtali
### Canobbio, [27.04.2018]

## Lavori svolti


 [GIONATA](https://github.com/GioBat)

| Orario        | Lavoro svolto                                                |
| ------------- | ------------------------------------------------------------ |
| 08:15 - 11:35 | Ripresa raspberry, costruzione postazione di lavoro, pulizia del raspberry con vari upgrade e update, eliminazione dei programmi screach-libreoffice-wolfram-minecraft-sonic. Ora il raspberry é notevolmente più veloce. |
| 13:15 - 15:00 | prova del file .exe sul rasberry usando mono |
| 15:00 - 16:30 | ho provato a utilizzare mono usando programmi paralleli per far funzionare il .exe, ma dopo vari programmi e svariate ricerche ho deciso di disinstallare raspbian e ho installato windown 10 IoT su raspberry in modo da facilitare l utilizzo dei .exe |


[LUCAS](https://github.com/lucasprevitali)


| Orario        | Lavoro svolto |
| ------------- | ------------- |
| 08:20 - 11:35 | scrittura codice delle query per collegare il form al database (insert sulla tabella inserimento_facce, che tiene traccia del nome e di un identificatore e insert sulla tabella tempo_visita, che tiene traccia della data e del tempo che una faccia rimane davanti alla webcam). |
| 13:15 - 15:00 | prova del file .exe sul rasberry usando mono |
| 15:00 - 16:30 | ricerca di un modo per esportare il progetto in un file eseguibile compatibile con rasbian e installazione di un'altra libreria che migliora leggermente il facedetection (EmguCV.CvEnum) |



##  Problemi riscontrati e soluzioni adottate
1. gli insert non funzionavano correttamente perché per aggiungere dei parametri usavo il medoto Parameters.Add (che è ormai obsoleto) invece di Parameters.AddWithValue
2. l'installazione di mono su rasbian usando il comando apt-get install mono-runtime non funzionava, su internet abbiamo trovato un comando molto simile (apt-get install mono-complete) che ci ha permesso di eseguire l'installazione correttamente.
3. Per facilitare l'utilizzo dei file eseguibili .exe su rasberry, abbiamo deciso di installarci un sistema windows (10IOT), l'installazione però probabilmente non è stata eseguita in modo corretto e questo ha generato un errore che non permetteva di proseguire.

##  Punto della situazione rispetto alla pianificazione
- Nei tempi

## Programma di massima per la prossima giornata di lavoro
- ottimizazione del database
- terminare l'installazione di Windows10IOT su raspberry
- prova del programma su rasberry
- inizio collegamento tra il database e la pagina dei grafici
