@extends('layouts.main')

@section('script')
    <script>
        AFRAME.registerComponent('play-pause', {
            init: function() {
                var myVideo = document.querySelector('#lawangSewu');
                var videoControls = document.querySelector('#videoControls');
                this.el.addEventListener('click', function() {
                    if (myVideo.paused) {
                        myVideo.play();
                        videoControls.setAttribute('src', '#pause');
                    } else {
                        myVideo.pause();
                        videoControls.setAttribute('src', '#play');
                    }
                });
            }
        });
    </script>
@endsection

@section('content')
    <a-scene>
        {{-- Assets Management System --}}
        <a-assets>
            <img src="{{ asset('assets/files/videos/play.svg') }}" id="play">
            <img src="{{ asset('assets/files/videos/pause.svg') }}" id="pause">
            <video src="{{ asset('assets/files/videos/lawangsewu.mp4') }}" id="lawangSewu" loop="true"></video>
        </a-assets>

        {{-- Camera --}}
        <a-camera>
            <a-cursor></a-cursor>
        </a-camera>

        {{-- 360 Video --}}
        <a-videosphere src="#lawangSewu" rotation="0 -90 0"></a-videosphere>

        {{-- Play/Pasue --}}
        <a-image id="videoControls" src="#play" position="0 1 -2" scale="0.2 0.2 1" play-pause></a-image>
    </a-scene>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    <title>Lawangsewu 360 Videos</title>
    <script>
        AFRAME.registerComponent('play-pause', {
            init: function() {
                var myVideo = document.querySelector('#lawangSewu');
                var videoControls = document.querySelector('#videoControls');
                this.el.addEventListener('click', function() {
                    if (myVideo.paused) {
                        myVideo.play();
                        videoControls.setAttribute('src', '#pause');
                    } else {
                        myVideo.pause();
                        videoControls.setAttribute('src', '#play');
                    }
                });
            }
        });
    </script>
</head>

<body>
    <a-scene>
        {{-- Assets Management System --}}
        <a-assets>
            <img src="{{ asset('assets/files/videos/play.svg') }}" id="play">
            <img src="{{ asset('assets/files/videos/pause.svg') }}" id="pause">
            <video src="{{ asset('assets/files/videos/lawangsewu.mp4') }}" id="lawangSewu" loop="true"></video>
        </a-assets>

        {{-- Camera --}}
        <a-camera>
            <a-cursor></a-cursor>
        </a-camera>

        {{-- 360 Video --}}
        <a-videosphere src="#lawangSewu" rotation="0 -90 0"></a-videosphere>

        {{-- Play/Pasue --}}
        <a-image id="videoControls" src="#play" position="0 1 -2" scale="0.2 0.2 1" play-pause></a-image>
    </a-scene>
</body>

</html>
