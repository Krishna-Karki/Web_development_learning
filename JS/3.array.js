
//actually this is object
// OBJECT (Dictionary)
let arr = ["karan",22];

console.log(arr[1]);

let arr2 = {
    name: "karan",
    age : 22,
    address : "morang"
}

console.log(arr2["name"]);

//foreach($arr as element) - php for array
for(element of arr){
    console.log(element);
}

//foreach($arr as key=>element) - php for dictionary

for(key in arr2){
    console.log("The value of " + key + " is "+arr2[key]);
}

// BUILT in object

    // STRING OBJECT

    let firstname = "krishna";
    let lastname = "karki";
    let age = 23;

    let fullname = firstname + lastname;
    console.log(fullname.length);

    console.log(fullname.toUpperCase());
    console.log(fullname.toLowerCase());
    console.log(fullname.split(" "));
    console.log(fullname.indexOf("a"));
    console.log(fullname.replace("karki","kkkkkkkkkkk"));

    // MATH OBJECT

    console.log(Math.random());
    console.log(Math.pow(3,3));
    console.log(Math.max(2,5,8));
    console.log(Math.min(2,5,8));

    // DATE OBJECT

    let date = new Date();

    console.log(date);
    console.log(date.getFullYear());
    console.log(date.getTime());

