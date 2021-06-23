<?php include("inc/header.php") ?>

<script src="/www/public/js/questionsJerome.js" defer></script>

<div class="home-box custom-box">
        <h3>Instructions</h3>
        <p>Total number of questions: <span class="total-questions"></span></p>
        <button type="button" class="btn" onclick="startQuiz()">Start Quiz</button>
    </div>

    <div class="quiz-box custom-box hide">
        <div class="question-number" id="questionNum">
            
        </div>
        <div class="question-text">
            
        </div>
        <div class="option-container">
            
        </div>
        <div class="next-question-btn">
            <button type="button" class="btn" onclick="next()">Next</button>
        </div>
        <div class="answers-indicator">
            
        </div>
    </div>

    <div class="result-box custom-box hide">
        <h1>Quiz Result</h1>
        <table>
            <tr>
                <td>Total Question</td>
                <td><span class="total-questions"></span></td>
            </tr>
            <tr>
                <td>Attempts</td>
                <td><span class="total-attempt"></span></td>
            </tr>
            <tr>
                <td>Correct</td>
                <td><span class="total-correct"></span></td>
            </tr>
            <tr>
                <td>Wrong</td>
                <td><span class="total-wrong"></span></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><span class="percentage"></span></td>
            </tr>
            <tr>
                <td>Your Total Score</td>
                <td><span class="total-score"></span></td>
            </tr>
        </table>

        <button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
        <button type="button" class="btn" onclick="goToHome()">Go To Home</button>

    </div>
    <?php include "../inc/footer.php" ?>
</body>
</html>