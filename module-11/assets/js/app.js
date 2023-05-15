function multiplicationTable(num){
    for(var i=1; i<=10; i=i+1){
        var product = num*i;
        console.log(num+" x "+i+" = "+product);
    }
}
multiplicationTable(3);
multiplicationTable(4);
multiplicationTable(5);