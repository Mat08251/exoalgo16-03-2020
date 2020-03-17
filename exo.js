var a = 4;
var b = 5;

if (a > b){
    console.log ('a est plus grand que b');
}
else {
    console.log ('il est plus grand');
}


var c = 2;
var d = 15;

c, d = d, c; 

console.log(d, c);

var result= a + b;
console.log (result);


var min = 1;
var max = 100;
var random = Math.floor (Math.random() * (max - min)) + min;
console.log(random);

var d =6;
var e=7;

console.log("addition : "+addition(d,e));
function addition(a,b){
    return a+b;
}


var z=random_int(0,5);
exo9(z);

function exo9(x){
    var z;
    switch (x) {
        case 1:
            console.log("AAA");
        break;
        case 2:
            console.log("BBB");
        break;
        case 3:
            console.log("CCC");
        break;
        case 4:
            console.log("DDD");
        break;
        default:
            console.log("je suis une peruche");
    }
}

function random_int(min, max){
    return Math.floor(min + (Math.tandom() * Math.floor(max-min)));
}




for(var i=0;i<10;i++){
    document.write('Nombre aléatoire n°'+(i+1)+' : '+ random_int(0,1000)+'<br>');
}


var tableau = [];

for(var i=0;i<10;i++){
    tableau[i] = random_int(0,1000);
}


var i = 1;

tableau.forEach(element => {
    document.write('Valeur '+i+' : '+element+'<br>')
    i++;
});

var total = 0;
for (var i=0; i<tableau.length; i++) {
    total += tableau[i];
}
document.write('Total '+total+'<br>');





