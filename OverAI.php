<!doctype html>
<html class="h-100" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta
        content='Overseas Marketing is a dynamic and innovative marketing firm that specializes in helping businesses expand their reach and tap into new markets overseas. Whether you are looking to expand into new regions or simply want to increase your global brand awareness, we have the expertise and resources to help you achieve your goals.'>
    <meta content='Overseas Marketing Company, Overseas Marketing Agency' name='keywords'>
    <meta name="author" content="Overseas Marketing">

    <!-- Title -->
    <title>OverAI - Overseas Marketing</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="QuantumByteStudios">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://overseasmarketing.co.in/OverAI">
    <meta property="og:image" content="https://overseasmarketing.co.in/img/overai_banner.png">
    <meta property="og:description"
        content="Step into the extraordinary realm of OverAI, a cutting-edge platform that redefines the boundaries of artificial intelligence through its seamless integration with Google Gemini. OverAI represents the pinnacle of intelligent technology, offering a myriad of features designed to enhance and elevate your digital experiences.">


    <!-- Favicons -->
    <link rel='icon' href='https://overseasmarketing.co.in/img/tube.png'>
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://overseasmarketing.co.in/easmarketing.studio/img/tube.png">

    <!-- CSS -->
    <!-- Local -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate On Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- JS -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <!-- Local -->
    <link href="https://overseasmarketing.co.in/js/main.js" rel="stylesheet">
    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- Icons -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        rel="stylesheet">

</head>

<body class="bg-black text-white" data-bs-spy="scroll" data-bs-target="#navScroll">

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar -->

    <main>

        <!-- <div class="w-100 h-100vh overflow-hidden position-relative bg-black text-white" data-aos="fade">
            <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
                <div class="row d-flex align-items-center justify-content-center py-vh-5 mt-5">
                    <div class="col-12 col-xl-10">
                        <span class="h5 text-secondary fw-lighter">Overseas Marketing</span>
                        <h1 class="display-huge mt-3 mb-3 lh-1">
                            Over<span class="text-danger" id="word">AI</span>
                        </h1>
                    </div>
                    <div class="col-12 col-xl-8">
                        <p class="text-secondary">
                            At the heart of OverAI lies the power of Google Gemini, a state-of-the-art AI system that
                            fuels the
                            platform's
                            remarkable capabilities.
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="https://overseasmarketing.co.in/quote/" class="btn btn-xl btn-light">
                            Try Now
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container p-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">&nbsp;</div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="badge bg-primary p-2 m-2">
                        Try OverAI's Chat Interface
                    </div>
                    <div class="card p-0">
                        <div class="card-body px-2">
                            <!-- HTML Form -->
                            <div class="alert p-0 m-0">
                                <!-- START CHAT -->
                                <div id="chat">

                                    <!--  -->

                                </div>
                                <!-- END CHAT -->
                                <div class="btn-group w-100">
                                    <input class="form-control" id="prompt" name="prompt" type="text"
                                        placeholder="Enter your prompt">
                                    <button id="send_prompt_btn" onclick="makeApiCall();"
                                        class="btn btn-dark chat-button">
                                        <i class="fa-solid fa-square-arrow-up-right"></i>
                                    </button>
                                    <button style="display: none;" id="send_prompt_loading_btn"
                                        class="btn btn-dark disabled chat-button">
                                        <div class="spinner-grow spinner-grow-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <!-- JavaScript -->
                            <script>
                            const apiKey = 'AIzaSyCFpWV5yV3zzVq8y5tJDO2mrIArbKHgrzQ';

                            function addAIReply(textValue) {
                                const replyElement = `
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="reply">` + textValue + `</div>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                `;
                                const chat = document.getElementById('chat');
                                chat.innerHTML += replyElement;
                                // console.log(textValue);

                                document.getElementById('send_prompt_btn').style.display = 'block';
                                document.getElementById('send_prompt_loading_btn').style.display = 'none';
                            }

                            function errorReply(textValue) {
                                const replyElement = `
                                    <div class=" d-flex">
                                        <div class="none">
                                            <div class="reply">` + textValue + `</div>
                                        </div>
                                        <div class="ban">
                                            <i class="fa fa-solid fa-ban text-danger"></i>
                                        </div>
                                    </div>
                                `;
                                const chat = document.getElementById('chat');
                                chat.innerHTML += replyElement;
                                // console.log(textValue);

                                document.getElementById('send_prompt_btn').style.display = 'block';
                                document.getElementById('send_prompt_loading_btn').style.display = 'none';
                            }

                            async function makeApiCall() {
                                const promptInput = document.getElementById('prompt');
                                const promptText = promptInput.value;

                                // Disable Send Button
                                document.getElementById('prompt').value = '';
                                document.getElementById('send_prompt_btn').style.display = 'none';
                                document.getElementById('send_prompt_loading_btn').style.display = 'block';

                                // Add User Prompt
                                const chat = document.getElementById('chat');
                                const userInputElement = `
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-10">
                                            <div class="user_input">` + promptText + `</div>
                                        </div>
                                    </div>
                                `;
                                chat.innerHTML += userInputElement;

                                const url =
                                    `https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=${apiKey}`;

                                const data = {
                                    contents: [{
                                        parts: [{
                                            text: promptText
                                        }]
                                    }]
                                };

                                const options = {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify(data)
                                };

                                try {
                                    const response = await fetch(url, options);
                                    const result = await response.json();

                                    const textValue = result.candidates[0].content.parts[0].text;
                                    // console.log(textValue);
                                    addAIReply(textValue);

                                    // Handle the result as needed
                                } catch (error) {
                                    console.error('Error:', error.message || error);
                                    // Error Reply
                                    errorReply('Sorry, I am not able to understand your query. Please try again.');
                                    // Handle errors
                                }
                            }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">&nbsp;</div>
            </div>
        </div>

        <!-- <div class="bg-dark">
            <div class="container px-vw-5 py-vh-5">
                <div class="row d-flex align-items-center">

                    <div class="col-12 col-lg-5">
                        <h4 class="pt-5">
                            Unleashing the Future of Intelligent Interaction with
                            <span>
                                Over<span class="text-danger" id="word">AI</span>
                            </span>
                        </h4>
                        <p class="text-secondary">
                            Step into the extraordinary realm of OverAI, a cutting-edge platform that redefines the
                            boundaries of
                            artificial
                            intelligence through its seamless integration with Google Gemini. OverAI represents the
                            pinnacle of
                            intelligent
                            technology, offering a myriad of features designed to enhance and elevate your digital
                            experiences.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

</body>

</html>