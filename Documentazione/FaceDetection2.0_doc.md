1. [Introduzione](#introduzione)
  - [Informazioni sul progetto](#informazioni-sul-progetto)
  - [Abstract](#abstract)
  - [Scopo](#scopo)
2. [Analisi](#analisi)
  - [Analisi del dominio](#analisi-del-dominio)
  - [Analisi dei mezzi](#analisi-dei-mezzi)
  - [Analisi e specifica dei requisiti](#analisi-e-specifica-dei-requisiti)
  - [Use case](#use-case)
  - [Pianificazione](#pianificazione)
3. [Progettazione](#progettazione)
  - [Design dell’architettura del sistema](#design-dell’architettura-del-sistema)
  - [Design dei dati e database](#design-dei-dati-e-database)
4. [Implementazione](#implementazione)
5. [Test](#test)
  - [Protocollo di test](#protocollo-di-test)
  - [Risultati test](#risultati-test)
  - [Mancanze/limitazioni conosciute](#mancanze/limitazioni-conosciute)
6. [Consuntivo](#consuntivo)
7. [Conclusioni](#conclusioni)
  - [Sviluppi futuri](#sviluppi-futuri)
  - [Considerazioni personali](#considerazioni-personali)
8. [Sitografia](#sitografia)
9. [Allegati](#allegati)


## Introduzione

### Informazioni sul progetto

 - **Progetto svolto da:** Gionata Battaglioni, Lucas Previtali
 - **Mandanti del progetto:** Luca Muggiasca
 - **Docente Responsabile:** Luca Muggiasca
 - **Scuola:** Arti e Mestieri Trevano
 - **Sezione:** Informatica
 - **Classe:** I3AA
 - **Data d’inizio:** 16.03.2018
 - **Termine della consegna:** 18.05.2018


### Abstract

Lucas and I decided to take over the project that we had carried out in groups. Since the project is not finished we have chosen to resume it and put it in place. To do this we decided to restart the whole project from the beginning.
It was not easy to redesign everything because initially this project was designed to be carried out by four people and we are two. So we had some problems with load balancing.
The result was what I expected since the beginning, our approach worked very well except, as said before, we had to invest maybe too much time consulting with various guides.


### Scopo

  Lo scopo del progetto è quello di realizzare un sistema di riconoscimento facciale tramite una webcam. Questo sistema serve per quantificare il numero di persone che visitano uno stand di Espoprofessioni, visto che il progetto é stato ripreso per la modifica di eventuali errori. Lo scopo resta lo stesso ma non serivarà più per Espoprofessioni ma per contare il numero di persone in base alle faccie riconosciute in generale. Appunto il sistema deve essere in grado di riconoscere le persone che entrano nel campo visivo della webcam.


## Analisi

### Analisi del dominio

  Il progetto completo verrà presentato alla prossima edizione di Espoprofessioni, perciò sarà presentato principalmente a un pubblico di ragazzi e ragazze non per forza appassionati di informatica (in generale il gli “utenti” saranno variegati). Il pubblico presente sarà lì soprattutto per vedere diverse professioni e molti saranno studenti. Per capire il funzionamento del sistema non bisogna essere per forza esperti o appassionati di informatica.


### Analisi e specifica dei requisiti

  Il committente richiede una pagina web che effettua un riconoscimento facciale. Una volta che la faccia viene riconosciuta dalla pagina viene salvata all`interno di una variabile e a sua volta salvata in un database. In base al numero di persone riconosciute e al tempo che le persone rimangono ferme davanti alla web cam viene redatto un grafico. Mentre un secondo grafico veiene redatto in base al numero di persone che sono state riconosciute dalla webcam e alla fascia oraria. 


| ID           | REQ-001                                                      |
| ------------ | ------------------------------------------------------------ |
| **Nome**     | Valutazione della libreria da utilizzare                     |
| **Priorità** | 1                                                            |
| **Versione** | 1.0                                                          |
| **Note**     |                                                              |
| **Sub-ID**   | Requisito                                                    |
| **001**      | Valutare le varie librerie che permettono il traking         |

  

| ID           | REQ-002                                                  |
| ------------ | -------------------------------------------------------- |
| **Nome**     | Creazione di un supporto grafico del programma           |
| **Priorità** | 1                                                        |
| **Versione** | 1.0                                                      |
| **Note**     |                                                          |
| **Sub-ID**   | Requisito                                                |
| **001**      | Implementare una rappresentazione della webcam   |
| **002**      | Organizzare e realizzare una interfaccia grafica |

| ID           | REQ-003                                                      |
| ------------ | ------------------------------------------------------------ |
| **Nome**     | Creazione pagina Web per grafici                             |
| **Priorità** | 1                                                            |
| **Versione** | 1.0                                                          |
| **Note**     |                                                              |
| **Sub-ID**   | Requisito                                                    |
| **001**      | Implementare la lettura dal DB                       |
| **002**      | Creazione dei grafici: Numero di persone rilevate in ogni ora del giorno. Tempo medio di una persona di fronte all’obiettivo. |
| **003**      | Utilizzare un form di log in per il REQ-005    |

| ID           | REQ-004                                                      |
| ------------ | ------------------------------------------------------------ |
| **Nome**     | Ricerca di nuovi volti                                       |
| **Priorità** | 1                                                            |
| **Versione** | 1.0                                                          |
| **Note**     |                                                              |
| **Sub-ID**   | Requisito                                                    |
| **001**      | Scegliere la libreria migliore per il tracking dei volti: openCV, tracking.js,emgu.cv |
| **002**      | Implementare il codice per l’individuazione dei dati tramite libreria. |
| **003**      | La webcam deve eseguire la ricerca di nuovi volti ogni 15 secondi e se rileva dei volti nelle coordinate vicine a quelle vecchie, non ne terrà conto. |


| ID           | REQ-005						      |
| ------------ | ------------------------------------------------------------ |
| **Nome**     | Utilizzo del prodotto su RaspBerry                           |
| **Priorità** | 1                                                            |
| **Versione** | 1.0                                                          |
| **Note**     |                                                              |
| **Sub-ID**   | Requisito                                                    |
| **001**      | Allestire un webserver Linux su RaspBerry            |
| **002**      | Trasportare l’intero codice del progetto su RaspBerry  |

 



### Pianificazione

Questo é il Gantt che abbiamo realizzato in base alla lista dei requisiti che abbiamo redatto e al tempo a disposizione.

![Gantt Preventivo](immagini/GANTT_preventivo.jpg)




### Analisi dei mezzi
Come prodotti fisici abbiamo usato i seguenti:

| Proodotto     |  Caratteristiche |
| :------------ | ---------------: |
| Raspberry Pi3 | so. raspbian 9.0 |
| tastiera K200 |         Logitech |
| Mouse         |           Lenovo |
| Monitor HDMI  |             Asus |
| Webcam (C270) |         Logitech |

Il Raspberry lo abbiamo utilizzato unicamente come mezzo di supporto del programma. Appunto il programma vero e proprio é stato realizzato una libreria per C# chiamata OpenCV.

| Pacchetto | Versione |
| :-------- | -------: |
| OpenCV    |   3.4.1 |
| Microsoft Visual Studio 2017 Enterprise |   15.7 |



### Analisi dei costi

#### Costo per persona:
È stimato che un apprendista al nostro stesso livello guadagni circa 80 franchi all`ora.

| Costo per ora: | Ore  | Totale   |
| -------------- | ---- | -------- |
| 60             | 72   | 4320 fr. |


#### Costo totale (dipendenti):
Essendo quattro persone a lavorare in questo progetto, i costi vanno moltiplicati.

| Costo per ora | Ore  | persone | Totale   |
| ------------- | ---- | ------- | -------- |
| 60            | 48   | 2       | 8640 fr. |


#### Costo totale:
Facendo una somma dei vari totali e aggiungendo il costo di 29 fr. per la webcam arriviamo al costo totale finale di questo progetto cioè 8669 fr.


## Progettazione

### Design dei dati e database

Il database che abbiamo creato è molto basico. Presenta due tabelle, la tabella Amministratore dove vengono contenuti i seguenti campi.

```sql

(NomeUtente(PK),Id_WebCam(FK),Password,Densità_Bordo,
 Conteggio_Secondi, Dimensione_step,Scala_iniziale)
 
```

Mentre la seconda tabella chiamata WebCam che contiene:

```sql

(Id_Webcam(PK),Orario_inizio,Orario_fine,Data)

```
Le due tabelle sono collegate tramite una relazione molti a uno chiamata "può avere".

### Schema E-R, schema logico e descrizione.

Questo é il diagramma ER del database generato per consentire lo scambio dei dati tramite le varie pagine web.

![Pagina WebCam](immagini/schemaER.png)

### Design delle interfacce

Prima di iniziare a scrivere il codice abbiamo scelto assime al gruppo una struttura base sel sito, di come vorremmo che esso diventi. 
Per la pagina che riguarda la webcam, cioè dove l`utente vede sè stesso abbiamo pensato a un approccio molto minimale.

![Pagina WebCam](immagini/MockupCam.PNG)

Mentre per la pagina dove verranno inseriti i grafici abbiamo pensato a un approccio un po meno minimale ma più adatto alla situazione.

![Pagina Gafici](immagini/MockuoGrafici.png)

Per la terza e ultima pagina cioè la pagina dove l` amminitratore potrà cambiare le impostazioni della webcam o della pagina. Come prima cosa dovrà coparire la pagina di login:

![Pagina Gafici](immagini/Mockup_Login.png)

Secondariamente una volta effettuato il login. L` amministratore avrà il diritto di cambiare le impostazioni a suo piacimento.

![Pagina Gafici](immagini/Mockup_Settings.png)

## Implementazione

### Supporto

Inizialmente abbiamo optato per utilizzare un raspberry dove avremmo caricato tutti i file inerenti al progetto. Così abbiamo recuperato in raspberry e lo abbiamo allestito a mo di webserver. Una volta eseguiti i test su raspberry abbiamo notato che non era abbastanza potente per poter ospitare un progetto come il nostro. Quindi abbiamo spostato tutto su un computer portatile offertoci dalla scuola. Sul computer abbiamo scaricato un programma che lo rende webserver chiamato [USB_SERVER](http://www.usbwebserver.net/) versione 8.5. Una volta fatto ciò abbiamo caricato.

### Creazione pagina WebCam

La pagina della WebCam è la pagina che dirige tutte le operazioni.
Prima di tutto abbiamo scelto di utilizzare la libreria di [tracking.js](https://trackingjs.com/) per gestire il riconoscimento facciale. Da una piccola [struttura di base trovata sul sito principale](https://trackingjs.com/examples/face_camera.html) è ora necessario aggiungere una qualche riga di codice in più necessaria alla corretta registrazione dei volti sul DataBase:
1. Id univoco per ogni persona rilevata dalla WebCam.
2. Orario nel quale una persona viene specchiata.
3. Orario di fine del tracking
4. Giorno in cui è stato eseguito il tracking

**Ognuna di queste informazioni saranno poi fondamentali per la creazione dei grafici di statistica!**

Così è come la pagina mostrala sua forma:

![SO WebCam](immagini/paginaWebCam.PNG)

Con il corretto rilevamento di ogni faccia sullo schermo (contenuto in un oggetto "rect"), viene eseguito un codice JavaScript. Per questa operazione si utilizza un canvas su HTML (qui chiamato "context") che permette di disegnare sullo schermo figure in maniera semplice.
Il codice qui riportato permette di definire i colori del rettangolo (bordo e testo), disegnarlo e scrivere del testo di informazioni (come l'ID attribuito alle facce e le coordinate che lo localizzano).

~~~javascript
context.strokeStyle = 'red';
context.strokeRect(rect.x, rect.y, rect.width, rect.height);
context.font = '13px Helvetica';
context.fillStyle = "#fff";
context.fillText('x: ' + rect.x + 'px', rect.x + rect.width + 5, rect.y + 11);
context.fillText('y: ' + rect.y + 'px', rect.x + rect.width + 5, rect.y + 22);
context.fillText('id: ' + ID, rect.x + rect.width + 5, rect.y + 33);
~~~

Per ciò che riguarda il passaggio dei dati al database ci siamo dovuti collegare al database tramite php ed abbiamo preso i dati ricevuti dalla pagina e li abbiamo inseriti nell'apposita tabella del database.

~~~php
$sql = "INSERT INTO webcam (Orario_inizio, Orario_fine, Data) 
		VALUES (".$Orario_inizio.", ".$Orario_fine.", ".$Data.");";
if($conn->query($sql) == FALSE) {
  echo "invio non riuscito!";
}

~~~

### Creazione pagina Grafici
La pagina grafici esegue una continua sincronizzazione sul DataBase affinchè tutti i dati siano sempre aggiornati.
La sua funzione è quella di mostrare 2 grafici:
1. Mostrare la quantità di persone specchiati nella WebCam per ogni fascia oraria.
2. Mostrare il tempo medio di tracking per ogni fascia oraria.

Tramite una ricerca su Internet siamo venuti a conoscenza di una libreria specializzata nel dispaly di grafici non troppo dispendiosa per quanto riguarda le nostre singole conoscenze personali: [Chart.js](http://www.chartjs.org/).

Per creare i grafici mi sono dapprima connesso al database ed ho preso ed inserito dentro degli array i dati della data attuale, dell'inizio e della fine di sessione.

~~~php
$sql = "SELECT Orario_inizio, Orario_fine, Data FROM webcam";
$result = $conn->query($sql);
			
$Orario_inizio=array();
$Orario_fine=array();
$Data=array();
$arrayIndex = 0;
			
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		array_push($Orario_inizio, $row["Orario_inizio"]);
		array_push($Orario_fine, $row["Orario_fine"]);
		array_push($Data, $row["Data"]);
	}
} else {
	echo "0 results";
}
~~~

In seguito ho fatto un counter che permettesse di calcolare quante persone utilizzano l'applicazione in vari fasci d'orario. Inoltre ho utilizzato una tecnica simile anche per calcolare la media della durata di sessione per ogni utente.
Dopo aver eseguito tutti i calcoli ed aver inserito i risultati negli array, ho creato i grafici ed inserito i dati. Per inserirli ho utilizzato più volte una tecnica di programmazione che permette l'utilizzo delle variabili presenti nella porzione di codice php e l'utilizzo diretto nella parte javascript, e l'ho inserita all'interno della parte "data" della creazione del grafico. 


~~~javascript

var dataNumeroVisite = {
  labels: ["09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00",             "22:00"],
	datasets: [{
      	label: "Numero di visite",
				backgroundColor: "rgba(255,99,132,0.2)",
				borderColor: "rgba(255,99,132,1)",
				borderWidth: 2,
				hoverBackgroundColor: "rgba(255,99,132,0.4)",
				hoverBorderColor: "rgba(255,99,132,1)",
				data: [<?php echo $countUsers[0]; ?>, <?php echo $countUsers[1]; ?>, <?php echo $countUsers[2]; ?>, <?php echo $countUsers[3]; ?           >, <?php echo $countUsers[4]; ?>, <?php echo $countUsers[5]; ?>, <?php echo $countUsers[6]; ?>, <?php echo $countUsers[7]; ?>,          <?php echo $countUsers[8]; ?>, <?php echo $countUsers[9]; ?>, <?php echo $countUsers[10]; ?>, <?php echo $countUsers[11]; ?>,            <?php echo $countUsers[12]; ?>,0]
      	}]
  };
  
~~~


Questo è il risultato ottenuto:


![Pagina Admin](immagini/PaginaGrafici.PNG)


Da questa pagina è anche possibile per l'admin eseguire l'accesso. L'accesso avviene tramite un pulsante (che mostra la scritta "Login") 

![Pulsante Login](immagini/bottoneLogin.PNG)

dopo aver premuto il pulsante appare un form che permette di inserire i dati. I dati richiesti sono semplicemente username e password. 

![form login](immagini/loginAdmin.PNG)

Per verificare i dati è richiesto di premere il pulsante login. Se i dati inseriti sono validi verrà caricata in una nuova scheda la pagina dell'admin.

### Creazione pagina admin

La pagina dell'admin serve per permettere di modificare alcune impostazioni relative alla pagina della webcam. Queste impostazioni sono:
1. Edges Density
2. Initial Scale
3. Step size
  La prima impostazione permette di cambiare la densità del rettangolo che si crea attorno alle faccie individuate, la seconda serve per definire la larghezza del rettangolo e la terza permette di modificare la frequenza con la quale aggiornare il frame della pagina.

![Pagina Admin](immagini/paginaAdmin.PNG)

per immettere i valori abbiamo usato tre input di tipo range, il valore scelto viene mostrato all'interno di altri tre input, di tipo textbox.

~~~html
$i= 0;
$result=mysqli_query($conn,"SELECT count(*) as total from configurazione");
$data=mysqli_fetch_assoc($result);
while($i < $data['total']){
	echo "<p>$Testo[$i]</p>
	<input type='range' min='1' max='50' value='' class='slider' id='$i' name='$i' onchange='nuovoValore()'>
	Valore: <input type='textbox' class='tbox' id='value.$i'>";
	$i++;
}
~~~

Questa pagina è stata ideata per fare in modo che le impostazioni venissero passate al database. Dal database le nuove impostazioni devono essere mandate alla pagina della webcam per aggiornarla.


### Creazione Database

Per far si che le pagine comunicano e si scambino i dati tra di solo é stato necessario creare un database.
Per crearlo abbiamo usato Heidi versione 9.4.0.5125. Heidi è un programma che permette di creare database tramite un interfaccia grafica.
Ecco come si presenta il database su Heidi.

![SO Caricamento](immagini/dbFace.png)

La tabella Webcam si presenta così:

![SO Caricamento](immagini/webcamDB.png)

Mentre la tabella amministratore si presenta in questo modo:

![SO Caricamento](immagini/amministratoreDB.png)

Ora abbiamo un database in grado di comunicare i propri dati.


## Test

### Protocollo di test

Le tabelle  sottostanti rappresentano i test che abbiamo svolto in base hai requisiti che abbiamo scelto e creato.

| Test Case            | TC-001                                                       |
| -------------------- | ------------------------------------------------------------ |
| **Nome**             | Creazione macchina virtuale                                  |
| **Riferimento**      | REQ-001                                                      |
| **Descrizione**      | Creazione macchina virtuale per gestire le cartelle su raspberry |
| **Prerequisiti**     |                                                              |
| **Procedura**        | - Installare un programma per gestire le macchine virtuali, noi abbuamo usato VirtualBox. - Creare una macchina virtuale Windows. - Installare microsoft VisualStudio 2017.|
| **Risultati attesi** | Avere un abiente di sviluppo pronto per iniziare la scrittura del codice |


| Test Case            | TC-002                                                       |
| -------------------- | ------------------------------------------------------------ |
| **Nome**             | Supporto grafico dell`applicazione			      |
| **Riferimento**      | REQ-002                                                      |
| **Descrizione**      | Gestire il riconoscimento facciale                           |
| **Prerequisiti**     | -                                                            |
| **Procedura**        | - Scaricare la libreria OpenCV - Modificare la libreira con il linguaggio C#. |
| **Risultati attesi** | Avere un applicazione che é in grado di rinoscere le faccie e salvarle su un database |

| Test Case            | TC-003                                                       |
| -------------------- | ------------------------------------------------------------ |
| **Nome**             | Pagina Web per grafici                             |
| **Riferimento**      | REQ-003                                                      |
| **Descrizione**      | Gestire i dati mandati dalla pagina web della webcam tramite dei grafici |
| **Prerequisiti**     | -                                                            |
| **Procedura**        | - Realizzare dei grafici tramite la libreria chart.js - Prendere i dati dal database e inserirli all`inerno dei grafici. |
| **Risultati attesi** | I grafici vengono mostrati correttamente in base hai dati presi dal database. |


METTERE A POSTO IL REQUISITO QUATTRO, LA PROCEDURA
| Test Case            | TC-004                                                       |
| -------------------- | ------------------------------------------------------------ |
| **Nome**             | Database                                      |
| **Riferimento**      | REQ-006                                                      |
| **Descrizione**      | Realizzazione di una bancadati che contiene i dati raccolti dalla pagina web della Webcam |
| **Prerequisiti**     | L`applicazione del rilevamento facciale deve essere conclusa e funzionante |
| **Procedura**        | - Scaricare un programma per creare il database, noi abbiamo utlitzzato Heidi - Cre<re il database con gli stessi parametri della libreira presa e del codice scritto nella pagian web della Webcam. |
| **Risultati attesi** | Il database riesce a prendere i dati delle pagine prescritte |

| Test Case            | TC-005                                                       |
| -------------------- | ------------------------------------------------------------ |
| **Nome**             | Ricerca di nuovi volti                                       |
| **Riferimento**      | REQ-004                                                      |
| **Descrizione**      | I volti vengono trovati dalla pagina della Webcam            |
| **Prerequisiti**     | Download libreria tracking.js                                |
| **Procedura**        | - Aver installato la libreria tracking.js - Gestire il riconoscimento facciale tramite JavaScript |
| **Risultati attesi** | La pagina della Webcam é in grado di riconoscre i volti      |

| Test Case            | TC-006                                                       |
| -------------------- | ------------------------------------------------------------ |
| **Nome**             | Salvataggio delle persone sul DB                             |
| **Riferimento**      | REQ-004                                                      |
| **Descrizione**      | Questo test serve per verificare il corretto funzionamento dell'immissione dei dati all'interno del database |
| **Prerequisiti**     | aver creato il database                                      |
| **Procedura**        | - Collegare il database alle pagine tramite php              |
| **Risultati attesi** | I dati presi dalla webcam sono presenti all`interno del databse |

| Test Case            | TC-007                                                       |
| -------------------- | ------------------------------------------------------------ |
| **Nome**             | Utilizzo del prodotto su RaspBerry                           |
| **Riferimento**      | REQ-005                                                      |
| **Descrizione**      | Installazione del sitema operativo su Rasberry e fare in modo che il raspberry sia in grado di eseguire i file .exe|
| **Prerequisiti**     | avere un Raspberry                                           |
| **Procedura**        | - Caricare l`immagine del sistema operativo sul raspberry e installare mono 13.7 |
| **Risultati attesi** | Raspberry é in grado di eseguire file di estensione .exe.                      |




### Risultati test

I risultati dei test non sono male ma neanche eccelsi. I test TC-001, TC-003, TC-004,TC-005,TC-006,TC-008 sono passati. Ma il problema principale non é stato tanto la creazione delle pagine ma il collegamento tra loro mediante il database. Un altro problema é stato il Raspberry, quando abbiamo eseguito i test della prestazione ci siamo accorti che effettivamente il nostro raspberry era troppo "debole" per poter reggere il nostro programma. La webcam andava a scatti e il raspberry di impallava.
Per rimediare abbiamo ulitizzato un computer prestatoci dalla scuola.

### Mancanze e limitazioni conosciute

Per noi é stata difficile la partenza, cioè suddividerci il lavoro e imparare a lavorare in coppia, é stato difficile perche durante l`anno abbiamo svolto lo stesso progetto ma con un gruppo di quattro persone mantre ora essendo stati soltanto in due, abbiamo fatto un po fatica a bilanciarci il carico di lavoro. Una volta capito il vero funzionamento del lavoro di squadra e una volta che abbiamo suddiviso i compiti siamo riusciti a arrivare ad avere un vero e proprio team organizzato. Per quanto riguarda le competenze informatiche abbiamo avuto qualche difficolta con l` utilizzo di programmi o linguaggi che non abbiamo mai usato. Come per esempio raspberry, abbiamo dovuto installare il suo sistema operativo (raspbian) e trovare un modo per poter avviare i programmi con estenzione exe.

## Consuntivo

Ecco come sono andate le ore di lavoro, in base a quelle che abbiamo programmato prima dell`inizio del progetto.

![Gantt Consuntivo](immagini/GANTT_consuntivo.png)

## Conclusioni

La soluzione che abbiamo portato ci soddisfa, é sicurmante molto più soddisfacente che la prima versione che abbiamo portato. Il nostro programma avrà sicuramente un impatto positivo con le persone che lo proveranno, porterà molto divertimento. Noi non pensiamo che il nostro programma cambierà il mondo ma siamo sicuri che porterà una piccola svolta, sicurament più per noi stessi che per gli altri. Possiamo definire questo progetto un successo importante, più che successo questo progetto ci porta un forte orgoglio personale sopratutto perchè siamo riusciti a svolgere un applicazione molto più prestante di quella precedentemente realizzata con la metà dei collaboratori. Questo progetto é una grande aggiunta alla nostra crescita professionale, ci ha dato molto questo progetto sia come competenze lavorative che come competenze sociali.


### Sviluppi futuri
 Come miglioria potrebbe essere implementato in una scala molto più grande rispetto che un semplice schermo con una webcam. Sarebbe bello poter collegare il nostro progetto su delle videocamere reali in modo da riuscire a riconoscere una quantità maggiore di volti. Mentre come sviluppo futuro vorremmo riuscire integrare la nostra applicazione nel mondo degli smartphone.

### Considerazioni personali
  Con questo progetto abbiamo imparato cosa vuol dire lavoro di coppia, di quanto esso sia estremamente importante e di come con un collaboratore sia più facile e motivante lavorare.

## Sitografia

- https://opencv.org/, *OpenCv
      La libreira per implementare il riconoscimento facciale.

- https://www.mono-project.com/docs/getting-started/install/linux/, *Manuale di installazione del programma mono, grazie a questo programma il raspberry é in grado di avviare i file .exe.

- https://www.raspberrypi.org/downloads/raspbian/, *Sitema operativo Raspbian
    Abbamo scaricato il sistema operativo direttamente dal sito del produttore di raspberry.

- http://www.vemp.org/raspberrypi/preparare-una-card-sd-con-raspbian/, *Programma per caricare il .img di raspbian su raspberry.

- http://www.chartjs.org/, *pagina per i grafici


## Allegati

Elenco degli allegati:

-   Diari di lavoro

-   Guida utente / Manuale di utilizzo
