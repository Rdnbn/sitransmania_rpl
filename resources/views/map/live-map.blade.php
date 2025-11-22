@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/live-map.css') }}">
@endsection

@section('content')

<!-- HEADER HALAMAN -->
<div class="header">
    <div>SITRANSMANIA - Live Map Kendaraan</div>
</div>

<!-- LAYOUT UTAMA -->
<div class="container-map">

    <!-- MAP -->
    <div id="map"></div>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h3>Daftar Kendaraan</h3>
        <div id="list-kendaraan"></div>
    </div>

</div>

@endsection


@section('scripts')

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>

<script>
    // ================================
    // 1. Firebase Config
    // ================================
    var firebaseConfig = {
        apiKey: "API_KEY_KAMU",
        authDomain: "project.firebaseapp.com",
        databaseURL: "https://project.firebaseio.com",
        projectId: "project",
        storageBucket: "project.appspot.com",
        messagingSenderId: "xxx",
        appId: "xxx"
    };

    firebase.initializeApp(firebaseConfig);
    var database = firebase.database();

    // ================================
    // 2. INISIALISASI MAP
    // ================================
    var map = L.map('map').setView([-7.2575, 112.7521], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    var markers = {};

    // ================================
    // 3. UPDATE REALTIME + SIDEBAR
    // ================================
    var listContainer = document.getElementById("list-kendaraan");

   database.ref('kendaraan').on('value', (snapshot) => {
    var data = snapshot.val();
    listContainer.innerHTML = "";

    for (var id in data) {
        var lat = data[id].lat;
        var lng = data[id].lng;
        var status = data[id].status;

        // === Sidebar ===
        var div = document.createElement("div");
        div.className = "item";

        div.innerHTML = `
            <b>${id}</b><br>
            <small>Status: </small>
            <span class="status-${status}">${status}</span><br>
            <small>Lokasi: ${lat.toFixed(4)}, ${lng.toFixed(4)}</small>
        `;

        listContainer.appendChild(div);

        // Fix onclick: preserve lat/lng value
        (function(latFix, lngFix) {
            div.onclick = () => {
                map.setView([latFix, lngFix], 16);
            };
        })(lat, lng);

        // === Marker ===
        if (!markers[id]) {
            markers[id] = L.marker([lat, lng]).addTo(map)
                .bindPopup(`<b>ID Kendaraan:</b> ${id}<br>Status: ${status}`);
        } else {
            markers[id]
                .setLatLng([lat, lng])
                .bindPopup(`<b>ID Kendaraan:</b> ${id}<br>Status: ${status}`);
        }
    }
});
</script>

@endsection
