# PROGETTO | Diario di lavoro - 20.04.2018
##### Gionata Battaglioni
##### Lucas Previtali
### Canobbio, [20.04.2018]

## Lavori svolti


 [GIONATA](https://github.com/GioBat)

| Orario        | Lavoro svolto                                                |
| ------------- | ------------------------------------------------------------ |
| 08:15 - 11:35 | Verifica DataBase e aggiornamento. Modifica pagina dei grafici|
| 13:15 - 16:30 | Aggiornamento [trello](https://trello.com/b/P0MOy1lX/facedetection20), documentazione e diari, messa a punto di visual studio e trasferimento codice sorgente sulla nuova macchina vistuale. Rilettura codice e comprensione delle varie parti|


[LUCAS](https://github.com/lucasprevitali)


| Orario        | Lavoro svolto |
| ------------- | ------------- |
| 08:20 - 09:05 | rilettura e aggiunta commenti nel codice per aiutare la comprensione |
| 9:05 - 11:35  | risoluzione di errori dati da mancanze di riferimenti a librerie necessari per il codice e modifica del form (ingrandimento e aumento della risoluzione) |
| 13:15 - 16:30 | collegamento del codice c# al database e prova di alcuni insert|



##  Problemi riscontrati e soluzioni adottate
1. VisualStudio 2017 presenta erroi di sistema (GB), per isolare gli errori ho dovuto disinstallare il programma dal mio computer e rinstallaro. Questo procedimento ha preso diverso tempo.
2. la visualizzazione della webcam nel form era settata di default a una risoluzione molto bassa (320x240). Cambiando questa risoluzione il face detection lagga molto, quindi abbiamo scelto per intanto una via di mezzo tra una risoluzione molto alta e quella di default (640x480).
3. Per connettere il codice c# al database facedetection ho trovato due metodi: 
~~~
conn.ConnectionString = "Server=localhost;Database=facedetection;Trusted_Connection=True";
~~~
~~~
 conn = new SqlConnection("Data Source=.\\MSSQLSEVER;Initial Catalog=facedetection;" +
                " User ID= root; Password=");
~~~

entrambi i metodi davano un errore che non permetteva la connessione (Non riusciva a trovare l'istanza di SQLServer). Quindi ho reinstallato MySqlServer 5.7 e Microsoft SQL Server Management Studio.

4. la stringa di connessione funzionava solo con i database di sistema installati assieme a SQLServer (che sono database in formato .mdf), quindi ho dovuto ricreare il database facedetection in questo formato.

##  Punto della situazione rispetto alla pianificazione
- Nei tempi

## Programma di massima per la prossima giornata di lavoro
- Scrittura delle varie Query nel codice
- Collegamento nuovo database alla pagina dei grafici
