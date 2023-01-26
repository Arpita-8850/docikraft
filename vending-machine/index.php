<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .area {
        background: linear-gradient(to right, #1c92d2, #f2fcfe); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        width: 100%;
        height:100vh;
      }

      .circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }

      .circles li{
          position: absolute;
          display: block;
          list-style: none;
          width: 20px;
          height: 20px;
          background: linear-gradient(to right, #757f9a, #d7dde8);
          animation: animate 20s linear infinite;
          bottom: -150px;
          
      }

      .circles li:nth-child(1){
          left: 30%;
          width: 80px;
          height: 80px;
          animation-delay: 0s;
      }

      .circles li:nth-child(4){
          left: 40%;
          width: 60px;
          height: 60px;
          animation-delay: 0s;
          animation-duration: 18s;
      }

      .circles li:nth-child(6){
          left: 75%;
          width: 110px;
          height: 110px;
          animation-delay: 3s;
      }

      .circles li:nth-child(7){
          left: 35%;
          width: 150px;
          height: 150px;
          animation-delay: 7s;
      }

      .circles li:nth-child(8){
          left: 50%;
          width: 25px;
          height: 25px;
          animation-delay: 15s;
          animation-duration: 45s;
      }

      .circles li:nth-child(10){
          left: 85%;
          width: 150px;
          height: 150px;
          animation-delay: 0s;
          animation-duration: 11s;
      }

      @keyframes animate {
        0%{
          transform: translateY(0) rotate(0deg);
          opacity: 1;
          border-radius: 0;
        }
        100%{
          transform: translateY(-1000px) rotate(770deg);
          opacity: 0;
          border-radius: 50%;
        }
      }

      h1 {
          text-align: center;
          font-family:monospace;
      }

      h6 {
          font-family:monospace;
          margin-right: 31cm;
          margin-top: -100px;
      }

      #LCbutton {
          position: fixed;
          bottom: 100px;
          right: 600px;
      }

      .LCbutton {
          background: #363795;
          color: white;
          font-size: 30px;
          padding: 35px 40px;
          border-radius: 15px;
          border: 2px black;
          display: inline-block;
          text-align: center;
          cursor: pointer; 
          height: 22vh;
          width: 45vh;
      }
                
      .LCbutton span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
      }

      .LCbutton span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
      }

      .LCbutton:hover span {
          padding-right: 25px;
      }

      .LCbutton:hover span:after {
          opacity: 1;
          right: 0;
        
      }		  
      
      #BonafideButton {
          position: fixed;
          bottom: 100px;
          right: 120px;
      }
      
      .BonafideButton {
          background: #363795;
          color: white;
          border: 2px black;
          font-size: 30px;
          padding: 35px 80px;
          border-radius: 15px;
          display: inline-block;
          text-align: center;
          transition: all 0.5s;
          cursor: pointer;
          height: 22vh;
          width: 45vh;
      }
              
      .BonafideButton span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
      }
      
      .BonafideButton span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
      }
      
      .BonafideButton:hover span {
          padding-right: 25px;
      }
      
      .BonafideButton:hover span:after {
          opacity: 1;
          right: 0;
      }		
      
              
      #TCButton {
          position: fixed;
          bottom: 0px;
          right: 600px;
      }
      
      .TCButton {
          background: #363795;
          color: white;
          border: 2px black;
          font-size: 30px;
          padding: 35px 80px;
          border-radius: 15px;
          display: inline-block;
          text-align: center;
          transition: all 0.5s;
          cursor: pointer;
          height: 22vh;
          width: 45vh;
      }
      
      .TCButton span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
      }
      
      .TCButton span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
      }

      .TCButton:hover span {
          padding-right: 25px;
      }

      .TCButton:hover span:after {
          opacity: 1;
          right: 0;
      }	

      #DuesButton {
          position: fixed;
          bottom: 0px;
          right: 120px;
      }

      .DuesButton {
        background: #363795;
        color: white;
        border: 2px black;
        font-size: 30px;
        padding: 35px 80px;
        border-radius: 15px;
        display: inline-block;
        text-align: center;
        transition: all 0.5s;
        cursor: pointer;
        height: 22vh;
        width: 45vh;
      }

      .DuesButton span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
      }
      
      .DuesButton span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
      }

      .DuesButton:hover span {
          padding-right: 25px;
      }

      .DuesButton:hover span:after {
          opacity: 1;
          right: 0;
      }	


    </style>
  </head>
  <body>
    <div class="area" >
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>       
      </ul>
      
      <div style="padding:-1px 30px 400px;font-size:30px">
        
        <div class="container">
          <div class="jumbotron">
            <h1> Welcome to Docikraft</h1> 
          </div>
        </div>

        
        <div id="LCbutton">
          <button class="LCbutton" style="vertical-align:middle"  onClick="window.location='lc/barcode.php';">
            <span>Leaving Certificate </span>
          </button>
          <br></br>
          <br></br>
          <br></br>
          <br></br>
        </div>
        
        <div id="BonafideButton">
          <button class="BonafideButton" style="vertical-align:middle" onClick="window.location='bonafide/barcode1.php';">
            <span>Bonafide </span>
          </button>
          <br></br>
          <br></br>
          <br></br>
          <br></br>
        </div>
     
        <div id="TCButton"> 
          <button class="TCButton" style="vertical-align:middle"  onClick="window.location='train/barcode2.php';">
            <span>Train Consession </span>
          </button>
          <br></br>
          <br></br>
        </div>

        <div id="DuesButton"> 
          <button class="DuesButton" style="vertical-align:middle"  onClick="window.location='check-dues/barcode3.php';">
            <span>Check Dues </span>
          </button>
          <br></br>
          <br></br>
        </div>
      </div>
    </div>
  </body>
</html>