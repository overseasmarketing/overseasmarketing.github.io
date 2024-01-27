<!doctype html>
<html class="h-100" lang="en">

<!-- Head -->
<?php include 'head.php'; ?>
<!-- Head -->

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