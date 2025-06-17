const x = require("./module");

console.log(x.add(10, 20));

try {
  console.log("Trying to divide by zero");
  let result = x.divide(0, 10);
  console.log(result);
} catch (error) {
  console.log("Caught an error", error.message);
}

// // module wrapper
// (
//     function(exports, require, module, __filename, __dirname) {
//         // your module code goes here

//     }
// )
