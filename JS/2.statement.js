let name = "karan karki";
let age = 22;

// statement is the command that tells browser what to do 

// 1)Expression

let info = "The age of "+ name + " is " + age;
console.log(info);  

// 2) Conditional Statement

if(age>18){
    console.log("You can ride");
}

let a = 5;
let b = "5";

if(a===b){
    console.log("datatype and value both are same");
}
else if(a==b){
    console.log("values are same");
}
else{
    console.log("not equal");
}

// 3) Control Statement

for (let i=0; i<10; i++){
    console.log(i);
    if(i===3){
        break;
    }  
}
// 4)Loop