<?php include("inc/header.php") ?>

<script src="/www/public/js/questionsHamza.js" defer></script>

<div class="home-box custom-box">
        <p><img src="img/begins.gif" style="width: 100%" alt=""></p><br>
        <center><p>Total number of questions: <span class="total-questions"></span></p></center>
        <center><button type="button" class="btn" onclick="startQuiz()">Start Quiz</button></center>
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
            <p><img src="img/wasted.jpg" style="width: 100%" alt=""></p><br>
        </table>

        <button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
        

    </div>

        <center><a href="index.php"><button type="button" id="main" class="btn">Back to Main Menu</button></a></center>

    <?php include("inc/footer.php") ?>
</body>
</html>