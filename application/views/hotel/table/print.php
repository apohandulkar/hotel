<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<script src= 
"https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"> 
  </script> 

<link rel="stylesheet" href="/fonts/stylesheet.css">
<link rel="stylesheet" href="style.css">
<style>
    

/* Font family */

    /* Container holding the image and the text */
    .container {
        position: relative;
        text-align: center;
        color: rgb(0, 0, 0);
      }
      
      @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Laila:wght@700&family=Poppins:wght@500&display=swap');

      @font-face {
          font-family: 'kalambold';
          src: url('/fonts/kalam-bold-webfont.woff2') format('woff2'),
               url('/fonts/kalam-bold-webfont.woff') format('woff');
          font-weight: normal;
          font-style: normal;
      
      }
      
      .h31 {
          font-family: 'Laila-bold', sans-serif, bold;
          color: rgb(2, 2, 15);
          font-weight: 700;
          }
      
      .item {
        width: -moz-fit-content;
        width: fit-content;
        background-color: #8ca0ff;
        padding: 5px;
        margin-bottom: 1em;
      }
      
      .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
</style>
<body>
    <div class="container" id="main">
    <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=<?php echo base_url()."Table/menu/".$hid."/".$tid."/0";?>&choe=UTF-8" title=""  style="width: 200px; height:200px;" />    </div>
    <center>
        <div>
            <br>
            <button onclick="capture()" class="button">Capture</button>
        </div>
    </center>
    <div>
        <img src="" alt="" style="width: 100%; height: auto;" id="result">
    </div>
 
</div> 
</body>
<script src="<?php echo site_url();?>/assets/js/html2canvas.min.js"></script>
<script src="<?php echo site_url();?>/assets/js/js.js"></script>
</html>