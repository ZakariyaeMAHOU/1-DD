let btn = document.querySelector("#divide-btn");
btn.addEventListener("click", function () {
    let firstNumber = document.querySelector("#first-number").value
    let secondNumber = document.querySelector("#second-number").value

    try {
        let result = divide(firstNumber, secondNumber)
        document.querySelector("#Result").innerHTML = result
    } catch (err) {
        document.querySelector("#Result").innerHTML = err
    }
});