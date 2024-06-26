document.addEventListener('DOMContentLoaded', function() {
    const loginContainer = document.getElementById('login-container');
    const quizContainer = document.getElementById('quiz-container');
    
    // Check if the user is logged in (you can implement this logic)
    const isLoggedIn = false; // Change this to true if the user is logged in

    if (isLoggedIn) {
        loginContainer.style.display = 'none';
        quizContainer.style.display = 'block';
    } else {
        loginContainer.style.display = 'block';
        quizContainer.style.display = 'none';
    }

const quizData = [
    { question: '1. What does HTML stand for?', answers: ['a) Hyper Text Markup Language','b) High Tech Markup Language','c) Hyperlink Text Markup Language','d) Home Tool Markup Language'], correctAnswer: 0 },
    { question: '2. Which technology is primarily responsible for the styling of web pages?', answers: ['a) JavaScript', 'b) HTML', 'c) CSS', 'd) Python'], correctAnswer: 2 },
    { question: '3. What does CSS stand for?', answers: ['a) Creative Style Sheets', 'b) Cascading Style Sheets', 'c) Computer Style Sheets', 'd) Custom Style Sheets'], correctAnswer: 1 },
    { question: '4. Which programming language is mainly used for adding interactivity to websites?', answers:['a) HTML', 'b) CSS', 'c) Python', 'd) JavaScript'], correctAnswer:3},
    { question: '5. What is the purpose of a front-end web development framework like React or Angular?', answers:[
        'a) To manage databases and server-side logic','b) To create a visually appealing user interface','c) To handle server-side routing','d) To interact with web servers'], correctAnswer:1},
    { question: '6. Which part of web development is responsible for handling data storage and retrieval?', answers:['a) Front-end development','b) Back-end development','c) Full-stack development','d) Middleware development'], correctAnswer:1},
    { question:'7. What is the primary function of a web server in the context of web development?', answers:['a) Rendering web pages on the client’s browser', 'b) Executing JavaScript code','c) Storing user data','d) Handling HTTP requests and serving web pages'], correctAnswer:3},
    { question:'8. Which of the following is not a back-end programming language commonly used in web development?', answers: ['a) PHP','b) Ruby','c) Java','d) HTML'], correctAnswer:3},  
    { question:'9. Which type of web development allows for both front-end and back-end development using a single language?', answers:['a) Full-stack development','b) Cross-platform development','c) Multi-language development','d) Hybrid development'], correctAnswer:0},
    { question:'10. What is the purpose of the script tag in HTML?', answers:['a) To define the page’s structure','b) To include external CSS styles','c) To include external JavaScript code','d) To create hyperlinks'], correctAnswer:2},   
    { question:'11. What is the correct syntax for creating a CSS class called “highlight” with a red text color?',answers:['a) .highlight { color: red; }','b) highlight { text-color: red; }','c) .highlight { text-color: red; }','d) highlight { color: red; }'], correctAnswer:0},
    { question: '12. Which HTML tag is used to create a hyperlink?', answers:['a) {a}','b) {link}','c) {h1}','d) {p}'], correctAnswer:0},
    { question:'13. What is the purpose of the “alt” attribute in an  tag?',answers: ['a) It specifies the alignment of the image','b) It provides alternative text if the image fails to load','c) It sets the size of the image','d) It defines the image source'], correctAnswer:1},
    { question:'14. Which CSS property is used to control the spacing between elements in a layout?', answers:['a) padding','b) margin','c) spacing','d) border'], correctAnswer:2},
    { question:'15. Which of the following is a popular front-end development framework maintained by Google?', answers:['a) React','b) Angular','c) Vue.js','d) Django'],correctAnswer:1}
];

    const questionContainer = document.getElementById('question-container');
    const answersContainer = document.getElementById('answers-container');
    const submitButton = document.getElementById('submit-btn');
    const resultContainer = document.getElementById('result-container');

    let currentQuestion = 0;
    let score = 0;

    function displayQuestion() {
        questionContainer.innerHTML = quizData[currentQuestion].question;
        answersContainer.innerHTML = '';
        quizData[currentQuestion].answers.forEach((answer, index) => {
            const answerElement = document.createElement('button');
            answerElement.textContent = answer;
            answerElement.addEventListener('click', () => {
                if (index === quizData[currentQuestion].correctAnswer) {
                    score++;
                }
            });
            answersContainer.appendChild(answerElement);
        });
    }

    function showResult() {
        resultContainer.textContent = `Your score: ${score} out of ${quizData.length}`;
    }

    displayQuestion();

    submitButton.addEventListener('click', () => {
        currentQuestion++;
        if (currentQuestion < quizData.length) {
            displayQuestion();
        } else {
            showResult();
        }

        // Function to handle registration form submission
        document.getElementById('registration-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Get the username from the form
            const username = document.getElementById('username').value;

            // Simulate registration (you can replace this with your actual registration logic)
            console.log('New user registered:', username);
        });

        // Session timer logic
        function startTimer() {
            timerTitle.style.display = 'block'; // Show the timer title
            timerElement.style.display = 'block'; // Show the timer
            const sessionDuration = 600; // Session duration in seconds (10 minutes)
            let timeRemaining = sessionDuration;
            updateTimerDisplay(timeRemaining); // Display initial timer value
            timer = setInterval(() => {
                timeRemaining--;
                updateTimerDisplay(timeRemaining);
                if (timeRemaining <= 0) {
                    clearInterval(timer); // Stop the timer when it reaches zero
                    alert('Session expired. Please log in again.'); // You can customize this message
                }
            }, 1000); // Update timer every second
        }

        function updateTimerDisplay(secondsRemaining) {
            const minutes = Math.floor(secondsRemaining / 60);
            const seconds = secondsRemaining % 60;
            timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }
    });
});