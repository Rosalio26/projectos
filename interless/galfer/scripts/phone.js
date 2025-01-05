
let valoresBtn001 = [".", ",", ":", "@", "*", "-", "+", "/", "*"];
let valoresBtn002 = ["a", "b", "c"];
let valoresBtn003 = ["d", "e", "f"];
let valoresBtn004 = ["g", "h", "i"];
let valoresBtn005 = ["j", "k", "l"];
let valoresBtn006 = ["m", "n", "o"];
let valoresBtn007 = ["p", "q", "r", "s"];
let valoresBtn008 = ["t", "u", "v"];
let valoresBtn009 = ["w", "x", "y", "z"];
let valoresBtn000 = [" "];
// let valoresBtn0mt = ["a", "b", "c"];
// let valoresBtn0sh = ["a", "b", "c"];
var indice = 0;

let btn001 = document.querySelector("#btn-01");
var btn002 = document.querySelector("#btn-02");
var btn003 = document.querySelector("#btn-03");
var btn004 = document.querySelector("#btn-04");
var btn005 = document.querySelector("#btn-05");
var btn006 = document.querySelector("#btn-06");
var btn007 = document.querySelector("#btn-07");
var btn008 = document.querySelector("#btn-08");
var btn009 = document.querySelector("#btn-09");
var btn0mt = document.querySelector("#btn-mt");
var btn000 = document.querySelector("#btn-00");
var btn0sh = document.querySelector("#btn-sh");


var textInput = document.getElementById("cnt-text-call")

btn001.addEventListener('click', function(botao){
    indice = (indice + 1) % valoresBtn001.length;
    textInput.value += valoresBtn001[indice]
})

btn002.addEventListener('click', function(botao){
    indice = (indice + 1) % valoresBtn002.length;
    textInput.value = valoresBtn002[indice]
})

btn003.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn003.length;
    textInput.value = valoresBtn003[indice]
})

btn004.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn004.length;
    textInput.value = valoresBtn004[indice]
})

btn005.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn005.length;
    textInput.value = valoresBtn005[indice]
})

btn006.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn006.length;
    textInput.value = valoresBtn006[indice]
})

btn007.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn007.length;
    textInput.value = valoresBtn007[indice]
})

btn008.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn008.length;
    textInput.value = valoresBtn008[indice]
})

btn009.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn009.length;
    textInput.value = valoresBtn009[indice]
})

btn000.addEventListener('click', function(){
    indice = (indice + 1) % valoresBtn000.length;
    textInput.value = valoresBtn000[indice]
})
// btn0mt.addEventListener('click', function(){
//     indice = (indice + 1) % valoresBtn0mt.length;
//     textInput.value = valoresBtn0mt[indice]
// })

// btn0sh.addEventListener('click', function(){
//     indice = (indice + 1) % valoresBtn.length;
//     textInput.value = valoresBtn[indice]
// })