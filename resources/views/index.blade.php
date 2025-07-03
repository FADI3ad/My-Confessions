<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/7/71/Coptic_cross.svg">

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets')}}/styles/index.css">
  <link rel="stylesheet" href="{{asset('assets')}}/styles/components.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <title>Confessors</title>
</head>
<body>
  <header class="top-navbar">
    <nav class="nav-links">
      <div>
        <ul class="navbars">
          <a href="index.html" class="links active"><i class="fas fa-home"></i></a>
          <a href="#" class="links "><i class="fa-solid fa-clock"></i></a>
          <a href="#" class="links"><i class="fa-solid fa-cake-candles"></i></a>
          <a href="allserved.html" class="links"><i class="fas fa-user-group"></i></a>
          <a href="newserved.html" class="links"><i class="fa-solid fa-user-plus"></i></a>
        </ul>
      </div>
    </nav>
  </header>
  <div class="all-code-container ">


    <!-- Centered Content -->
    <main class="centered-section">
      <div class="content-box">
        <div class="head text-center">
          <h1>My Confession 🕊️</h1>
        </div>

        <form action="" method="post">
          <div class="CF-box">
            <input type="text" placeholder="CF-Code" />
            <button>Submit</button>
          </div>

        </form>

        <div class="chart-container">
          <canvas id="myPieChart"></canvas>
        </div>


        <p class="verse-text">
          هكَذَا فَلْيَحْسِبْنَا الإِنْسَانُ كَخُدَّامٍ لِلْمَسِيحِ، وَوُكَلَاءَ سَرَائِرِ اللهِ
          <span class="verse-ref">(كورنثوس الأولى 4:1)</span><br>
        </p>
      </div>
    </main>



  </div>
  <footer class="footer paragraph-effect">
    <p>All rights reserved © <span id="year"></span> Eng.Marina & Eng.Fadi</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('myPieChart').getContext('2d');

    const myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['عدد الاعترافات', 'عدد المخدومين', 'رموز مستخدمة', 'آخر تحديث'],
        datasets: [{
          data: [24, 12, 19, 1],
          backgroundColor: [
            '#FF6384', // وردي زاهي
            '#36A2EB', // أزرق زاهي
            '#FFCE56', // أصفر ساطع
            '#4BC0C0'  // تركواز
          ],
          borderColor: '#ffffff',
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // ده بيخليها تمتد حسب المساحة المتاحة
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#333',
              font: {
                family: 'Poppins',
                size: 14
              },
              padding: 15
            }
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                const label = context.label || '';
                const value = context.parsed || 0;
                return `${label}: ${value}`;
              }
            }
          }
        },
        layout: {
          padding: {
            top: 10,
            bottom: 10
          }
        }
      }
    });
  </script>

</body>
</html>
