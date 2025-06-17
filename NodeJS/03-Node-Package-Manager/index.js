const lodash = require("lodash");

const names = ["petrus", "handika", "sinaga", "aiden", "putra", "angkasa"];
const capitalize = lodash.map(names, lodash.capitalize);

console.log(capitalize);
