<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Customer Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <head> 
                        <style>
                            .container {
                                width: 100%;
                                max-width: 600px;
                                padding: 20px;
                                background: #fff;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                border-radius: 10px;
                                display: flex;
                                flex-direction: column;
                                overflow: hidden;
                            }

                            .header {
                                background-color: #007bff;
                                color: #fff;
                                padding: 20px;
                                text-align: center;
                                border-radius: 10px 10px 0 0;
                                position: sticky; /* Keep header sticky */
                                top: 0; /* Stick to the top of the container */
                                z-index: 1; /* Ensure header is above chat content */
                            }

                            .chat {
                                flex-grow: 1;
                                overflow-y: auto;
                                padding: 20px;
                                display: flex;
                                flex-direction: column; /* Mengembalikan ke arah default dari atas ke bawah */
                            }


                            .message {
                                margin-bottom: 20px;
                            }

                            .message.user {
                                text-align: right;
                            }

                            .message.bot {
                                text-align: left;
                            }

                            .message p {
                                display: inline-block;
                                padding: 10px 20px;
                                border-radius: 20px;
                                max-width: 80%;
                            }

                            .message.user p {
                                background-color: #007bff;
                                color: #fff;
                            }

                            .message.bot p {
                                background-color: #f1f1f1;
                                color: #333;
                            }

                            .faq-list {
                                list-style-type: none;
                                padding: 0;
                            }

                            .faq-list li {
                                margin-bottom: 10px;
                            }

                            .faq-list li a {
                                color: #007bff;
                                text-decoration: none;
                                cursor: pointer;
                            }

                            .faq-list li a:hover {
                                text-decoration: underline;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="header">{{ __('Click FAQ Below') }}</div>
                            <div class="chat" id="chat">
                                <!-- Placeholder for dynamic messages -->
                            </div>
                            <div class="faq">
                                <h5>Frequently Asked Questions</h5>
                                <ul class="faq-list">
                                    @foreach($faq as $question => $answer)
                                        <li><a href="#" onclick="showAnswer('{{ addslashes($question) }}', '{{ addslashes($answer) }}')">{{ $question }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <script>
                            function showAnswer(question, answer) {
                            const chat = document.getElementById('chat');

                            // Add user question to the chat
                            const userMessage = document.createElement('div');
                            userMessage.classList.add('message', 'user');
                            userMessage.innerHTML = `<p>${question}</p>`;

                            // Add bot answer to the chat
                            const botMessage = document.createElement('div');
                            botMessage.classList.add('message', 'bot');
                            botMessage.innerHTML = `<p>${answer}</p>`;

                            // Append user message first, then bot message
                            chat.appendChild(userMessage);
                            chat.appendChild(botMessage);

                            // Scroll to the bottom of the chat
                            chat.scrollTop = chat.scrollHeight;
                            }
                        </script>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>