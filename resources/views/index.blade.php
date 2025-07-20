
@extends('master')
@section('csspath','index')
@section('title', 'Home')
@section('home-active', 'active')
@section('content')
    
    <!-- Centered Content -->
    <main class="centered-section">
        <div class="background-priest-top-left">
            <img src="{{ asset('images/logoo.png') }}" alt="Priest Image">
        </div>


        <div class="content-box">
            <div class="head text-center">
                <h1 style="margin-top:30px ">My <br> Confession 🕊️</h1>
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

    </main>

    @include('partials.footer')
@endsection

@section('indexcripts')
    @include('partials.indexcripts')
@endsection



