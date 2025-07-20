@php
    use App\Models\Confession;
    //Number of Confessions
    $ConfessionNumber = Confession::count();

    //Number of Birthdays
    $BirthdayNumber = Confession::upcomingBirthdays()->count();
    //Number of Latecomers
    $LatecomersNumber = Confession::latecomers()->count();
@endphp
<script>

    //date btn function
    const bt = document.getElementById('bt');
    const Datebox = document.getElementById('Datebox');
    let  apparent=false;
    bt.addEventListener('click', () => {
        if(apparent){
            Datebox.style.display = 'none';
            apparent=false;
        }
        else{
            Datebox.style.display = 'block';
            apparent=true;
        }
    })



    //chart
    const dateInput = document.getElementById("Datebox");
    const today = new Date().toISOString().split('T')[0];
    dateInput.value = today;

    const ctx = document.getElementById('myPieChart').getContext('2d');

    const myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['All Confessors', 'Birthdays', 'Latecomers'],
        datasets: [{
          data: [{{ $ConfessionNumber }}, {{ $BirthdayNumber }}, {{ $LatecomersNumber }}],
          backgroundColor: [
            // تركواز
            '#4BC0C0', // أزرق زاهي
            '#0051de', // وردي زاهي
            '#6200de'   // أصفر ساطع
          ],
          borderColor: '#ffffff',
          borderWidth: 4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
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
            top: 50,
            bottom: 10
          }
        }
      }
    });

</script>
