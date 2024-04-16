<?php
// Sample PHP code for quiz logic
session_start();

$quizData = [
    ['question' => '1. What does HTML stand for?', 'answers' => ['a) Hyper Text Markup Language','b) High Tech Markup Language','c) Hyperlink Text Markup Language','d) Home Tool Markup Language'], 'correctAnswer' => 0],
    ['question' => '2. Which technology is primarily responsible for the styling of web pages?', 'answers' => ['a) JavaScript', 'b) HTML', 'c) CSS', 'd) Python'], 'correctAnswer' => 2],
    ['question' => '3. What does CSS stand for?', 'answers' => ['a) Creative Style Sheets', 'b) Cascading Style Sheets', 'c) Computer Style Sheets', 'd) Custom Style Sheets'], 'correctAnswer' => 1],
    ['question' => '4. Which programming language is mainly used for adding interactivity to websites?', 'answers' =>['a) HTML', 'b) CSS', 'c) Python', 'd) JavaScript'], 'correctAnswer'=> 3],
    ['question' => '5. What is the purpose of a front-end web development framework like React or Angular?', 'answers' =>[
    'a) To manage databases and server-side logic','b) To create a visually appealing user interface','c) To handle server-side routing','d) To interact with web servers'], 'correctAnswer' => 1],
    [ 'question' => '6. Which part of web development is responsible for handling data storage and retrieval?', 'answers'=> ['a) Front-end development','b) Back-end development','c) Full-stack development','d) Middleware development'], 'correctAnswer'=>1], 
    [ 'question'=> '7. What is the primary function of a web server in the context of web development?', 'answers' =>['a) Rendering web pages on the client’s browser', 'b) Executing JavaScript code','c) Storing user data','d) Handling HTTP requests and serving web pages'], 'correctAnswer' => 3],   
    ['question'=> '8. Which of the following is not a back-end programming language commonly used in web development?', 'answers' => ['a) PHP','b) Ruby','c) Java','d) HTML'], 'correctAnswer' =>3],
    [ 'question' => '9. Which type of web development allows for both front-end and back-end development using a single language?', 'answers'=> ['a) Full-stack development','b) Cross-platform development','c) Multi-language development','d) Hybrid development'], 'correctAnswer' =>0],
    [ 'question' =>'10. What is the purpose of the script tag in HTML?', 'answers'=> ['a) To define the page’s structure','b) To include external CSS styles','c) To include external JavaScript code','d) To create hyperlinks'], 'correctAnswer'=> 2],
    [ 'question'=> '11. What is the correct syntax for creating a CSS class called “highlight” with a red text color?','answers'=> ['a) .highlight { color: red; }','b) highlight { text-color: red; }','c) .highlight { text-color: red; }','d) highlight { color: red; }'], 'correctAnswer'=>0],
    [ 'question'=> '12. Which HTML tag is used to create a hyperlink?', 'answers'=> ['a) {a}','b) {link}','c) {h1}','d) {p}'], 'correctAnswer'=>0],
    [ 'question' =>'13. What is the purpose of the “alt” attribute in an  tag?','answers' => ['a) It specifies the alignment of the image','b) It provides alternative text if the image fails to load','c) It sets the size of the image','d) It defines the image source'], 'correctAnswer'=> 1],
    [ 'question'=>'14. Which CSS property is used to control the spacing between elements in a layout?', 'answers'=>['a) padding','b) margin','c) spacing','d) border'], 'correctAnswer'=> 2],
    [ 'question'=> '15. Which of the following is a popular front-end development framework maintained by Google?', 'answers'=> ['a) React','b) Angular','c) Vue.js','d) Django'],'correctAnswer' => 1]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    foreach ($_POST as $question => $answerIndex) {
        $correctAnswer = $quizData[$question]['correctAnswer'];
        if ($answerIndex == $correctAnswer) {
            $score++;
        }
    }
    $_SESSION['score'] = $score;
    header('Location: result.php');
    exit;
}

// Display quiz questions
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="post">
        <?php foreach ($quizData as $index => $question): ?>
            <div class="question">
                <h3><?php echo $question['question']; ?></h3>
                <?php foreach ($question['answers'] as $answerIndex => $answer): ?>
                    <label>
                        <input type="radio" name="question<?php echo $index; ?>" value="<?php echo $answerIndex; ?>">
                        <?php echo $answer; ?>
                    </label>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
