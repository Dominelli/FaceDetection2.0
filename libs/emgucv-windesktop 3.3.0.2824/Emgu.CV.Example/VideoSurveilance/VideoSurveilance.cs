//----------------------------------------------------------------------------
//  Copyright (C) 2004-2017 by EMGU Corporation. All rights reserved.       
//----------------------------------------------------------------------------

using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using Emgu.CV;
using Emgu.CV.Cvb;
using Emgu.CV.UI;
using Emgu.CV.CvEnum;
using Emgu.CV.Structure;
using Emgu.CV.VideoSurveillance;
using FaceDetection;
using System.Data.SqlClient;

namespace VideoSurveilance
{
       public partial class VideoSurveilance : Form
       {
      
            private static VideoCapture _cameraCapture;

            //private SqlConnection connection = null;

            public VideoSurveilance()
            {
                InitializeComponent();

                //using (SqlConnection conn = new SqlConnection())
                {
                    // Create the connectionString
                    // Trusted_Connection is used to denote the connection uses Windows Authentication
                    // conn.ConnectionString = "Server=localhost;Database=facedetection;Trusted_Connection=true";
                    // conn.Open();
                    // Create the command
                    // SqlCommand command = new SqlCommand("SELECT * FROM TableName WHERE FirstColumn = @0", conn);
                }

                Run();
            }

            void Run()
              {
            try
            {
                _cameraCapture = new VideoCapture();
            }
            catch (Exception e)
            {
                MessageBox.Show(e.Message);
                return;
            }


            Application.Idle += ProcessFrame;
       }

            void ProcessFrame(object sender, EventArgs e)
            {
                 Mat frame = _cameraCapture.QueryFrame();

                 List<Rectangle> faces = new List<Rectangle>();
                 List<Rectangle> eyes = new List<Rectangle>();
                 long detectionTime;

                 DetectFace.Detect(
                     frame, "haarcascade_frontalface_default.xml", "haarcascade_eye.xml",
                     faces, eyes,
                     out detectionTime);

                 foreach (var b in faces)
                 {
                     //CvTrack b = pair.Value;
                     CvInvoke.Rectangle(frame, b, new MCvScalar(0.0, 0.0, 255.0), 3);
                     //CvInvoke.PutText(frame,  b.Id.ToString(), new Point((int)Math.Round(b.Centroid.X), (int)Math.Round(b.Centroid.Y)), FontFace.HersheyPlain, 1.0, new MCvScalar(255.0, 255.0, 255.0));
                 }

                 imageBox1.Image = frame;

              }

        private void imageBox1_Click(object sender, EventArgs e)
        {

        }
    }
}