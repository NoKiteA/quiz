const button = document.querySelector('.next');
const questions = document.querySelectorAll('.question');
const sub = document.querySelector('.sub');
let i = 1;

button.addEventListener('click', () => {
    questions[i - 1].classList.remove('active');
    questions[i].classList.add('active');
    i++
    if(i == 5) {
        button.classList.remove("active")
        sub.classList.add("active");
    }
});

// const submitAnswers = () => {
//     const result = document.querySelector('.result');
//     const total = 5;
//     let score = 0;
    
//     questions[i].classList.remove('active');

//     let answers = [
//         document.forms["quizForm"]["q1"].value,
//         document.forms["quizForm"]["q2"].value,
//         document.forms["quizForm"]["q3"].value,
//         document.forms["quizForm"]["q4"].value,
//         document.forms["quizForm"]["q5"].value
//     ];

//     let correct = ["b", "a", "d", "b", "d"];
    
//     let i = 0;
//     answers.forEach(answer => {
//         if(answer == correct[i]) {
//             score++;
//         }
//         i++;
//     })
    
//     result.innerHTML = `<h3>Your score is ${ score }/${ total }</h3>`;
//     return false;
// }