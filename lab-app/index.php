<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?><!DOCTYPE html>
<html>
  <head>
  <title>陳柏升的個人網站</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

  	<div class="row">
  		<div class="col-md-12">

      <?php include('menu.php'); ?>
      <div class="jumbotron">
      <p>
      <?php include("get-index-meta-data.php"); ?>

      <hr />

      <?php include('get-cpu-load.php'); ?>
			</p>
      <p>
      </p>
    </div>
    </div>
    </div>
    </div>
    <style>
        /* 網頁基本樣式設置 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: scale(1.02);
        }
        h1, h2 {
            text-align: center;
            color: #4a90e2;
        }
        p {
            font-size: 18px;
            color: #555;
        }

        /* 個人簡介樣式 */
        .intro {
            margin-top: 30px;
            padding: 10px;
            text-align: center;
        }
        .intro p {
            font-size: 20px;
            line-height: 1.8;
            color: #444;
        }

        /* 聯絡方式區塊樣式 */
        .contact {
            margin-top: 40px;
            background-color: #4a90e2;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .contact-info {
            text-align: center;
        }
        .contact-info p {
            font-size: 20px;
            margin: 10px 0;
        }
        .contact-info a {
            color: #ffdd57;
            text-decoration: none;
            font-weight: bold;
        }

        /* 作品展示樣式 */
        .portfolio {
            margin-top: 40px;
        }
        .portfolio-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .portfolio-content div {
            flex: 1;
            margin: 15px;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .portfolio-content div:hover {
            transform: translateY(-5px);
        }
        .portfolio-content img, video, audio {
            max-width: 100%;
            border-bottom: 5px solid #4a90e2;
        }
        .portfolio-content p {
            font-size: 18px;
            padding: 15px;
            background-color: #f7f7f7;
            border-top: 1px solid #eee;
        }

        /* Google 雲端硬碟文件顯示欄位 */
        .gdrive-doc {
            margin-top: 40px;
            text-align: center;
        }
        .gdrive-doc iframe {
            width: 100%;
            height: 500px;
            border: none;
        }

        /* 頁腳樣式 */
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #aaa;
        }

        /* 響應式設計 */
        @media (max-width: 768px) {
            .portfolio-content {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>陳柏升的個人網站</h1>
        
        <!-- 個人簡介 -->
        <div class="intro">
            <h2>個人簡介</h2>
            <p>大家好！我是陳柏升，來自台東大學資工三甲。我的夢想是可以把專題做出來，然後開開心心順利畢業</p>
        </div>
        
        <!-- 聯絡方式 -->
        <div class="contact">
            <h2>聯絡方式</h2>
            <div class="contact-info">
                <p>Email: <a href="mailto:11111131@gm.nttu.edu.tw">11111131@gm.nttu.edu.tw</a></p>
                <p>Phone: <a href="0905-674-112">0905-674-112</a></p>
                <p>LinkedIn: <a href="https://github.com/bronson0413" target="_blank">https://github.com/bronson0413</a></p>
            </div>
        </div>

        <!-- 作品展示 -->
        <div class="portfolio">
            <h2>作品或項目展示</h2>
            <div class="portfolio-content">
                <!-- 影像展示 -->
                <div>
                    <img src="https://www.overseas.edu.tw/wp-content/uploads/2020/10/%E5%AD%B8%E6%A0%A1%E7%85%A7%E7%89%871-%E5%9C%96%E6%9B%B8%E8%B3%87%E8%A8%8A%E9%A4%A8-scaled.jpg" alt="作品影像" />
                    <p>台東大學</p>
                </div>

                <!-- 影片展示 -->
                <div>
                    <video controls>
                        <source src="461396476_8230637463651592_6789537649768662017_n.mp4" type="video/mp4">
                        您的瀏覽器不支援影片播放功能。
                    </video>
                    <p>影片展示</p>
                </div>
                <!-- 聲音展示 -->
                <div>
                    <audio controls>
                        <source src="Record (online-voice-recorder.com).mp3" type="audio/mpeg">
                        您的瀏覽器不支援音訊播放功能。
                    </audio>
                    <p>聲音展示</p>
                </div>
            </div>
        </div>

        <!-- Google 雲端硬碟文件展示 -->
        <div class="gdrive-doc">
            <h2>雲端硬碟文件 程式解題</h2>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1jNy_ulMIvwgU00af-VawYzIhgbYr_HRo#grid" width="640" height="480" frameborder="0"></iframe>
        </div>

        <!-- 頁腳 -->
        <div class="footer">
            <p>&copy; 2024 陳柏升. All Rights Reserved.</p>
        </div>
    </div>
</body>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

  </body>
</html>
