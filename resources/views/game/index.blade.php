<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Game Matematika untuk Anak-Anak</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
        #question {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #answer {
            font-size: 24px;
            width: 100px;
        }

        #result {
            font-size: 24px;
            margin-top: 20px;
        }

        #next {
            font-size: 24px;
            display: none;
        }
        .kbl{
            width: 100%;
            margin: 50px;
        }
    </style>
</head>

<body>
    <div class="kbl">
        <a href="/">Kembali</a>
    </div>
    <h1>Game Matematika untuk Mencerdaskan Masyarakat Tegal</h1>
    <div id="question"></div>
    <form>
        <input type="number" id="answer">
        <button type="submit">Jawab</button>
    </form>
    <div id="result"></div>
    <button id="next">Selanjutnya</button>
    <script>
        let question = document.getElementById("question");
        let answer = document.getElementById("answer");
        let result = document.getElementById("result");
        let next = document.getElementById("next");
        let num1, num2, op, correctAnswer;
        generateQuestion();
        document.addEventListener("submit", function(event) {
            event.preventDefault();

            if (parseInt(answer.value) == correctAnswer) {
                result.innerHTML = "Jawaban benar!";
                next.style.display = "inline";
            } else {
                result.innerHTML = "Jawaban salah. Coba lagi!";
            }
        });
        document.addEventListener("click", function(event) {
            if (event.target.id == "next") {
                generateQuestion();
                answer.value = "";
                result.innerHTML = "";
                next.style.display = "none";
            }
        });

        function generateQuestion() {
            num1 = Math.floor(Math.random() * 10) + 1;
            num2 = Math.floor(Math.random() * 10) + 1;
            op = Math.floor(Math.random() * 2);

            if (op == 0) {
                question.innerHTML = num1 + " + " + num2 + " = ?";
                correctAnswer = num1 + num2;
            } else {
                question.innerHTML = num1 + " - " + num2 + " = ?";
                correctAnswer = num1 - num2;
            }
        }
    </script>
</body>

</html>
