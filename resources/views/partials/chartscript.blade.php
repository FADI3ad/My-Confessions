<script>
    const ctx = document.getElementById('myPieChart').getContext('2d');

    const myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['عدد الاعترافات', 'عدد المخدومين', 'رموز مستخدمة', 'آخر تحديث'],
        datasets: [{
          data: [24, 12, 19, 20],
          backgroundColor: [
            '#0051de', // وردي زاهي
            '#4BC0C0', // أزرق زاهي
            '#009ede ', // أصفر ساطع
            '#6200de'  // تركواز
          ],
          borderColor: '#ffffff',
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // ده بيخليها تمتد حسب المساحة ا1`1لمتاحة
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#333',
              font: {
                family: 'Cairo',
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
