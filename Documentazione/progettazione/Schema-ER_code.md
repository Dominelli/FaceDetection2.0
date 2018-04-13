# Schema ER database

Inserimento_Faccie
-
ID_Faccie PK int
Name string INDEX

Tempo_Visita
-
ID_TempVis PK int
ID_Faccie int FK >- Inserimento_Faccie.ID_Faccie
Inizio time
Fine time
Data date

Impostazioni
-
Testo  PK varchar 
Valore int



link: https://app.quickdatabasediagrams.com/#/schema/8OPiXZuFQ0mroftxDpInFQ
