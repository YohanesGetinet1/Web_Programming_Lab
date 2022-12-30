

function add(){
    var num1=Number(document.getElementById("Number1").value);
    var num2=Number(document.getElementById("Number2").value);
    
    document.getElementById("result").innerHTML="Result="+ (num1+num2);
}

function sub()
{
    var num1=Number(document.getElementById("Number1").value);
    var num2=Number(document.getElementById("Number2").value);

    document.getElementById("result").innerHTML="Result="+ (num1-num2);
}

function mul()
{
    var num1=Number(document.getElementById("Number1").value);
    var num2=Number(document.getElementById("Number2").value);
    
    document.getElementById("result").innerHTML="Result="+ (num1*num2);
}
function div()
{
    var num1=Number(document.getElementById("Number1").value);
    var num2=Number(document.getElementById("Number2").value);
    document.getElementById("result").innerHTML="Result="+ (num1/num2)
}
