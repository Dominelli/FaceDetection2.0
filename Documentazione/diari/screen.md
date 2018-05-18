# PROGETTO | Diario di lavoro - 16.03.2018
##### Gionata Battaglioni
##### Lucas Previtali
### Canobbio, [16.03.2018]

## Lavori svolti
Gionata

|Orario        |Lavoro svolto                 |
|--------------|------------------------------|
|08:15 - 11:35 |Analisi della libreria OpenCV|               
|13:15 - 14:30 |Download dei pacchetti necessari alla libreria|
|14:30 - 15:15 |presentazione del secondo progetto (FaceDetection)|
|15:15 - 16:30 |Download dei pacchetti necessari alla libreria|


Lucas

|Orario        |Lavoro svolto                 |
|--------------|------------------------------|
|8:20 - 10:50 |Analisi della libreria OpenCV|      
|10:50 - 14:30 |prova di un file python per il riconoscimento facciale (Python + OpenCV)|
|14:30 - 15:15 |presentazione del secondo progetto (FaceDetection)|
|15:15 - 16:30 |prova di un file python per il riconoscimento facciale (Python + OpenCV)|



##  Problemi riscontrati e soluzioni adottate
1. La porta 443 è bloccata, non ho ancora trovato come sistemarla perchè la porta è gia occupata (MAC OS)
2. provando a far partire il file Python per il riconoscimento facciale dalla shell viene visualizzato questo errore:
~~~
if (trainingImages.ToArray().Length != 0)
{
     EigenObjectRecognizer recognizer = new EigenObjectRecognizer(
           trainingImages.ToArray(),
           labels.ToArray(),
           3000,
           ref termCrit);

      name = recognizer.Recognize(result);

      // scrive il nome di ogni faccia riconosciuta
      currentFrame.Draw(name, ref font, new Point(f.rect.X - 2, f.rect.Y - 2), new Bgr(Color.LightGreen));
}
~~~
il problema era che mancava questa riga di codice:
~~~
face_cascade.load('C:\\xampp\\htdocs\\prog3\haarcascade_frontalface_default.xml');
~~~
che permette a face_cascade (un oggetto di tipo cv2) di caricare il file xml contenente le impostazioni e i metodi necessari al rilevamento delle faccie.

3. Provando a usare OpenCV con PHP viene visualizzato l'errore Call to undefined function dl(). 
Questo perchè nelle nuove versioni di php la funzione dl() non è supportata, quindi va sostituita con ini_set():
 
##  Punto della situazione rispetto alla pianificazione
- Nei tempi

## Programma di massima per la prossima giornata di lavoro
- scelta definitiva della libreria e inizio scrittura codice