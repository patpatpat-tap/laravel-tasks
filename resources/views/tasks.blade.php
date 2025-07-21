@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white text-center" style="font-size:2rem; font-weight:bold;">
                        Transformers Database
                    </div>
                    <div class="card-body">
                        <!-- Search Form -->
                        <form method="GET" action="/" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search Transformers by name or description..." value="{{ $search }}">
                                <button class="btn btn-danger" type="submit">Search</button>
                            </div>
                        </form>
                        @if(count($tasks) > 0)
                            <div class="row">
                                @foreach($tasks as $task)
                                    <div class="col-md-4 mb-4">
                                        <div class="card h-100 shadow-sm border-danger">
                                            <img src="{{ asset('images/' . $task->image) }}" class="card-img-top transformer-img" alt="{{ $task->name }}" style="height:250px; object-fit:cover; background:#222; cursor:pointer;" data-name="{{ $task->name }}" data-description="{{ $task->description }}" data-faction="{{ $factions[$task->image] ?? 'Unknown' }}">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-weight:bold; color:#d32f2f;">{{ $task->name }}</h5>
                                                <p class="card-text">{{ $task->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="alert alert-warning text-center">No Transformers found.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal HTML -->
    <div id="transformerModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h3 id="modalName"></h3>
            <p id="modalDescription"></p>
            <p><strong>Faction:</strong> <span id="modalFaction"></span></p>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .modal {
        display: none; 
        position: fixed; 
        z-index: 9999; 
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }
    .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 400px;
        border-radius: 8px;
        text-align: center;
    }
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
</style>
@endpush

@php
// Faction placeholder logic (since we can't use DB):
$factions = [
    'optimus_prime.jpg' => 'Autobot',
    'bumblebee.jpg' => 'Autobot',
    'ironhide.jpg' => 'Autobot',
    'ratchet.jpg' => 'Autobot',
    'jazz.jpg' => 'Autobot',
    'wheeljack.jpg' => 'Autobot',
    'prowl.jpg' => 'Autobot',
    'grimlock.jpg' => 'Autobot',
    'hot_rod.jpg' => 'Autobot',
    'springer.jpg' => 'Autobot',
    'ultra_magnus.jpg' => 'Autobot',
    'megatron.jpg' => 'Decepticon',
    'starscream.jpg' => 'Decepticon',
    'soundwave.jpg' => 'Decepticon',
    'shockwave.jpg' => 'Decepticon',
    'blitzwing.jpg' => 'Decepticon',
    'devastator.jpg' => 'Decepticon',
    'skywarp.jpg' => 'Decepticon',
    'thundercracker.jpg' => 'Decepticon',
];
@endphp

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('transformerModal');
    var closeModal = document.getElementById('closeModal');
    var modalName = document.getElementById('modalName');
    var modalDescription = document.getElementById('modalDescription');
    var modalFaction = document.getElementById('modalFaction');
    var imgs = document.querySelectorAll('.transformer-img');
    imgs.forEach(function(img) {
        img.addEventListener('click', function() {
            modalName.textContent = img.getAttribute('data-name');
            modalDescription.textContent = img.getAttribute('data-description');
            modalFaction.textContent = img.getAttribute('data-faction');
            modal.style.display = 'block';
        });
    });
    closeModal.onclick = function() {
        modal.style.display = 'none';
    };
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
});
</script>
@endpush
