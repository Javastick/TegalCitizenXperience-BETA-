const easy = document.querySelector('#easy');
const medium = document.querySelector('#medium');
const hard = document.querySelector('#hard');
let point;

easy.addEventListener('click', function () {
    initGame('easy', 1);
});

medium.addEventListener('click', function () {
    initGame('medium', 3);
});

hard.addEventListener('click', function () {
    initGame('hard', 10);
});

function generateQuestion(difficulty) {
    let random = Math.floor(Math.random() * 3);
    let operation;

    if (random === 0) {
        operation = '-';
    } else if (random === 1) {
        operation = '*';
    } else if (random === 2) {
        operation = '/';
    } else {
        operation = '+';
    }

    let num1, num2, num3;

    if (difficulty === 'easy') {
        num1 = Math.floor(Math.random() * 10) + 1;
        num2 = Math.floor(Math.random() * 10) + 1;
        return `${num1} ${operation} ${num2}`;
    } else if (difficulty === 'medium') {
        num1 = Math.floor(Math.random() * 10) + 1;
        num2 = Math.floor(Math.random() * 10) + 1;
        num3 = Math.floor(Math.random() * 10) + 1;
        return `${num1} ${operation} ${num2} ${operation} ${num3}`;
    } else if (difficulty === 'hard') {
        num1 = Math.floor(Math.random() * 100) + 1;
        num2 = Math.floor(Math.random() * 100) + 1;
        num3 = Math.floor(Math.random() * 100) + 1;
        return `${num1} ${operation} ${num2} ${operation} ${num3}`;
    } else {
        num1 = Math.floor(Math.random() * 10) + 1;
        num2 = Math.floor(Math.random() * 10) + 1;
        return `${num1} ${operation} ${num2}`;
    }
}

let correctAnswer;

function initGame(difficulty, num) {
    const question = generateQuestion(difficulty);
    document.getElementById('question').textContent = question;
    correctAnswer = eval(question);
    console.log(correctAnswer);
    document.getElementById('input-answer').value = '';
    document.getElementById('result').textContent = '';
    point = num;
    console.log(point);
}


function checkAnswer() {
    const userAnswer = parseInt(document.getElementById('input-answer').value);

    if (isNaN(userAnswer)) {
        document.getElementById('result').textContent = 'Masukkan angka!';
    } else {
        if (userAnswer === correctAnswer) {
            document.getElementById('result').textContent = 'Jawaban Benar! Pilih soal lagi!';
            document.getElementById('correct').value = point;
        } else {
            document.getElementById('result').textContent = 'Jawaban Salah, Seharusnya '+correctAnswer;
            document.getElementById('correct').value = 0;
        }
        setTimeout(() => initGame('easy'), 1500); 
    }
}
