
//Multiple face detection and recognition in real time
//Using EmguCV cross platform .Net wrapper to the Intel OpenCV image processing library for C#.Net
//Writed by Sergio Andrés Guitérrez Rojas
//"Serg3ant" for the delveloper comunity
// Sergiogut1805@hotmail.com
//Regards from Bucaramanga-Colombia ;)

using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;
using Emgu.CV;
using Emgu.CV.UI;
using Emgu.CV.Structure;
using Emgu.Util;
using Emgu.CV.CvEnum;
using System.IO;
using System.Diagnostics;
using System.Data.SqlClient;
using System.Data;

namespace MultiFaceRec
{
    public partial class FrmPrincipal : Form
    {
        //Declararation of all variables, vectors and haarcascades
        Image<Bgr, Byte> currentFrame;
        Capture grabber;
        HaarCascade face;
        HaarCascade eye;
        MCvFont font = new MCvFont(FONT.CV_FONT_HERSHEY_TRIPLEX, 0.5d, 0.5d);
        Image<Gray, byte> result, TrainedFace = null;
        Image<Gray, byte> gray = null;
        List<Image<Gray, byte>> trainingImages = new List<Image<Gray, byte>>();
        List<string> labels= new List<string>();
        List<string> NamePersons = new List<string>();
        List<string> Nomi = new List<string>();
        int ContTrain, NumLabels, t;
        string name, names, sql, sql1, sql2, connectionString = null;

        // da sviluppare in futuro (algoritmo per capire quando una faccia entra ed esce (campo Fine nel database)).
        private void label4_TextChanged(object sender, EventArgs e)
        {
            string n;
            n = label4.Text;
            if(n != "" && n!= ", ")
            {
                n = "";
            }
        }

