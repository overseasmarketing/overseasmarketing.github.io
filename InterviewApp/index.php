<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview App</title>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row" style="height: 100vh;">
            <div class="col-8 p-0 m-0 bg-primary">
                <div class="text-white bg-danger p-2">
                    Current Question
                </div>
                <div class="d-flex justify-content-center align-items-center h-100 text-white px-3">
                    <h1>Introduce yourself and what are your qualifications?</h1>
                </div>
            </div>
            <div class="col-4 p-0 m-0 bg-warning">
                <div class="row p-0 m-0">
                    <div class="col-12 p-0 m-0">
                        <video style="border-radius: 10px; padding: 5px;" width="100%" id="faceCam" muted
                            autoplay></video>
                    </div>
                    <div class="col-12 p-0 m-0">
                        <div class="p-3 w-100">
                            <button class="btn btn-primary" id="startRecording">Start Interview</button>
                            <button class="btn btn-danger" id="stopRecording" disabled>Stop Interview</button>
                            <video id="recordedVideo" style="display: none;" controls></video>
                            <hr>
                            <h5 id="warning" style="display: none;" class="alert alert-danger">
                                <b>YOU'RE BEING RECORDED</b>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let mediaRecorder;
        let recordedChunks = [];

        const startRecording = async () => {
            try {
                const screenStream = await navigator.mediaDevices.getDisplayMedia({
                    video: true
                });
                const audioStream = await navigator.mediaDevices.getUserMedia({
                    audio: {
                        echoCancellation: true,
                        noiseSuppression: true,
                        sampleRate: 44100
                    },
                    video: true // Request access to webcam as well
                });

                // Display webcam feed in the video element
                document.getElementById("faceCam").srcObject = audioStream;

                const combinedStream = new MediaStream([...screenStream.getTracks(), ...audioStream
                    .getTracks()
                ]);

                mediaRecorder = new MediaRecorder(combinedStream);
                mediaRecorder.ondataavailable = (e) => {
                    recordedChunks.push(e.data);
                };
                mediaRecorder.onstop = () => {
                    const blob = new Blob(recordedChunks, {
                        type: "video/webm"
                    });
                    const recordedVideo = document.getElementById("recordedVideo");
                    recordedVideo.src = URL.createObjectURL(blob);
                    const formData = new FormData();
                    formData.append("video", blob, "recordedVideo.webm");

                    fetch("save_video.php", {
                        method: "POST",
                        body: formData
                    }).then(response => {
                        console.log("Video saved successfully.");
                    }).catch(error => {
                        console.error("Error saving video:", error);
                    });
                };
                mediaRecorder.start();
                document.getElementById("startRecording").disabled = true;
                document.getElementById("stopRecording").disabled = false;
            } catch (error) {
                console.error("Error accessing media devices:", error);
            }
            document.getElementById("warning").style.display = "block";
        };

        const stopRecording = () => {
            mediaRecorder.stop();
            document.getElementById("startRecording").disabled = false;
            document.getElementById("stopRecording").disabled = true;
            document.getElementById("warning").style.display = "none";
            // Success Message
            alert("Interview has been recorded successfully.");
            // Stop WebCam and Screen Sharing
            document.getElementById("faceCam").srcObject.getTracks().forEach(track => track.stop());
            mediaRecorder.stream.getTracks().forEach(track => track.stop());
        };

        document.getElementById("startRecording").addEventListener("click", startRecording);
        document.getElementById("stopRecording").addEventListener("click", stopRecording);
    </script>
</body>

</html>