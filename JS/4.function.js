// Function

function add(a,b){
    return a + b;
}
let sum = add(5,6);
console.log(sum);


// recursion
function recur(num){
    if(num==0){
        return 0;
    }
    console.log(num);
    return num + recur(num-1);
}
let sum1 = recur(10);
console.log(sum1);

// arrow function

let sub = (a,b) => a-b;
let sub1 = sub(5,4);
console.log(sub1);


// regular expression

let pattern = /ra/;
let text = "karan";

let result = text.match(pattern);
console.log(result);