        public FrmPrincipal()
        {
            InitializeComponent();

            // carico il file haarcascade che svolge il face detection
            face = new HaarCascade("haarcascade_frontalface_default.xml");
            // eventualmente riconoscimento degli occhi.
            try
            {
                // carico eventuali facce già riconosciute in precedenza
                string Labelsinfo = File.ReadAllText(Application.StartupPath + "/TrainedFaces/TrainedLabels.txt");
                // i nomi sono separati dal carattere "%"
                string[] Labels = Labelsinfo.Split('%');
                // il primo valore contenuto nel file è il numero di facce registrate
                NumLabels = Convert.ToInt16(Labels[0]);
                ContTrain = NumLabels;
                string LoadFaces;

                for (int tf = 1; tf < NumLabels + 1; tf++)
                {
                    LoadFaces = "face" + tf + ".bmp";
                    // carico nella lista di facce tutte le facce che trovo.
                    trainingImages.Add(new Image<Gray, byte>(Application.StartupPath + "/TrainedFaces/" + LoadFaces));
                    labels.Add(Labels[tf]);
                }

            }
            catch (Exception e)
            {
                //MessageBox.Show(e.ToString());
                MessageBox.Show("nessun elemento inserito, aggiungere almeno una faccia per consentire il riconoscimento facciale", "Triained faces load", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
            }

        }

        private void button2_MouseCaptureChanged(object sender, EventArgs e)
        {
            MessageBox.Show(textBox1.Text);
            connectionString = "Server=localhost;Database=facedetection;Trusted_Connection=True";
            using (SqlConnection cnn = new SqlConnection(connectionString))
            {
                sql = "insert into inserimento_facce ([ID_Facce], [Nome]) values (@first, @last)";
                sql1 = "select count(*) from inserimento_facce";
                SqlCommand cnt = new SqlCommand(sql1, cnn);
                cnn.Open();
                using (SqlCommand cmd = new SqlCommand(sql, cnn))
                {
                    Int32 count = Convert.ToInt32(cnt.ExecuteScalar());
                    cmd.Parameters.AddWithValue("@first", count);
                    cmd.Parameters.AddWithValue("@last", textBox1.Text);
                    int row = cmd.ExecuteNonQuery();
                    //MessageBox.Show(row + " Row inserted !! ");
                }
            }
            using (SqlConnection cnn = new SqlConnection(connectionString))
            {
                sql = "insert into tempo_visita ([ID_TempVis], [Inizio], [Fine], [DataCom], [ID_Facce]) " +
                          "values (@ID_TempVis, @Inizio, @Fine, @DataCom, @ID_Facce)";
                sql1 = "select count(*) from tempo_visita";
                SqlCommand cnt = new SqlCommand(sql1, cnn);
                DateTime data = DateTime.Now;
                var date = data.ToShortDateString();
                var time = data.ToLongTimeString();
                /*string name = textBox1.Text;
                string select;
                sql2 = "select ID_Facce from inserimento_facce where Nome = @nome";
                SqlCommand id = new SqlCommand(sql2, cnn);
                cnn.Open();
                using (SqlCommand cmd = new SqlCommand(sql2, cnn))
                {
                    cmd.Parameters.AddWithValue("@nome", name);
                    Int32 count = Convert.ToInt32(id.ExecuteScalar());
                    MessageBox.Show(count.ToString());
                    int row = cmd.ExecuteNonQuery();
                }*/
                cnn.Open();
                using (SqlCommand cmd = new SqlCommand(sql, cnn))
                {
                    Int32 count = Convert.ToInt32(cnt.ExecuteScalar());
                    cmd.Parameters.AddWithValue("@ID_TempVis", count);
                    cmd.Parameters.AddWithValue("@Inizio", Convert.ToDateTime(time));
                    cmd.Parameters.AddWithValue("@Fine", Convert.ToDateTime(time));
                    cmd.Parameters.AddWithValue("@DataCom", Convert.ToDateTime(date));
                    cmd.Parameters.AddWithValue("@ID_Facce", 0);
                    int row = cmd.ExecuteNonQuery();
                    //MessageBox.Show(row + " Row inserted !! ");
                }
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            DateTime data = DateTime.Now;
            var date = data.ToShortDateString();
            var time = data.ToLongTimeString();
            //Initialize the capture device
            grabber = new Emgu.CV.Capture(0);
            grabber.QueryFrame();
            //Initialize the FrameGraber event
            //MessageBox.Show(time.ToString());
            Application.Idle += new EventHandler(FrameGrabber);
            button1.Enabled = false;
        }

        /// <summary>
        /// il metodo parte al click sul bottone 2 (add faces) 
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void button2_Click(object sender, System.EventArgs e)
        {
            try
            {
                //Trained face counter
                ContTrain = ContTrain + 1;

                //Get a gray frame from capture device
                gray = grabber.QueryGrayFrame().Resize(320, 240, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);

                //Face Detector
                MCvAvgComp[][] facesDetected = gray.DetectHaarCascade(
                face,
                1.2,
                10,
                Emgu.CV.CvEnum.HAAR_DETECTION_TYPE.DO_CANNY_PRUNING,
                new Size(20, 20));

                //Action for each element detected
                foreach (MCvAvgComp f in facesDetected[0])
                {
                    TrainedFace = currentFrame.Copy(f.rect).Convert<Gray, byte>();
                    break;
                }

                //resize face detected image for force to compare the same size with the 
                //test image with cubic interpolation type method
                TrainedFace = result.Resize(100, 100, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);
                trainingImages.Add(TrainedFace);
                labels.Add(textBox1.Text);

                //Show face added in gray scale
                imageBox1.Image = TrainedFace;

                //Write the number of triained faces in a file text for further load
                File.WriteAllText(Application.StartupPath + "/TrainedFaces/TrainedLabels.txt", trainingImages.ToArray().Length.ToString() + "%");

                //Write the labels of triained faces in a file text for further load
                for (int i = 1; i < trainingImages.ToArray().Length + 1; i++)
                {
                    trainingImages.ToArray()[i - 1].Save(Application.StartupPath + "/TrainedFaces/face" + i + ".bmp");
                    File.AppendAllText(Application.StartupPath + "/TrainedFaces/TrainedLabels.txt", labels.ToArray()[i - 1] + "%");
                }

                //MessageBox.Show(textBox1.Text + "´s face detected and added :)", "Training OK", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            catch
            {
                MessageBox.Show("Abilita il riconoscimento prima di inserire una faccia", "Training Fail", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
            }
        }


        void FrameGrabber(object sender, EventArgs e)
        {
            label3.Text = "0";
            //label4.Text = "";
            NamePersons.Add("");


            //Get the current frame form capture device
            currentFrame = grabber.QueryFrame().Resize(320, 240, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);

            //Convert it to Grayscale
            gray = currentFrame.Convert<Gray, Byte>();

            //Face Detector
            MCvAvgComp[][] facesDetected = gray.DetectHaarCascade(
          face,
          1.2,
          10,
          Emgu.CV.CvEnum.HAAR_DETECTION_TYPE.DO_CANNY_PRUNING,
          new Size(20, 20));

            //Action for each element detected
            foreach (MCvAvgComp f in facesDetected[0])
            {
                t = t + 1;
                result = currentFrame.Copy(f.rect).Convert<Gray, byte>().Resize(100, 100, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);
                //draw the face detected in the 0th (gray) channel with blue color
                currentFrame.Draw(f.rect, new Bgr(Color.Red), 2);


                if (trainingImages.ToArray().Length != 0)
                {
                    //TermCriteria for face recognition with numbers of trained images like maxIteration
                    MCvTermCriteria termCrit = new MCvTermCriteria(ContTrain, 0.001);

                    //Eigen face recognizer
                    EigenObjectRecognizer recognizer = new EigenObjectRecognizer(
                       trainingImages.ToArray(),
                       labels.ToArray(),
                       3000,
                       ref termCrit);

                    name = recognizer.Recognize(result);

                    //Draw the label for each face detected and recognized
                    currentFrame.Draw(name, ref font, new Point(f.rect.X - 2, f.rect.Y - 2), new Bgr(Color.LightGreen));

                }

                NamePersons[t - 1] = name;
                NamePersons.Add("");


                //Set the number of faces detected on the scene
                label3.Text = facesDetected[0].Length.ToString();

                /*
                //Set the region of interest on the faces

                gray.ROI = f.rect;
                MCvAvgComp[][] eyesDetected = gray.DetectHaarCascade(
                   eye,
                   1.1,
                   10,
                   Emgu.CV.CvEnum.HAAR_DETECTION_TYPE.DO_CANNY_PRUNING,
                   new Size(20, 20));
                gray.ROI = Rectangle.Empty;

                foreach (MCvAvgComp ey in eyesDetected[0])
                {
                    Rectangle eyeRect = ey.rect;
                    eyeRect.Offset(f.rect.X, f.rect.Y);
                    currentFrame.Draw(eyeRect, new Bgr(Color.Blue), 2);
                }
                 */

            }
            t = 0;

            //Names concatenation of persons recognized
            for (int nnn = 0; nnn < facesDetected[0].Length; nnn++)
            {
                names = names + NamePersons[nnn] + ", ";
            }
            //Show the faces procesed and recognized
            imageBoxFrameGrabber.Image = currentFrame;
            label4.Text = names;
            names = "";
            //Clear the list(vector) of names
            NamePersons.Clear();

        }

        private void button3_Click(object sender, EventArgs e)
        {
            //Process.Start("Donate.html");
        }

    }
}