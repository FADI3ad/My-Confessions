
@extends('master')
@section('csspath','index')
@section('title', 'Home')
@section('home-active', 'active')
@section('content')
    <!-- Centered Content -->
    <main class="centered-section">
        <div class="content-box">
            <div class="head text-center">
                <h1>My Confession 🕊️</h1>
            </div>

            <form action="" method="post">
                @csrf
                <div class="CF-box">
                    <input type="text" placeholder="CF-Code" name="code" />

                    <span style="font-size: 28px; cursor: pointer;" id="bt">📅</span>

                </div>

                <div class="CF-box" style="max-width: 300px" >
                    <input type="date" placeholder="CF-Code" style="display: none" id="Datebox" name="date"/>
                </div>
                <button>Submit</button>
            </form>

            <div class="chart-container">
                <canvas id="myPieChart"></canvas>
            </div>

            @include('partials.verse')

        </div>

        <script>
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
            const dateInput = document.getElementById("Datebox");
            const today = new Date().toISOString().split('T')[0];
            dateInput.value = today;
        </script>

    </main>
    @include('partials.footer')
@endsection

@section('chartscripts')
    @include('partials.chartscript')
@endsection



