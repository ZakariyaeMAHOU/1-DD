/*
    Modules
    - Import And Export
*/

let a = 10;
let arr = [1, 2, 3, 4];

function saySomething() {
    return `Something`;
}

export {
    a as ten,
    arr,
    saySomething,
};

export default function () {
    return `Hello`;
}