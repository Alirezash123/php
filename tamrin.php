<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه تمارین</title>
    <style>
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100%;
        }

        html {
            height: 100%;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .header-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .project-name {
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            flex: 1;
            margin: 0 20px;
        }

        /* Main Content Styles */
        .main-content {
            display: flex;
            flex: 1;
            gap: 20px;
            padding: 20px;
        }

        .content-area {
            flex: 1;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .content-area h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .content-area p {
            color: #555;
            line-height: 1.6;
            font-size: 16px;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 300px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .sidebar h3 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 20px;
            text-align: center;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        .exercise-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .exercise-item {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            margin-bottom: 12px;
            padding: 15px 20px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(116, 185, 255, 0.3);
        }

        .exercise-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(116, 185, 255, 0.4);
            background: linear-gradient(135deg, #0984e3, #74b9ff);
        }

        .exercise-item:active {
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }

            .project-name {
                margin: 0;
                font-size: 24px;
            }

            .main-content {
                flex-direction: column;
                padding: 15px;
            }

            .sidebar {
                width: 100%;
            }

            .header-image {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
           
        }

         a{
                text-decoration: none;
            
           }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <div class="header-image">🎯</div>
            <h1 class="project-name">پروژه تمارین ورزشی</h1>
            <div class="header-image">💪</div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Content Area -->
            <section class="content-area">
                <?php
                $tamrin=$_GET['excersice'] ??null;
                if($tamrin){

                    include "excersice/$tamrin.php";

                }else{
                    echo 'no tamrin';
                }
                
                ?>
            </section>

            <!-- Sidebar -->
            <aside class="sidebar">
                <h3>📋 لیست تمارین</h3>
                <ul class="exercise-list">
                    <a href="?excersice=tamrin1"><li class="exercise-item" onclick="selectExercise('pushup')">🔥 شنا روی زمین</li></a>
                    <li class="exercise-item" onclick="selectExercise('squat')">🦵 اسکات</li>
                    <li class="exercise-item" onclick="selectExercise('plank')">⚡ پلانک</li>
                    <li class="exercise-item" onclick="selectExercise('jumping')">🏃 جامپینگ جک</li>
                    <li class="exercise-item" onclick="selectExercise('lunges')">💪 لانژ</li>
                    <li class="exercise-item" onclick="selectExercise('burpee')">🔥 برپی</li>
                    <li class="exercise-item" onclick="selectExercise('mountain')">⛰️ کوه نوردی</li>
                    <li class="exercise-item" onclick="selectExercise('crunches')">🎯 کرانچ</li>
                </ul>
            </aside>
        </main>
    </div>
</body>
</html>